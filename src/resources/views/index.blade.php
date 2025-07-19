<x-layout>
    <x-slot:title>
        Jason Ryszka
    </x-slot:title>

    <!--HERO SECTION-->
    <x-full-page-section class="flex" background="/images/pencil-room.jpg">
        <div id="overlay" class="absolute inset-0 bg-red-600/65 transition-colors duration-700"></div>

        <div class="relative z-10 flex flex-col items-center space-y-4 text-white-300 text-center">
            <h1 class="text-4xl md:text-4xl font-arkitech tracking-widest mx-10">JASON</h1>
            <hr class="w-full border-white border-t">
            <h2 class="text-2xl md:text-3xl font-arkitech tracking-wide mx-10">HANDLES TECH</h2>
        </div>
    </x-full-page-section>

    <!--ABOUT ME SECTION-->
    <x-default-section id="about-me" h1="JASON RYSZKA" h2="Full Stack Developer" h3="Maricopa, Arizona"
        :quote="['Great things are done by a series of small things brought together.', 'Vincent Van Gogh']">

        <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-start">
            <section class="flex-2 block">
                <h2 class="text-red-500 block text-2xl text-center">About Me</h2>
                <p>
                    I'm a full stack developer with over 25 years of hands-on experience across software development,
                    network engineering, IT, telecommunications, and electrical systems. I've always believed that real
                    expertise comes from doing. I've spent my career designing and building reliable, secure systems
                    from
                    the ground up.
                    <br><br>
                    My career journey, from a Level 1 tech support representative to Chief Technology Officer, is a
                    reflection of my work ethic, curiosity, and drive to improve both myself and the systems I manage.
                    Along
                    the way, I've been the leader, as well as a member, of high-performing dev and IT departments. "Not
                    my
                    job" is not a concept that I have ever understood. Whether it's coding, networking, or simply taking
                    out
                    the trash, I believe in leading by example, rolling up the sleeves, and getting things done. My
                    approach
                    is hands-on, and I take personal pride in making a tangible impact, be it big or small.
                    <br><br>
                    Outside of work and family time, it's easy to see that I'm a life long nerd, obsessed with all
                    things
                    tech. Whether it's listening to an OWASP or Linux podcast, expanding my home lab, building and
                    coding
                    IoT devices, or experimenting with containerized AI tools, I bring that same learner's mindset to
                    everything I do, with a focus on long-term impact, automation, efficiency and maintainability.
                </p>
            </section>
            <aside class="flex-1 min-w-[240px] whitespace-nowrap">
                <h2 class="text-red-500 text-2xl">Contact Information</h2>
                <ul class="text-sm space-y-2">
                    <li><a href="mailto:jason@handles.tech">Email: jason@handles.tech</a></li>
                    <li><a href="tel:+14804423138">Mobile: (480) 442-3138</a></li>
                    <li><a href="/zoom/" target="_blank">Zoom: jason.handles.tech/zoom</a>
                    </li>
                    <li><a href="https://github.com/steakhause" target="_blank">GitHub: github.com/steakhause</a></li>
                </ul>
            </aside>

        </article>
    </x-default-section>

    <!--SKILLS SECTION-->
    <x-default-section id="experience" class="bg-stone-700" h1="Skills & Experience" :quote='["Life without knowledge is death in disguise", "Talib Kweli"]'>

        @foreach (array_chunk($skills, 3) as $chunk)
            <article class="flex flex-col md:flex-row gap-6 max-w-screen-lg mx-auto px-4 my-8 items-start text-2xl">
                @foreach ($chunk as $skill)
                    @include('partials.skills', $skill)
                @endforeach
            </article>
        @endforeach

    </x-default-section>

    <!--EMPLOYMENT HISTORY SECTION-->

    <x-default-section id="employment" h1="Employment History">
        <section class=" max-w-screen-lg mx-auto px-4 my-8 items-start text-lg">
            <article>
                <header>
                    <h3 class="text-lg">Chief Technology Officer</h3>
                    <p class="text-sm text-stone-400"><strong>Clever Investor</strong> - Tempe, AZ<br>
                        <time class="text-xs text-stone-200" datetime="2015-08">August 2015</time> - <time
                            class="text-xs text-stone-200" datetime="2025-04">April 2025</time>
                    </p>
                </header>
                <ul class="mt-4 list-disc pl-6 text-base">
                    <li>Promoted from Level 1 Support to CTO, replacing multiple third-party vendors by building robust
                        in-house development and IT operations.</li>
                    <li>Designed and deployed secure, scalable REST APIs and automation pipelines to enhance data flow,
                        marketing, and sales processes.</li>
                    <li>Managed all aspects of IT infrastructure across multiple locations — from structured cabling and
                        VoIP systems to servers, CRMs, asset management, and building security.</li>
                    <li>Led development and support teams, collaborating with other departments to identify bottlenecks
                        and deploy automated solutions that increased efficiency and ROI.</li>
                    <li>Oversaw technical compliance, documentation, and system interoperability across departments.
                    </li>
                    <li>Administered and customized CRM systems (Salesforce, Keap, GoHighLevel, HubSpot, Maropost),
                        integrated third-party APIs, and executed high-volume marketing automations.</li>
                    <li>Designed and coded custom utilities, integrations, and browser extensions to streamline employee
                        workflows.</li>
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

    <x-full-page-section id="education" h1="Education" class="bg-stone-700 pt-8">
        <article class="max-w-screen-lg mx-auto px-4 my-8 items-start text-lg flex flex-col md:flex-row gap-6">
            <section class="flex-1">
                <h3 class="text-lg">Purdue University - Indianapolis, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology<br>
                    <time class="text-xs text-stone-200" datetime="1997">1997</time> - <time class="text-xs text-stone-200" datetime="1998">1998</time>
                </p>
            </section>
            <section class="flex-1">
                <h3 class="text-lg">Purdue University North Central - Westville, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology<br>
                    <time class="text-xs text-stone-200" datetime="1996">1996</time> - <time class="text-xs text-stone-200" datetime="1997">1997</time>
                </p>
            </section>
        </article>

        <article class="max-w-screen-lg mx-auto px-4 my-8 items-start text-lg flex flex-col md:flex-row gap-6">
            <section class="flex-1">
                <h3 class="text-lg">A.K. Smith Career Center - Michigan City, IN</h3>
                <p class="text-sm text-stone-400">Electronics Engineering Technology - Vocational Training<br>
                    <time class="text-xs text-stone-200" datetime="1992">1992</time> - <time class="text-xs text-stone-200" datetime="1996">1996</time>
                </p>
            </section>
            <section class="flex-1">
                <h3 class="text-lg">A.K. Smith Career Center - Michigan City, IN</h3>
                <p class="text-sm text-stone-400">Residental Electrical - Vocational Training<br>
                    <time class="text-xs text-stone-200" datetime="1992">1992</time> - <time class="text-xs text-stone-200" datetime="1993">1993</time>
                </p>
            </section>
        </article>

    </x-full-page-section>

</x-layout>
