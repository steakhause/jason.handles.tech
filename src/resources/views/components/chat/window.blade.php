<div
  {{ $attributes->merge(['id' => 'n8n-chat', 'class' => 'chat-window w-full overflow-hidden']) }}
  data-webhook-url="{{ $webhookUrl }}"
  data-webhook-id="{{ $webhookId }}"
  data-options='@json($options)'
></div>

<main class="chat-layout chat-wrapper n8n-chat">
    <div class="chat-header">
        <div class="chat-heading">
            <h1>Hello, </h1>
        </div>
        <p></p>
    </div>
    <div class="chat-body">
        <div class="chat-messages-list"></div>
    </div>
    <div class="chat-footer">
        <div data-v-de5e7961="" class="chat-input" style="--controls-count: 1;">
            <div data-v-de5e7961="" class="chat-inputs">
                <textarea data-v-de5e7961="" data-test-id="chat-input" placeholder="Paste a job description or ask a question..." style="height: 100px;"></textarea>
            </div>
        </div>
    </div>
</main>

@pushOnce('scripts', 'chat-window-init')
<script>
  (function () {
    const el = document.getElementById('n8n-chat');
    if (!el) return;
    const cfg = {
      webhookUrl: el.dataset.webhookUrl,
      options: JSON.parse(el.dataset.options || '{}'),
    };
    // window.initN8nChat(el, cfg);
  })();
</script>
@endPushOnce
