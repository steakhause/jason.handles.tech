// resources/js/chat.js

const LS_KEY_VARIANTS = [
  'n8n-chat/sessionid', // canonical
  'n8nchat/sessionId',
  'n8n-chat/sessionId',
  'n8nchat/sessionid',
];

$('#n8n-chat').on('click', '.chat-message-from-user', function(){
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
      if (key !== LS_KEY_VARIANTS[0]) localStorage.setItem(LS_KEY_VARIANTS[0], val);
      return val;
    }
  }
  const id = uuidv4();
  localStorage.setItem(LS_KEY_VARIANTS[0], id);
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
  const clearBtn  = document.getElementById('clear-chat');
  const submitBtn = document.getElementById('submit-chat');

  // Defaults; can be overridden via data-* on #submit-chat
  const postUrl     = submitBtn?.dataset.postUrl || '/n8n-chats';
  const sendBtnSel  = submitBtn?.dataset.sendBtn || '.chat-input-send-button';
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
    const isEnter = (e.key === 'Enter' || e.keyCode === 13);
    const target = e.target;
    if (!isEnter || !(target instanceof HTMLTextAreaElement)) return;
    if (!target.matches(textareaSel)) return;
    if (e.shiftKey || e.ctrlKey || e.altKey || e.metaKey) return;

    e.preventDefault(); // intercept so the widget doesn’t submit first
    e.stopPropagation();
    e.stopImmediatePropagation();

    await handleSubmit('enter');
  }, { capture: true, passive: false });
}
