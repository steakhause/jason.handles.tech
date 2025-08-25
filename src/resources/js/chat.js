// resources/js/chat.js

const LS_KEY_VARIANTS = [
  'n8n-chat/sessionid', // canonical
  'n8nchat/sessionId',
  'n8n-chat/sessionId',
  'n8nchat/sessionid',
];

// ---------------- utils ----------------
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
    el => el.offsetParent !== null
  );
  return nodes.at(-1) || document.querySelector(selector);
}

async function saveChat({ url, csrf, sessionId, text }) {
  if (!url) {
    console.warn('[n8n_chats] Missing data-post-url on #submit-chat');
    return { ok: false, reason: 'no-url' };
  }
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
  });
  const ct = res.headers.get('content-type') || '';
  const body = ct.includes('application/json') ? await res.json() : await res.text();
  if (!res.ok) {
    console.warn('[n8n_chats] save failed', res.status, body);
    return { ok: false, status: res.status, body };
  }
  console.debug('[n8n_chats] saved row', body);
  return { ok: true, status: res.status, body };
}

// --------------- public API ---------------
export function initChatControls() {
  const clearBtn  = document.getElementById('clear-chat');
  const submitBtn = document.getElementById('submit-chat');

  console.debug('[n8n_chats] initChatControls binding…', { clearBtn: !!clearBtn, submitBtn: !!submitBtn });

  if (clearBtn) {
    clearBtn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();
      clearAllSessionIds();
      console.debug('[n8n_chats] cleared sessionId(s) from Local Storage');
    }, { capture: true });
  }

  if (submitBtn) {
    const postUrl     = submitBtn.dataset.postUrl || '/n8n-chats';
    const sendBtnSel  = submitBtn.dataset.sendBtn || '.chat-input-send-button';
    const textareaSel = submitBtn.dataset.textarea || '.chat-inputs textarea';
    const csrf        = getCsrfToken();

    // CAPTURE PHASE to ensure we run first
    submitBtn.addEventListener('click', async (e) => {
      console.debug('[n8n_chats] submit handler fired');
      // stop anything else from seeing this click
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();

      const ta = getChatTextarea(textareaSel);
      const text = (ta?.value || '').trim();
      const sessionId = getOrInitSessionId();

      if (!text) {
        console.debug('[n8n_chats] empty textarea; skipping DB save');
        // return; // uncomment if you want to do nothing when empty
      } else {
        try {
          await saveChat({ url: postUrl, csrf, sessionId, text });
        } catch (err) {
          console.error('[n8n_chats] network error', err);
        }
      }

      // For debugging: prove this handler ran
      //alert('Captured click; NOT forwarding to chat. sessionId=' + sessionId);

      // When you’re ready to re-enable sending through the widget:
      document.querySelector(sendBtnSel)?.click();
    }, { capture: true }); // <— important
  } else {
    console.warn('[n8n_chats] #submit-chat not found on page');
  }
}
