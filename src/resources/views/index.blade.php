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
    <x-default-section id="about-me" h1="JASON RYSZKA" h2="Full Stack Developer"
        :quote="['Great things are done by a series of small things brought together.', 'Vincent Van Gogh']">

        <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-start">
            <section class="flex-2 block">
                <h2 class="text-red-500 block text-2xl text-center">About Me</h2>
                <p>
                    As a seasoned professional, I design and build sophisticated Object-Oriented web solutions with a primary focus on automation and custom API integration. My passion lies in creating tools that solve complex business challenges, enhance efficiency, and seamlessly bridge technology gaps. My approach to software development is uniquely informed by extensive, hands-on work across a wide array of technology fields, including server administration, data center construction, network engineering, enterprise hardware, IoT, and even electrical engineering. This comprehensive, foundational knowledge ensures that the solutions I build are not only well-coded but also practical, performant, and perfectly aligned with the underlying infrastructure.
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

                        <!-- Zoom -->
                        <a href="{{ config('services.zoom.url') }}" target="_blank" class="text-stone-500 hover:text-stone-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M17 10.5V7c0-.55-.45-1-1-1H3c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h13c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/>
                            </svg>
                        </a>

                        <!-- GitHub -->
                        <a href="{{ config('services.github.url') }}" target="_blank" class="text-stone-500 hover:text-stone-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M12 0C5.37 0 0 5.4 0 12.07c0 5.33 3.44 9.85 8.2 11.44.6.11.82-.26.82-.58 0-.28-.01-1.02-.02-2.01-3.34.73-4.04-1.63-4.04-1.63-.55-1.42-1.34-1.8-1.34-1.8-1.1-.76.08-.75.08-.75 1.2.09 1.84 1.26 1.84 1.26 1.08 1.87 2.83 1.33 3.52 1.02.11-.79.42-1.33.76-1.63-2.67-.31-5.47-1.36-5.47-6.05 0-1.34.47-2.44 1.24-3.3-.12-.31-.54-1.56.12-3.25 0 0 1.01-.33 3.3 1.26a11.2 11.2 0 0 1 3-.41c1.02.01 2.05.14 3 .41 2.29-1.59 3.3-1.26 3.3-1.26.66 1.69.24 2.94.12 3.25.77.86 1.24 1.96 1.24 3.3 0 4.7-2.8 5.73-5.48 6.04.43.37.82 1.1.82 2.23 0 1.61-.01 2.91-.01 3.3 0 .32.22.7.83.58C20.57 21.92 24 17.4 24 12.07 24 5.4 18.63 0 12 0z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </aside>


        </article>
    </x-default-section>

    <!--SKILLS SECTION-->
    <x-default-section id="experience" class="bg-stone-950" h1="Skills & Experience" :quote='["Life without knowledge is death in disguise", "Talib Kweli"]'>

        @foreach (array_chunk($skills, 3) as $chunk)
            <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-stretch text-2xl">
                @foreach ($chunk as $skill)
                    @include('partials.skills', $skill)
                @endforeach
            </article>
        @endforeach

    </x-default-section>

    <!--EMPLOYMENT HISTORY SECTION-->

    <x-default-section id="employment" h1="Employment History" :quote='["The best and most beautiful things in the world cannot be seen or even touched. They must be felt with the heart.","Hellen Keller"]'>
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
                    As CTO, I Directed the company's entire technology ecosystem, from software architecture and hands-on development to physical infrastructure, including data-center design, network operations, and office relocations. Served as the key technical leader bridging all departments, personally coding object-oriented solutions, utilities, and integrations to deliver secure, scalable, and cost-effective results.
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
                    <p class="text-sm text-stone-400"><strong>Black Box Networks</strong> - Chandler, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2015-01">January 2015</time> - <time
                            class="text-xs text-stone-200" datetime="2025-08">August 2015</time>
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
                        <time class="text-xs text-stone-200" datetime="2006">2006</time> - <time
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
                <p class="text-sm text-stone-400">Residental Electrical - Vocational Training<br>
                    <time class="text-xs text-stone-200" datetime="1992">1992</time> - <time class="text-xs text-stone-200" datetime="1993">1993</time>
                </p>
            </section>
        </article>

    </x-full-page-section>

</x-layout>
