<x-site title="Projects · Jason Ryszka" description="Independent projects by Jason Ryszka (Handles Tech LLC): a self-hosted LLM platform, an infrastructure and security lab, and an AI resume builder.">
    <section class="border-b border-stone-200 bg-white dark:border-stone-800 dark:bg-stone-900">
        <div class="mx-auto max-w-5xl px-4 py-14 sm:px-6">
            <p class="text-sm font-semibold uppercase tracking-wider text-red-600">Handles Tech LLC</p>
            <h1 class="mt-3 text-3xl font-bold tracking-tight text-stone-900 sm:text-4xl dark:text-white">Independent projects</h1>
            <p class="mt-4 max-w-2xl text-lg text-stone-600 dark:text-stone-400">
                I design, build and run my own lab, and I treat it as production. It's where I try out tools before I use them at work.
            </p>
        </div>
    </section>

    <div class="mx-auto max-w-5xl space-y-10 px-4 py-14 sm:px-6">
        {{-- AI Resume Builder --}}
        <article class="grid gap-8 rounded-xl border border-stone-200 bg-white p-6 sm:p-8 md:grid-cols-2 dark:border-stone-800 dark:bg-stone-900">
            <div>
                <h2 class="text-xl font-semibold text-stone-900 dark:text-white">AI Resume Builder</h2>
                <p class="mt-3 text-stone-600 dark:text-stone-400">
                    A demo AI job coach. Candidates sign up with their resume and a full list of their skills and experience, then paste in a job description. The agent picks out the strengths that fit the role and writes a tailored resume and cover letter that pass applicant tracking systems.
                </p>
                <ul class="mt-4 flex flex-wrap gap-2 text-sm">
                    @foreach (['Laravel', 'n8n', 'Gemini 2.5 Flash', 'PostgreSQL', 'Google Docs & Drive APIs', 'SMTP'] as $t)
                        <li class="rounded-full bg-stone-100 px-3 py-1 text-stone-700 dark:bg-stone-800 dark:text-stone-300">{{ $t }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="aspect-video w-full overflow-hidden rounded-lg ring-1 ring-stone-200 dark:ring-stone-700">
                <iframe class="h-full w-full" src="https://www.youtube-nocookie.com/embed/FnM87Gmg07I" title="AI Resume Builder demo video"
                    loading="lazy" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </article>

        {{-- LLM platform --}}
        <article class="rounded-xl border border-stone-200 bg-white p-6 sm:p-8 dark:border-stone-800 dark:bg-stone-900">
            <h2 class="text-xl font-semibold text-stone-900 dark:text-white">Self-hosted LLM platform</h2>
            <ul class="mt-4 list-disc space-y-2 pl-5 text-stone-700 dark:text-stone-300">
                <li>A LiteLLM gateway serving several apps. It routes between local GPU models and cloud models, with fallback and a separate key for each client.</li>
                <li>RAG over my technical documentation, plus an evaluation harness that scores models on real tasks before I promote them.</li>
                <li>AI agents for infrastructure triage and personal assistance, and local voice tools for speech-to-text and Piper text-to-speech.</li>
            </ul>
        </article>

        {{-- Infra & security --}}
        <article class="rounded-xl border border-stone-200 bg-white p-6 sm:p-8 dark:border-stone-800 dark:bg-stone-900">
            <h2 class="text-xl font-semibold text-stone-900 dark:text-white">Infrastructure &amp; security lab</h2>
            <ul class="mt-4 list-disc space-y-2 pl-5 text-stone-700 dark:text-stone-300">
                <li>A Proxmox virtualization cluster with TrueNAS ZFS storage, including capacity planning, deduplication and automated media transcoding.</li>
                <li>OpenBao secrets management, nightly Trivy container CVE scanning with alerts, firewall segmentation, and hands-on incident response.</li>
                <li>A self-hosted mail server with replication, Nextcloud, a TLS reverse proxy, n8n workflows, and Home Assistant with Frigate NVR.</li>
                <li>This site is self-hosted too: Laravel in Docker. Pushing a branch deploys it to a review mirror, and merging to master deploys it to production.</li>
            </ul>
        </article>
    </div>
</x-site>
