<x-app-layout class="dashboard-chat-bot">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-300 leading-tight">
            Demo Account for {{ auth()->user()->first_name }}
        </h2>
    </x-slot>

    <div class="py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-stone-800 text-stone-100 shadow-sm rounded-xl overflow-hidden">
                <!-- Intro -->
                <div class="p-6 sm:p-8">
                    <div class="space-y-4">
                        <p class="text-stone-300">
                            Welcome {{ auth()->user()->first_name }}!
                        </p>@php
                        $user = auth()->user();
                        $hasUserInfoDoc = $user?->documents()
                        ->where('platform', 'google')
                        ->where('title', 'like', '%User Information%')
                        ->exists();
                        @endphp

                        @if($hasUserInfoDoc)
                            <p class="mb-8">
                                Your skills and experience information has been loaded into the system. 
                            </p>
                            <p class="mb-8">
                                Feel free to add additional documents below or modify existing ones in your Google Drive at any time.
                            </p>
                            <p class="mb-8">
                                To get started, simply paste a job description into the chat window below. In mere moments you will receive an email from our professional AI job coach. We hope that you will find that your job coach has crafted the perfect resume and cover letter, referencing your full breadth of knowlede and accomplishments, and helping the hiring managers recognize why you are the best candidate for the position.
                            </p>
                            <p></p>
                            <p class="text-red-400">
                                Thank you for taking the time to try this demo. This tool is intentionally lightweight and not meant to be a fully fleshed-out project. It stands to serve only as a working example, demonstrating a few of my proficiencies. This project is all self hosted from my homelab and was built utilizing Proxmox, Docker, Nginx, PHP, Laravel, MySQL, Postgres, 8n8, Agentic AI, and Restful APIs.
                            </p>
                        @endif
                            @if (session('status'))
                                <div class="mb-4 rounded-lg bg-green-100 text-green-900 px-4 py-3">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="mb-4 rounded-lg bg-red-100 text-red-900 px-4 py-3">
                                    <ul class="list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <div class="prose prose-invert max-w-none mb-6">
                            <p class="mb-3">
                                Please share your Google document with:
                                <code class="px-1 py-0.5 rounded bg-stone-700">jason-ryszka@handles-tech.iam.gserviceaccount.com</code>
                            </p>
                            <p class="mb-6">
                                Then paste the document URL (or ID) below and submit.
                            </p>
                        </div>

                        <form id="userInfoDocForm" class="space-y-4" method="POST" action="{{ route('documents.userInfo.store') }}">
                            @csrf

                            <!-- Hidden fields -->
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <input type="hidden" name="platform" value="google">
                            <input type="hidden" name="title" value="User Information">

                            <!-- Visible field -->
                            <label for="doc_id" class="block text-sm font-medium text-stone-200">Google Doc URL or ID</label>
                            <input
                                id="doc_id"
                                name="doc_id"
                                type="text"
                                required
                                placeholder="https://docs.google.com/document/d/xxxx... or the raw ID"
                                class="w-full rounded-md bg-stone-800 border border-stone-700 px-3 py-2 text-stone-100 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-500" />
                            <p id="docHint" class="text-xs text-stone-400"></p>

                            <button
                                type="submit"
                                class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium bg-stone-100 text-stone-900 hover:bg-white">
                                Save Document
                            </button>
                        </form>

                        <script>
                            (function() {
                                const input = document.getElementById('doc_id');
                                const hint = document.getElementById('docHint');
                                const form = document.getElementById('userInfoDocForm');

                                function extractGoogleId(raw) {
                                    if (!raw) return null;
                                    try {
                                        const u = new URL(raw.trim());
                                        const pathAndSearch = (u.pathname || '') + (u.search || '');
                                        const patterns = [
                                            /\/d\/([a-zA-Z0-9_-]{10,})/, // /d/<id>
                                            /[?&]id=([a-zA-Z0-9_-]{10,})/ // ?id=<id>
                                        ];
                                        for (const re of patterns) {
                                            const m = pathAndSearch.match(re);
                                            if (m) return m[1];
                                        }
                                    } catch (_) {
                                        // Not a URL; maybe it's already an ID
                                    }
                                    const plain = raw.trim();
                                    const m = plain.match(/^[a-zA-Z0-9_-]{20,}$/);
                                    return m ? m[0] : null;
                                }

                                function showHint(raw) {
                                    const id = extractGoogleId(raw);
                                    hint.textContent = id ? `Detected Document ID: ${id}` : '';
                                }

                                input.addEventListener('input', () => showHint(input.value));
                                input.addEventListener('blur', () => showHint(input.value));

                                form.addEventListener('submit', (e) => {
                                    const id = extractGoogleId(input.value);
                                    if (id) {
                                        // Normalize the field to the raw ID before submit.
                                        input.value = id;
                                    }
                                });
                            })();
                        </script>
                    </div>
                </div>

                <!-- Content: text + video -->
                <div class="border-t border-stone-700">
                    <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-10 items-start">
                        <!-- Left column (details) -->
                        <!--
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-stone-200">Demo Video</h3>
                            <p class="text-stone-400">
                                The video showcases a quick walkthrough of the demo and related features.
                                On mobile, the video scales down to fit your screen; on larger screens,
                                it maintains a clean, readable layout next to this description.
                            </p>
                        </div>
                        -->

                        <!-- Chat Window -->
                        <div>
                            @if($hasUserInfoDoc)
                                <figure class="w-full">
                                    <!-- Aspect-ratio wrapper keeps video proportional -->
                                    <div id="n8n-chat" class="chat-window w-full overflow-hidden">
                                        <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
                                        <script type="module">
                                            import {
                                                createChat
                                            } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';

                                            createChat({
                                                webhookUrl: 'https://n8n.handles.tech/webhook/2afb26e9-f031-41d0-bfe9-e3f1d313e948/chat',
                                                target: '.chat-window',
                                                showWelcomeScreen: false,
                                                defaultLanguage: 'en',
                                                initialMessages: [],
                                                i18n: {
                                                    en: {
                                                        title: 'Hello, {{ auth()->user()->first_name }}.',
                                                        subtitle: "What job can I assist you in applying for?",
                                                        getStarted: 'New Conversation',
                                                        footer: '',
                                                        getStarted: 'New Conversation',
                                                        inputPlaceholder: 'Paste a job description or ask a question...',
                                                    },
                                                },
                                                mode: 'fullscreen',
                                                enableStreaming: true,

                                            });
                                        </script>
                                    </div>
                                    <div class="text-right flex flex-col sm:flex-row-reverse gap-3 sm:items-center sm:justify-between">
                                        <div class="flex gap-3">
                                            <button type="button" id="clear-chat"
                                                class="inline-flex items-center justify-center rounded-md px-4 py-2 mt-6 mr-4 text-sm font-medium bg-stone-700 hover:bg-stone-600 text-stone-100">
                                                Clear Chat
                                            </button>
                                            <button
                                                id="submit-chat"
                                                class="inline-flex items-center justify-center rounded-md px-4 py-2 mt-6 mr-4 text-sm font-medium bg-stone-100 text-stone-900 hover:bg-white"
                                                data-post-url="{{ route('n8n_chats.store', [], false) }}" {{-- relative: /n8n-chats --}}
                                                data-send-btn=".chat-input-send-button"
                                                data-textarea=".chat-inputs textarea">
                                                Submit This
                                            </button>

                                        </div>
                                    </div>

                                </figure>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- 
                <div class="border-t border-stone-700 px-6 sm:px-8 py-4 flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
                    <div class="flex gap-3">
                        <a href="{{ url()->previous() }}"
                            class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium bg-stone-700 hover:bg-stone-600 text-stone-100">
                            Go Back
                        </a>
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center justify-center rounded-md px-4 py-2 text-sm font-medium bg-stone-100 text-stone-900 hover:bg-white">
                            Dashboard
                        </a>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</x-app-layout>