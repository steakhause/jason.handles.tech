<x-site>
    {{-- HERO --}}
    <section class="border-b border-stone-200 bg-white dark:border-stone-800 dark:bg-stone-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-24">
            <p class="text-sm font-medium uppercase tracking-wider text-red-600">Tempe, Arizona</p>
            <h1 class="mt-3 text-4xl font-bold tracking-tight text-stone-900 sm:text-5xl dark:text-white">Jason Ryszka</h1>
            <p class="mt-3 text-xl font-medium text-stone-700 sm:text-2xl dark:text-stone-300">Technology Leader | Automation &amp; AI Systems Engineer</p>
            <p class="mt-6 max-w-2xl text-lg leading-relaxed text-stone-600 dark:text-stone-400">
                I connect business systems, protect revenue, and put AI to work as a real teammate. I build these systems myself. I've spent more than ten years running technology for a growing education company, and I started out in telecom and network field work.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="/downloads/resume.pdf" class="rounded-md bg-red-600 px-5 py-3 font-medium text-white shadow-sm hover:bg-red-700">Download resume (PDF)</a>
                <a href="mailto:jason@handles.tech" class="rounded-md border border-stone-300 px-5 py-3 font-medium text-stone-800 hover:border-stone-900 dark:border-stone-700 dark:text-stone-200 dark:hover:border-white">Email me</a>
                <a href="{{ config('services.linkedin.url') }}" target="_blank" rel="noopener" class="rounded-md border border-stone-300 px-5 py-3 font-medium text-stone-800 hover:border-stone-900 dark:border-stone-700 dark:text-stone-200 dark:hover:border-white">LinkedIn</a>
            </div>

            <dl class="mt-14 grid grid-cols-2 gap-6 border-t border-stone-200 pt-8 sm:grid-cols-4 dark:border-stone-800">
                @foreach ([
                    ['10+ years', 'leading technology end to end'],
                    ['$6,800 / mo', 'saved by bringing IT and development in-house'],
                    ['80,000+', 'contacts a day run through automated flows'],
                    ['200+', 'products on automated fulfillment'],
                ] as [$stat, $label])
                    <div>
                        <dt class="text-2xl font-bold text-stone-900 dark:text-white">{{ $stat }}</dt>
                        <dd class="mt-1 text-sm text-stone-600 dark:text-stone-400">{{ $label }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>
    </section>

    {{-- WHAT I DO --}}
    <section id="about" class="scroll-mt-16 mx-auto max-w-5xl px-4 py-16 sm:px-6">
        <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">What I do</h2>
        <div class="mt-6 grid gap-6 md:grid-cols-3">
            @foreach ([
                ['Connect the business', 'I tie together the CRM, marketing automation, checkout, payment processors, support desk and reporting database with APIs and workflow automation, so data moves without anyone copying it by hand.'],
                ['Protect revenue', 'Secure checkout and payment links, chargeback evidence automation, collections workflows, and access control that follows what people paid for.'],
                ['Put AI to work', 'AI agents that research, plan, build and test automations under human sign-off, with credentials kept in a vault and every change recorded in version control.'],
            ] as [$heading, $body])
                <div class="rounded-xl border border-stone-200 bg-white p-6 dark:border-stone-800 dark:bg-stone-900">
                    <h3 class="font-semibold text-stone-900 dark:text-white">{{ $heading }}</h3>
                    <p class="mt-2 text-stone-600 dark:text-stone-400">{{ $body }}</p>
                </div>
            @endforeach
        </div>
        <p class="mt-6 text-stone-600 dark:text-stone-400">My rule: pick the simplest thing the team can maintain, inside tools it already uses.</p>
    </section>

    {{-- EXPERIENCE --}}
    <section id="experience" class="scroll-mt-16 border-y border-stone-200 bg-white dark:border-stone-800 dark:bg-stone-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">Experience</h2>

            <ol class="mt-8 space-y-12">
                {{-- Current role --}}
                <li class="grid gap-2 md:grid-cols-[12rem_1fr] md:gap-8">
                    <p class="text-sm text-stone-500">Apr 2026 – Present</p>
                    <div>
                        <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Chief Technology Officer · Clever Investor</h3>
                        <p class="mt-2 text-stone-600 dark:text-stone-400">I'm the company's only technology employee. I own all of it: daily support, systems administration, vendors and platforms, security, and full system design and build-out.</p>
                        <ul class="mt-4 list-disc space-y-2 pl-5 text-stone-700 dark:text-stone-300">
                            <li>Set the technology roadmap across three tracks: connecting business systems, protecting revenue, and building AI and automation tools for every department.</li>
                            <li>Built an AI teammate for the tech department. It takes a request through research, scoping, approval, build and testing. Specialist sub-agents handle scoping, automation, data analysis and QA, and anything risky needs a human sign-off.</li>
                            <li>Built CLVR Controller, a registry of every system, workflow, script and connection, with stack-wide health checks and a knowledge service that answers questions like "what breaks if we change this?"</li>
                            <li>Turned screen recordings into standard operating procedures, transcribed on company hardware, with suggestions for what to automate next.</li>
                        </ul>
                        <p class="mt-4 text-sm text-stone-500">Current initiatives: a checkout and payment-link portal, chargeback evidence and collections automation, GoHighLevel sales pipelines integrated with Keap, product launches with automated fulfillment and access control, and coaching-call scheduling.</p>
                    </div>
                </li>

                <li class="grid gap-2 md:grid-cols-[12rem_1fr] md:gap-8">
                    <p class="text-sm text-stone-500">Oct 2025 – Apr 2026</p>
                    <div>
                        <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Data Engineer · Coxreels</h3>
                        <p class="mt-2 text-stone-600 dark:text-stone-400">Built tools and integrations for a manufacturer on MSSQL, MS Access and Syspro ERP's SOAP API.</p>
                        <ul class="mt-4 list-disc space-y-2 pl-5 text-stone-700 dark:text-stone-300">
                            <li>Rebuilt receiving with QR and barcode scanning straight into Syspro, including automatic stock-location and QC routing and BarTender label printing.</li>
                            <li>Built a regulatory-compliance tool for assemblies and components that pulls chemical-composition data from Assent.</li>
                            <li>Built a QC tracking tool and dashboard that flags suspect materials, calculates rework cost, issues RMAs, and produces weekly and monthly metrics.</li>
                        </ul>
                    </div>
                </li>

                <li class="grid gap-2 md:grid-cols-[12rem_1fr] md:gap-8">
                    <p class="text-sm text-stone-500">Aug 2015 – Apr 2025</p>
                    <div>
                        <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Chief Technology Officer · Clever Investor</h3>
                        <p class="mt-2 text-stone-600 dark:text-stone-400">I worked my way up from Customer Service Rep through Technical Support, Senior Technical Support Specialist and Senior IT Agent to CTO. I led the development and IT teams and owned everything from software architecture to the physical network.</p>
                        <ul class="mt-4 list-disc space-y-2 pl-5 text-stone-700 dark:text-stone-300">
                            <li>Built a full-stack event management platform that saved more than $7,000 per event and cut venue check-in by 90+ minutes per 1,000 attendees.</li>
                            <li>Brought all outside IT and software development work in-house, saving $6,800 a month.</li>
                            <li>Built automated fulfillment for 200+ physical and digital products, and marketing and list-hygiene flows for 80,000+ contacts a day.</li>
                            <li>Designed and deployed secure REST APIs, CI/CD pipelines, and integrations across Salesforce, Keap, HubSpot, GoHighLevel and Maropost.</li>
                            <li>Ran IT across multiple locations, including servers, VoIP, cabling, building security and two office moves with zero downtime.</li>
                        </ul>
                    </div>
                </li>

                <li class="grid gap-2 md:grid-cols-[12rem_1fr] md:gap-8">
                    <p class="text-sm text-stone-500">2001 – 2015</p>
                    <div>
                        <h3 class="text-lg font-semibold text-stone-900 dark:text-white">Earlier career · Network &amp; telecom field engineering</h3>
                        <ul class="mt-4 space-y-2 text-stone-700 dark:text-stone-300">
                            <li><span class="font-medium">Network Specialist, Black Box Network Services</span> <span class="text-stone-500">(2015)</span>: built and repaired fiber and copper networks and network gear in Intel and Motorola cleanroom data centers, and project-managed the install team.</li>
                            <li><span class="font-medium">Installation &amp; Repair Technician, Cox Communications</span> <span class="text-stone-500">(2008–2015)</span>: installed and troubleshot residential and business video and data services on an HFC network.</li>
                            <li><span class="font-medium">Telecommunications Technician, AT&amp;T</span> <span class="text-stone-500">(2001–2008)</span>: maintained T1, ISDN, MPLS, DSL and fiber circuits from the central office to the customer, including in cleared secure facilities.</li>
                        </ul>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    {{-- FEATURED WORK --}}
    <section id="work" class="scroll-mt-16 mx-auto max-w-5xl px-4 py-16 sm:px-6">
        <div class="flex items-baseline justify-between gap-4">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">Independent projects · Handles Tech LLC</h2>
            <a href="{{ route('projects') }}" class="text-sm font-medium text-stone-700 hover:text-red-600 dark:text-stone-300">All projects →</a>
        </div>
        <div class="mt-6 grid gap-6 md:grid-cols-3">
            @foreach ([
                ['Self-hosted LLM platform', 'A LiteLLM gateway that routes several apps between local GPU models and cloud models, with RAG over my technical docs and an evaluation harness that scores models before I promote them.'],
                ['Infrastructure & security lab', 'A Proxmox and TrueNAS ZFS environment with OpenBao secrets, nightly Trivy CVE scanning, a self-hosted mail server with replication, and hands-on incident response.'],
                ['AI Resume Builder', 'A demo AI job coach that turns a candidate\'s background and a pasted job description into a tailored resume and cover letter that pass applicant tracking systems. Built on Laravel, n8n and Gemini.'],
            ] as [$heading, $body])
                <article class="rounded-xl border border-stone-200 bg-white p-6 dark:border-stone-800 dark:bg-stone-900">
                    <h3 class="font-semibold text-stone-900 dark:text-white">{{ $heading }}</h3>
                    <p class="mt-2 text-stone-600 dark:text-stone-400">{{ $body }}</p>
                </article>
            @endforeach
        </div>
    </section>

    {{-- SKILLS --}}
    <section id="skills" class="scroll-mt-16 border-y border-stone-200 bg-white dark:border-stone-800 dark:bg-stone-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">Core skills</h2>
            <div class="mt-8 grid gap-8 sm:grid-cols-2">
                @foreach ($skills as $group => $items)
                    <div>
                        <h3 class="font-semibold text-stone-900 dark:text-white">{{ $group }}</h3>
                        <ul class="mt-3 flex flex-wrap gap-2">
                            @foreach ($items as $item)
                                <li class="rounded-full bg-stone-100 px-3 py-1 text-sm text-stone-700 dark:bg-stone-800 dark:text-stone-300">{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            @php($platformCount = collect($platforms)->flatten()->count())
            <details class="group mt-10 rounded-xl border border-stone-200 p-6 dark:border-stone-800">
                <summary class="cursor-pointer list-none font-medium text-stone-900 dark:text-white">
                    <span class="mr-2 inline-block transition-transform group-open:rotate-90">›</span>
                    Platforms and APIs I've integrated ({{ $platformCount }})
                </summary>
                <dl class="mt-6 grid gap-4 text-sm sm:grid-cols-2">
                    @foreach ($platforms as $group => $items)
                        <div>
                            <dt class="font-medium text-stone-900 dark:text-white">{{ $group }}</dt>
                            <dd class="mt-1 text-stone-600 dark:text-stone-400">{{ implode(' · ', $items) }}</dd>
                        </div>
                    @endforeach
                </dl>
            </details>
        </div>
    </section>

    {{-- EDUCATION + CONTACT --}}
    <section class="mx-auto grid max-w-5xl gap-12 px-4 py-16 sm:px-6 md:grid-cols-2">
        <div id="education" class="scroll-mt-20">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">Education</h2>
            <ul class="mt-6 space-y-4 text-stone-700 dark:text-stone-300">
                <li><span class="font-medium">Purdue University</span>: Electronics Engineering Technology coursework <span class="text-stone-500">(1996–1998)</span></li>
                <li><span class="font-medium">A.K. Smith Career Center</span>: Electronics Engineering Technology and Residential Electrical vocational training <span class="text-stone-500">(1992–1996)</span></li>
            </ul>
        </div>
        <div id="contact" class="scroll-mt-20">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-red-600">Contact</h2>
            <p class="mt-6 text-stone-700 dark:text-stone-300">I'm happy to talk about automation, AI or systems work.</p>
            <ul class="mt-4 space-y-2">
                <li><a href="mailto:jason@handles.tech" class="font-medium text-stone-900 underline decoration-red-600 underline-offset-4 hover:text-red-600 dark:text-white">jason@handles.tech</a></li>
                <li><a href="tel:+14804423138" class="text-stone-700 hover:text-red-600 dark:text-stone-300">(480) 442-3138</a></li>
                <li><a href="{{ config('services.linkedin.url') }}" target="_blank" rel="noopener" class="text-stone-700 hover:text-red-600 dark:text-stone-300">LinkedIn</a></li>
            </ul>
        </div>
    </section>
</x-site>
