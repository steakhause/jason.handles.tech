<?php

namespace App\View\Components\Chat;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Window extends Component
{
    public function __construct(
        public ?string $webhookId = null,
        public array $options = [],
    ) {}

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('components.chat.window', [
            // you can also pass computed values here
            'webhookUrl' => $this->computedWebhookUrl(),
        ]);
    }

    protected function computedWebhookUrl(): string
    {
        $base   = rtrim(config('services.n8n.url'), '/');
        $suffix = trim($this->webhookId ?? '', '/');

        return "{$base}/webhook/{$suffix}";
    }
}