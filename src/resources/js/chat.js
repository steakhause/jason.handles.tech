// resources/js/chat.js

const LS_KEY_VARIANTS = [
  'n8n-chat/sessionId', // canonical
  'n8nchat/sessionId',
  'n8n-chat/sessionid',
  'n8nchat/sessionid',
];

$('#n8n-chat').on('click', '.chat-message-from-user', function () {
  $(this).toggleClass('no-line-clamp');
});

// ---------- utils ----------
function uuidv4() {
  if (typeof crypto !== 'undefined' && crypto.randomUUID) return crypto.randomUUID();
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
    const r = (Math.random() * 16) | 0, v = c === 'x' ? r : (r & 0x3) | 0x8;
    return v.toString(16);
  });
}

function getOrInitSessionId() {
  for (const key of LS_KEY_VARIANTS) {
    const val = localStorage.getItem(key);
    if (val) {
      //if (key !== LS_KEY_VARIANTS[0]) alert(key + ' ' + val);
      return val;
    }
  }
  const id = uuidv4();
  //localStorage.setItem(LS_KEY_VARIANTS[0], id);
  return id;
}

function clearAllSessionIds() {
  for (const key of LS_KEY_VARIANTS) localStorage.removeItem(key);
}

function getCsrfToken() {
  return document.querySelector('meta[name="csrf-token"]')?.content || '';
}

function getChatTextarea(selector) {
  const nodes = Array.from(document.querySelectorAll(selector)).filter(
    el => el.offsetParent !== null && !el.closest('[hidden],[aria-hidden="true"]')
  );
  return nodes.at(-1) || document.querySelector(selector);
}

async function saveChat({ url, csrf, sessionId, text, signal }) {
  const res = await fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrf,
      'X-Requested-With': 'XMLHttpRequest',
      'Accept': 'application/json',
    },
    credentials: 'include',
    body: JSON.stringify({ session_id: sessionId, input: text }),
    signal,
  });
  const ct = res.headers.get('content-type') || '';
  const body = ct.includes('application/json') ? await res.json() : await res.text();
  if (!res.ok) {
    console.warn('[n8n_chats] save failed', res.status, body);
    return { ok: false, status: res.status, body };
  }
  return { ok: true, status: res.status, body };
}

// ---------- public API ----------
export function initChatControls() {
  if (window.__n8nChatBound) return; // avoid double-binding with HMR
  window.__n8nChatBound = true;

  const csrf = getCsrfToken();

  // --- Toggle for Google Docs panel ---
  const gdTogglebtn = document.getElementById('google-docs-form-toggle');
  const gdPanel = document.getElementById('google-docs-form');
  const toggleIcon = gdTogglebtn?.querySelector('svg');

  if (gdTogglebtn && gdPanel) {
    // Make aria-expanded match initial state
    gdTogglebtn.setAttribute('aria-expanded', String(!gdPanel.classList.contains('hidden')));
    gdTogglebtn.addEventListener('click', () => {
      const open = gdTogglebtn.getAttribute('aria-expanded') === 'true';
      gdTogglebtn.setAttribute('aria-expanded', String(!open));
      gdPanel.classList.toggle('hidden');
      toggleIcon?.classList.toggle('rotate-180');
    });
  }

  // --- Chat controls (not gated by the toggle’s existence) ---
  const clearBtn = document.getElementById('clear-chat');
  const submitBtn = document.getElementById('submit-chat');

  // Defaults; can be overridden via data-* on #submit-chat
  const postUrl = submitBtn?.dataset.postUrl || '/n8n-chats';
  const sendBtnSel = submitBtn?.dataset.sendBtn || '.chat-input-send-button';
  const textareaSel = submitBtn?.dataset.textarea || '.chat-inputs textarea';

  let saving = false;
  let aborter = null;

  async function handleSubmit(from = 'unknown') {
    const ta = getChatTextarea(textareaSel);
    const text = (ta?.value || '').trim();
    const sessionId = getOrInitSessionId();

    if (!text) {
      console.debug(`[n8n_chats] empty textarea; skipping DB save (from=${from})`);
      return;
    }
    if (saving) return;

    saving = true;
    aborter?.abort(); // cancel any in-flight request
    aborter = new AbortController();

    try {
      await saveChat({ url: postUrl, csrf, sessionId, text, signal: aborter.signal });
    } catch (err) {
      if (err.name !== 'AbortError') console.error('[n8n_chats] network error', err);
    } finally {
      saving = false;
    }

    // Forward to the widget (enable when ready):
    document.querySelector(sendBtnSel)?.click();
    setWaitState(true);
  }

  // Clear button
  if (clearBtn) {
    clearBtn.addEventListener('click', (e) => {
      e.preventDefault();
      clearAllSessionIds();
      console.debug('[n8n_chats] cleared sessionId(s) from Local Storage');
      window.location.reload();
    });
  } else {
    console.warn('[n8n_chats] #clear-chat not found');
  }

  // Fake submit button (click)
  if (submitBtn) {
    submitBtn.addEventListener('click', async (e) => {
      e.preventDefault();
      await handleSubmit('click');
    });
  } else {
    console.warn('[n8n_chats] #submit-chat not found');
  }

  // Keypress on ENTER to submit (on the textarea)
  document.addEventListener('keydown', async (e) => {
    const isEnter = (e.key === 'Enter');
    const target = e.target;
    if (!isEnter || !(target instanceof HTMLTextAreaElement)) return;
    if (!target.matches(textareaSel)) return;
    if (e.shiftKey || e.ctrlKey || e.altKey || e.metaKey) return;

    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();

    await handleSubmit('enter');
  }, { capture: true, passive: false });
}

// ---- Chat loader ----
const textareaSel = 'textarea[data-test-id="chat-input"]';
const sendBtnSel = '#n8n-chat [data-test-id="send-button"], [data-test-id="send-button"]';
const WAIT_TEXT = 'Please wait while I review your request…';
const N8N_CHAT_ENDPOINT = 'n8n.handles.tech/chat';


// --- SHOW/HIDE WAIT STATE -------------------------------------------------
function ensureLoader(ta) {
  let loader = document.getElementById('chat-wait-loader');
  if (!loader) {
    loader = document.createElement('div');
    loader.id = 'chat-wait-loader';
    loader.className = 'chat-loader hidden';
    loader.innerHTML = `<div class="spinner" aria-hidden="true"></div>
                        <span>${WAIT_TEXT}</span>`;
    // Place right after the textarea
    (ta.parentElement || ta).insertAdjacentElement('afterend', loader);
  }
  return loader;
}

function setWaitState(on) {
  const ta = getChatTextarea(textareaSel);
  if (!ta) return;

  // Remember original placeholder once
  if (!ta.dataset._origPh) ta.dataset._origPh = ta.placeholder || '';

  const loader = ensureLoader(ta);

  if (on) {
    try {
      ta.placeholder = WAIT_TEXT;
    } catch (_) { }
    ta.setAttribute('aria-busy', 'true');
    //ta.disabled = true;                // optional: prevent typing while sending
    loader.classList.remove('hidden'); // fallback/extra signal
  } else {
    try {
      ta.placeholder = ta.dataset._origPh || '';
    } catch (_) { }
    ta.removeAttribute('aria-busy');
    //ta.disabled = false;
    loader.classList.add('hidden');
  }
}

// --- FETCH WRAPPER: detect when the n8n chat POST completes ---------------
// --- detection config ---
const N8N_HOST = 'n8n.handles.tech';
const N8N_CHAT_PATH_RE = /\/(?:webhook\/[0-9a-f-]+\/)?chat(?:[/?#]|$)/i;

// --- fetch/XHR wrapper ---
(function wrapNetworkForN8N() {
  if (window.__wrappedNetworkForN8N) return;
  window.__wrappedNetworkForN8N = true;

  // fetch
  const _fetch = window.fetch;
  window.fetch = async function(input, init) {
    const method = (init?.method || 'GET').toUpperCase();
    const url = typeof input === 'string' ? input : input?.url;
    let isN8nChat = false;

    try {
      const u = new URL(url, location.href);
      isN8nChat = (u.host === N8N_HOST) && N8N_CHAT_PATH_RE.test(u.pathname) && method === 'POST';
    } catch { /* ignore parse errors */ }

    if (isN8nChat) setWaitState(true);

    try {
      const resp = await _fetch.apply(this, arguments);

      if (isN8nChat) {
        // If not streaming, clear immediately; otherwise clear after the clone finishes.
        if (!resp.body) {
          setWaitState(false);
        } else {
          resp.clone().text().finally(() => setWaitState(false));
        }
      }
      return resp;
    } catch (e) {
      if (isN8nChat) setWaitState(false);
      throw e;
    }
  };

  // XMLHttpRequest (for libs that still use it)
  const _open = XMLHttpRequest.prototype.open;
  const _send = XMLHttpRequest.prototype.send;

  XMLHttpRequest.prototype.open = function(method, url) {
    this.__isN8nChat = false;
    try {
      const u = new URL(url, location.href);
      this.__isN8nChat = (u.host === N8N_HOST) && N8N_CHAT_PATH_RE.test(u.pathname) && method.toUpperCase() === 'POST';
    } catch { /* ignore */ }
    return _open.apply(this, arguments);
  };

  XMLHttpRequest.prototype.send = function() {
    if (this.__isN8nChat) {
      setWaitState(true);
      this.addEventListener('loadend', () => setWaitState(false), { once: true });
    }
    return _send.apply(this, arguments);
  };
})();
