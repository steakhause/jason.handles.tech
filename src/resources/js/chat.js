export function initChatControls() {
  const clearBtn = document.getElementById('clear-chat');
  const submitBtn = document.getElementById('submit-chat');

  if (clearBtn) {
    clearBtn.addEventListener('click', (e) => {
      localStorage.removeItem('n8n-chat/sessionId');
    });
  }

  if (submitBtn) {
    submitBtn.addEventListener('click', async (e) => {
      document.querySelector('.chat-input-send-button')?.click();
    });
  }
}
