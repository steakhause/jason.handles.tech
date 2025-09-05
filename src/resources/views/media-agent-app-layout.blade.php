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

                        <!-- Content: text + video -->
                        <div class="border-t border-stone-700">
                            <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-10 items-start">

                                <!-- Chat Window -->
                                <div>
                                    <figure class="w-full">
                                        <!-- Aspect-ratio wrapper keeps video proportional -->
                                        <div id="n8n-chat" class="chat-window w-full overflow-hidden">


                                            <x-chat.window webhook-id="b42c5df2-86e9-44b0-b987-3c368c2d5851" :options="[]" />


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
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
</x-app-layout>