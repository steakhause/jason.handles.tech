<x-guest-layout>
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
                            Thank you for taking the time to review my site.
                        </p>
                        <p class="text-stone-400">
                            Here you'll find demos of my personal projects and an overview of the infrastructure I run through Handles Tech LLC.
                        </p>
                    </div>
                </div>

                <!-- Content: text + video -->
                <div class="border-t border-stone-700">
                    <div class="p-6 sm:p-8 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-10 items-start">
                        <!-- Left column (details) -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-stone-200">
                                <a href="{{ route('resume.builder') }}" class="hover:underline">
                                    AI Resume Builder
                                </a>
                            </h3>
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
                                    <iframe
                                        id="demo-video"
                                        class="w-full h-full"
                                        src="https://www.youtube.com/embed/FnM87Gmg07I"
                                        title="Demo video"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <!--<figcaption class="mt-2 text-sm text-stone-400">
                                    If the video doesn't play, try refreshing or check your network connection.
                                </figcaption>-->
                            </figure>

                        </div>
                    </div>
                </div>

                <!-- Handles Tech LLC: Independent Projects -->
                <div class="border-t border-stone-700">
                    <div class="p-6 sm:p-8 space-y-4">
                        <h3 class="text-lg font-semibold text-stone-200">
                            Handles Tech LLC: Independent Projects
                        </h3>
                        <p class="text-stone-400">
                            A self-hosted lab that I design, build, and run myself. I treat it as production, and it's where I prove out tools before I use them at work.
                        </p>
                        <ul class="list-disc pl-6 space-y-2 text-stone-400">
                            <li><strong class="text-stone-300">LLM gateway:</strong> a LiteLLM gateway serving several apps, routing between local GPU models and cloud models with fallback and per-client keys.</li>
                            <li><strong class="text-stone-300">RAG and evaluation:</strong> retrieval over my technical documentation, plus a model-evaluation harness that scores models before they're promoted.</li>
                            <li><strong class="text-stone-300">AI agents:</strong> an infrastructure triage agent that assesses alerts and reports on security, a personal assistant agent, and local voice tools (speech-to-text and Piper text-to-speech).</li>
                            <li><strong class="text-stone-300">Virtualization and storage:</strong> a Proxmox cluster with TrueNAS ZFS storage, including capacity planning, deduplication, and automated media transcoding.</li>
                            <li><strong class="text-stone-300">Security:</strong> OpenBao secrets management, nightly Trivy container CVE scanning with alerting, firewall segmentation, and hands-on incident response.</li>
                            <li><strong class="text-stone-300">Services and automation:</strong> a self-hosted mail server with replication, Nextcloud, reverse proxy with TLS, n8n workflows, and Home Assistant with Frigate NVR.</li>
                        </ul>
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
</x-guest-layout>