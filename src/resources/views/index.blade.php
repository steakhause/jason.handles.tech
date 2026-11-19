<x-layout>
    <x-slot:title>
        Jason Ryszka
    </x-slot:title>

    <!--HERO SECTION-->
    <x-full-page-section class="flex" background="/images/hero_2.png">
        <div id="overlay" class="absolute inset-0 bg-stone-950/95 transition-colors duration-700"></div>

        <div class="relative z-10 flex flex-col items-center space-y-4 text-red-500 text-center">
            <h1 class="text-4xl md:text-4xl font-arkitech tracking-widest mx-10 [text-shadow:1px_2px_4px_#000]">JASON</h1>
            <hr class="w-full border-red-500 border-t shadow-[1px_1px_4px_#000]">
            <h2 class="text-2xl md:text-3xl font-arkitech tracking-wide mx-10 [text-shadow:1px_2px_4px_#000]">HANDLES TECH</h2>
        </div>
    </x-full-page-section>

    <!--ABOUT ME SECTION-->
    <x-default-section id="about-me" h1="JASON RYSZKA" h2="Technology Leader | Automation & AI Systems Engineer"
        :quote="['Great things are done by a series of small things brought together.', 'Vincent Van Gogh']">

        <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-start">
            <section class="flex-2 block">
                <h2 class="text-red-500 block text-2xl text-center">About Me</h2>
                <p>
                    I'm a technology leader who still builds the systems himself. For more than ten years I've run technology for a growing education company. Today I'm its Chief Technology Officer and its only technology employee, responsible for everything from daily support to system architecture, integrations and new platform builds.
                </p>
                <p class="mt-4">
                    My work centers on connecting business systems through APIs and workflow automation, protecting revenue, and putting AI to work as a real teammate. That includes agents that research, plan, build and test automations under human sign-off. I pick the simplest solution the team can maintain, inside tools it already uses.
                </p>
                <p class="mt-4">
                    My background runs from the physical layer up. I started in telecom and network field work and moved into data-center builds, server administration, ERP and SQL data engineering, and full-stack development. That range lets me design solutions that fit the infrastructure underneath them.
                </p>
            </section>
            
            <aside class="flex-1 min-w-[240px] whitespace-nowrap">
                <h2 class="text-red-500 text-2xl">Contact Information</h2>
                <ul class="text-sm space-y-2">
                    <li>
                        <a href="mailto:jason@handles.tech" class="hover:underline">
                            Email: jason@handles.tech
                        </a>
                    </li>
                    <li>
                        <a href="tel:+14804423138" class="hover:underline">
                            Mobile: (480) 442-3138
                        </a>
                    </li>
                    <li class="flex items-center space-x-4 pt-2">
                        <!-- LinkedIn -->
                        <a href="{{ config('services.linkedin.url') }}" target="_blank" class="text-stone-500 hover:text-stone-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM0 24h5V7H0v17zm7.5-17h4.5v2.25h.06c.63-1.2 2.17-2.25 4.44-2.25 4.76 0 5.63 3.13 5.63 7.2V24h-5v-7.5c0-1.8-.03-4.12-2.5-4.12s-2.88 1.95-2.88 4v7.62H7.5V7z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </aside>


        </article>
    </x-default-section>

    <!--SKILLS SECTION-->
    <x-default-section id="skills" class="bg-stone-950" h1="Skills & Experience" :quote='["Life without knowledge is death in disguise", "Talib Kweli"]'>

        @foreach (array_chunk($skills, 3) as $chunk)
            <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-stretch text-2xl">
                @foreach ($chunk as $skill)
                    @include('partials.skills', $skill)
                @endforeach
            </article>
        @endforeach

    </x-default-section>

    <!--EMPLOYMENT HISTORY SECTION-->

    <x-default-section id="employment" h1="Employment History" :quote='["The best and most beautiful things in the world cannot be seen or even touched. They must be felt with the heart.","Helen Keller"]'>
        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Chief Technology Officer</h3>
                    <p class="text-sm text-stone-400"><strong>Clever Investor</strong> - Tempe, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2026-04">April 2026</time> - <span class="text-xs text-stone-200">Present</span>
                    </p>
                </header>
                <p>
                    I came back as CTO and am now the company's only technology employee. I own every part of technical operations, from daily support and systems administration to vendor and platform management, security, and full system design and build-out. I set the technology roadmap across three tracks: connecting business systems, protecting revenue, and building AI and automation tools that make every department more productive.
                </p>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Connect the CRM, marketing automation, checkout, payment processors, support desk, and reporting database into one coordinated stack using API integration, workflow automation, SQL, and reporting.</li>
                    <li>Built an AI teammate for the tech department that handles a request end to end. It takes in the request, researches live systems, writes a scope and plan for approval, builds the automation, checks the result, and records every change in version control and the project tracker.
                        <ul class="list-[circle] pl-6">
                            <li>Specialist sub-agents handle scoping, automation building, data analysis, and QA testing.</li>
                            <li>Strict guardrails apply: credentials stay in a secured vault, and anything risky needs human sign-off.</li>
                            <li>Turns screen recordings into standard operating procedures, transcribed on company hardware, and points out what could be automated.</li>
                        </ul>
                    </li>
                    <li>Built CLVR Controller, a framework on top of the agent. It keeps a registry of every system, workflow, script, and connection in the company, runs health checks across the whole stack, and adds a knowledge service that answers questions like "where does this data live?" and "what breaks if we change this?"</li>
                    <li>Current initiatives include:
                        <ul class="list-[circle] pl-6">
                            <li>Launching new product offers with automated subscriptions, fulfillment, and access control (Keap, n8n, CustomerHub, MCP).</li>
                            <li>Rebuilding GoHighLevel sales pipelines for setters and closers, tightly integrated with Keap.</li>
                            <li>A secure checkout and payment-link portal for the sales team (GoHighLevel, Keap, Authorize.Net, Whop, and other processors).</li>
                            <li>A chargeback-response system that pulls evidence from across our platforms into one report, plus collections workflows for overdue payment plans (n8n, Zendesk, Zoom, Claude, local AI, RAG, MCP).</li>
                            <li>Automated scheduling and invites for group coaching calls (Aevent, Zoom, Google Calendar, Keap, GoHighLevel).</li>
                        </ul>
                    </li>
                </ul>
            </article>
        </section>

        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Data Engineer</h3>
                    <p class="text-sm text-stone-400"><strong>Coxreels</strong> - Tempe, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2025-10">October 2025</time> - <time
                            class="text-xs text-stone-200" datetime="2026-04">April 2026</time>
                    </p>
                </header>
                <p>
                    Built MS Access and Syspro ERP tools and integrations on MSSQL and Syspro's SOAP API for a manufacturer.
                </p>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Rebuilt and streamlined receiving with QR and barcode scanning tools that enter raw materials, parts, and products directly into Syspro. Shipments are categorized and labeled automatically for stock location, QC requirements, and inventory tracking, and BarTender prints receiving labels as each item is scanned.</li>
                    <li>Built a regulatory-compliance utility that lets internal stakeholders check the compliance of any assembly, sub-assembly, or component. Engineering uses it to add new parts and materials to Syspro, with chemical-composition data pulled from Assent.</li>
                    <li>Built a QC tracking tool and dashboard that follows each issue from identification through repair, rework, or material return. It flags suspect materials and assemblies from single-part defects, calculates rework cost, updates production-line instructions, issues RMAs, and generates weekly and monthly QC metrics.</li>
                </ul>
            </article>
        </section>

        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Chief Technology Officer</h3>
                    <p class="text-sm text-stone-400"><strong>Clever Investor</strong> - Tempe, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2015-08">August 2015</time> - <time
                            class="text-xs text-stone-200" datetime="2025-04">April 2025</time>
                    </p>
                </header>
                <p>
                    I directed the company's entire technology ecosystem, from software architecture and hands-on development to physical infrastructure, including data-center design, network operations, and office relocations. I was the technical leader bridging all departments, and I personally coded object-oriented solutions, utilities, and integrations.
                </p>
                <p class="mt-2 text-sm text-stone-400">
                    I advanced from Customer Service Rep to Technical Support, Senior Technical Support Specialist, Senior IT Agent, and then Chief Technology Officer.
                </p>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Developed a full-stack event management platform, saving over $7,000 per event and accelerating venue ingress by more than 90 minutes per 1,000 attendees.</li>
                    <li>Architected automated fulfillment pipelines for over 200 unique physical and digital products, streamlining the entire sales-to-delivery process.</li>
                    <li>Insourced all third-party IT and software development roles, saving the company $6,800 per month in contractor fees.</li>
                    <li>Engineered automated marketing and list-hygiene flows to manage engagement for over 80,000 daily contacts, significantly improving data quality and campaign performance.</li>
                    <li>Automated daily administrative functions, reducing monthly energy and labor costs by over $400.</li>
                    <li>Executed two end-to-end office relocations with zero downtime or loss of productivity.</li>
                    <li>Designed and deployed secure, scalable REST APIs and CI/CD pipelines.</li>
                    <li>Managed all aspects of IT infrastructure across multiple locations, from structured cabling and
                        VoIP systems, to servers, CRMs, asset management, and building security.</li>
                    <li>Led development and support teams, collaborating with other departments to identify bottlenecks
                        and deploy automated solutions that increased efficiency and ROI.
                    </li>
                    <li>Oversaw technical compliance, documentation, and system interoperability across departments.                    </li>
                    <li>Administered and customized CRM systems (Salesforce, Keap, GoHighLevel, HubSpot, Maropost),
                        integrated third-party APIs, and executed high-volume marketing automations.
                    </li>
                    <li>Designed and coded custom utilities, integrations, and browser extensions to streamline employee
                        workflows.
                    </li>
                </ul>
            </article>
        </section>

        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Network Specialist</h3>
                    <p class="text-sm text-stone-400"><strong>Black Box Network Services</strong> - Chandler, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2015-01">January 2015</time> - <time
                            class="text-xs text-stone-200" datetime="2015-08">August 2015</time>
                    </p>
                </header>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Installed and maintained Ethernet, coax, and fiber optic cabling in semiconductor environments
                        (Intel & Motorola).</li>
                    <li>Configured and tested switches, routers, and wireless access points in cleanroom data centers.
                    </li>
                    <li>Resolved network performance issues across critical systems in high-security facilities.</li>
                </ul>
            </article>
        </section>

        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Installation & Repair Technician</h3>
                    <p class="text-sm text-stone-400"><strong>Cox Communications</strong> - Tempe, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2008-04">April 2008</time> - <time
                            class="text-xs text-stone-200" datetime="2015-01">January 2015</time>
                    </p>
                </header>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Installed and repaired residential and business video/data services in a HFC environment.</li>
                    <li>Developed deep knowledge of IP-based systems and networking through training and real-world
                        experience.</li>
                    <li>Utilized advanced NOC toolset for monitoring and troubleshooting high availability data networks
                    </li>
                </ul>
            </article>
        </section>

        <section class="max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Telecommunications Technician</h3>
                    <p class="text-sm text-stone-400"><strong>AT&T</strong> - Multiple Locations<br>
                        <time class="text-xs text-stone-200" datetime="2001">2001</time> - <time
                            class="text-xs text-stone-200" datetime="2008">2008</time>
                    </p>
                </header>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Maintained voice and data services for business and residential clients including voice, T1,
                        ISDN, MPLS, Centrex, DSL, and Fiber circuits.</li>
                    <li>Worked end-to-end from central office hardware to customer endpoint integration.</li>
                    <li>Performed maintenance and repair on Lightspan, DSLAM, and Pair gain systems in both above ground
                        cabinets and CEVs</li>
                    <li>Worked in a broad range of secure facilities requiring various levels of government clearance
                    </li>
                </ul>
            </article>
        </section>

    </x-default-section>

    <!-- EDUCATION SECTION -->

    <x-full-page-section id="education" h1="Education" class="bg-stone-950 pt-8" :quote='["Strive not to be a success, but rather to be of value.","Albert Einstein"]'>
        <article class="max-w-screen-lg mx-auto px-4 my-8 items-start items-stretch text-lg flex flex-col md:flex-row gap-6">
            <section class="flex-1 md:min-h-[80px] p-6 rounded-xl bg-stone-900 shadow-md">
                <h3 class="text-lg">Purdue University - Indianapolis, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology<br>
                    <time class="text-xs text-stone-200" datetime="1997">1997</time> - <time class="text-xs text-stone-200" datetime="1998">1998</time>
                </p>
            </section>
            <section class="flex-1 md:min-h-[80px] p-6 rounded-xl bg-stone-900 shadow-md">
                <h3 class="text-lg">Purdue University North Central - Westville, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology<br>
                    <time class="text-xs text-stone-200" datetime="1996">1996</time> - <time class="text-xs text-stone-200" datetime="1997">1997</time>
                </p>
            </section>
        </article>

        <article class="max-w-screen-lg mx-auto px-4 my-8 items-start items-stretch text-lg flex flex-col md:flex-row gap-6">
            <section class="flex-1 md:min-h-[80px] p-6 rounded-xl bg-stone-900 shadow-md">
                <h3 class="text-lg">A.K. Smith Career Center - Michigan City, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology - Vocational Training<br>
                    <time class="text-xs text-stone-200" datetime="1992">1992</time> - <time class="text-xs text-stone-200" datetime="1996">1996</time>
                </p>
            </section>
            <section class="flex-1 md:min-h-[80px] p-6 rounded-xl bg-stone-900 shadow-md">
                <h3 class="text-lg">A.K. Smith Career Center - Michigan City, IN</h3>
                <p class="text-sm text-stone-400">Residential Electrical - Vocational Training<br>
                    <time class="text-xs text-stone-200" datetime="1992">1992</time> - <time class="text-xs text-stone-200" datetime="1993">1993</time>
                </p>
            </section>
        </article>

    </x-full-page-section>

</x-layout>
