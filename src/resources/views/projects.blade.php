<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-300 leading-tight">
            Personal Projects
        </h2>
    </x-slot>

    <div class="py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-stone-800 text-stone-100 shadow-sm rounded-xl overflow-hidden">
                <!-- Intro -->
                <div class="p-6 sm:p-8">
                    <div class="space-y-4">
                        <p class="text-stone-300">
                            Welcome!
                        </p>
                        <p class="text-stone-400">
                            Thank you for taking the time to review site.
                        </p>
                        <p class="text-stone-400">
                            Here you will find a growing series of videos describing and demonstrating various personal projects.
                        </p>
                    </div>
                </div>

                <!-- Content: text + video -->
                <div class="border-t border-stone-700">
                    <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 items-start">
                        <!-- Left column (details) -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-stone-200">AI Resume Builder</h3>
                            <p class="text-stone-400">
                                This demo showcases a professional AI job coach that streamlines the arduous job-search process.
                            </p>
                            <p class="text-stone-400"> Users upload their resume and a kitchen-sink list of skills and experience at sign up. Job descriptions can then be directly pasted into the chat. Using Google Gemini 2.5 Flash, the agent evaluates the full background, prioritizes role-aligned strengths, and produces an ATS-aware resume and cover letter tailored to the posting. A supporting stack—Postgres for persistence, Google Drive/Docs APIs for document creation, and SMTP for email—coordinates storage, formatting, and delivery, so candidates iterate faster and submit higher-quality applications with less effort.
                            </p>
                        </div>

                        <!-- Right column (responsive video) -->
                        <div>
                            <figure class="w-full">
                                <!-- Aspect-ratio wrapper keeps video proportional -->
                                <div class="aspect-video w-full overflow-hidden rounded-lg ring-1 ring-stone-700/60">
                                    <video
                                        id="demo-video"
                                        class="w-full h-full"
                                        controls
                                        preload="metadata"
                                        poster="{{ asset('EV6.png') }}"
                                        aria-label="Demo video">
                                        <source src="{{ asset('videos/ai_resume_builder.mp4') }}" type="video/mp4" />
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                <!--<figcaption class="mt-2 text-sm text-stone-400">
                                    If the video doesn't play, try refreshing or check your network connection.
                                </figcaption>-->
                            </figure>
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