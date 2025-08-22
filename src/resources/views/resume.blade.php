<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    @env('production')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.tracking_id') }}">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{ config('services.google_analytics.tracking_id') }}');
    </script>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '24157061627318479');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=24157061627318479&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    @endenv
    <style type="text/css">
        @import url(https://themes.googleusercontent.com/fonts/css?kit=3qINvnjb346LubKDfLRn69t6G6Z1RrRfgULZ1AHo7mPOfsfM6rvuuu7h1pY3r_-A);

        html {
            background-color: #000000
        }

        body {
            margin: 0 auto;
            text-align: center;
        }

        .lst-kix_j0jhv38vzqbt-7>li:before {
            content: "\0025cb   "
        }

        .lst-kix_dfan2ie4mj27-1>li:before {
            content: "\0025cb   "
        }

        .lst-kix_j0jhv38vzqbt-6>li:before {
            content: "\0025cf   "
        }

        .lst-kix_dfan2ie4mj27-0>li:before {
            content: "\0025cf   "
        }

        .lst-kix_j0jhv38vzqbt-4>li:before {
            content: "\0025cb   "
        }

        .lst-kix_j0jhv38vzqbt-5>li:before {
            content: "\0025a0   "
        }

        .lst-kix_j0jhv38vzqbt-2>li:before {
            content: "\0025a0   "
        }

        .lst-kix_dfan2ie4mj27-4>li:before {
            content: "\0025cb   "
        }

        .lst-kix_dfan2ie4mj27-6>li:before {
            content: "\0025cf   "
        }

        .lst-kix_j0jhv38vzqbt-3>li:before {
            content: "\0025cf   "
        }

        .lst-kix_dfan2ie4mj27-5>li:before {
            content: "\0025a0   "
        }

        .lst-kix_dfan2ie4mj27-2>li:before {
            content: "\0025a0   "
        }

        .lst-kix_j0jhv38vzqbt-0>li:before {
            content: "\0025cf   "
        }

        .lst-kix_j0jhv38vzqbt-1>li:before {
            content: "\0025cb   "
        }

        .lst-kix_dfan2ie4mj27-3>li:before {
            content: "\0025cf   "
        }

        ul.lst-kix_p4228eoj2c1z-3 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-4 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-5 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-6 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-7 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-8 {
            list-style-type: none
        }

        .lst-kix_9rvhrxtbuwjn-8>li:before {
            content: "\0025a0   "
        }

        .lst-kix_9rvhrxtbuwjn-6>li:before {
            content: "\0025cf   "
        }

        .lst-kix_9rvhrxtbuwjn-7>li:before {
            content: "\0025cb   "
        }

        ul.lst-kix_p4228eoj2c1z-0 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-1 {
            list-style-type: none
        }

        ul.lst-kix_p4228eoj2c1z-2 {
            list-style-type: none
        }

        .lst-kix_9rvhrxtbuwjn-2>li:before {
            content: "\0025a0   "
        }

        .lst-kix_9rvhrxtbuwjn-3>li:before {
            content: "\0025cf   "
        }

        .lst-kix_9rvhrxtbuwjn-0>li:before {
            content: "\0025cf   "
        }

        .lst-kix_9rvhrxtbuwjn-1>li:before {
            content: "\0025cb   "
        }

        .lst-kix_9rvhrxtbuwjn-4>li:before {
            content: "\0025cb   "
        }

        .lst-kix_9rvhrxtbuwjn-5>li:before {
            content: "\0025a0   "
        }

        ul.lst-kix_j0jhv38vzqbt-0 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-2 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-1 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-4 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-3 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-6 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-5 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-8 {
            list-style-type: none
        }

        ul.lst-kix_j0jhv38vzqbt-7 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-8 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-6 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-7 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-4 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-5 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-2 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-3 {
            list-style-type: none
        }

        ul.lst-kix_dfan2ie4mj27-0 {
            list-style-type: none
        }

        .lst-kix_p4228eoj2c1z-1>li:before {
            content: "\0025cb   "
        }

        ul.lst-kix_dfan2ie4mj27-1 {
            list-style-type: none
        }

        .lst-kix_p4228eoj2c1z-0>li:before {
            content: "\0025cf   "
        }

        ul.lst-kix_9rvhrxtbuwjn-8 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-7 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-6 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-5 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-4 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-3 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-2 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-1 {
            list-style-type: none
        }

        ul.lst-kix_9rvhrxtbuwjn-0 {
            list-style-type: none
        }

        .lst-kix_p4228eoj2c1z-8>li:before {
            content: "\0025a0   "
        }

        .lst-kix_dfan2ie4mj27-8>li:before {
            content: "\0025a0   "
        }

        .lst-kix_p4228eoj2c1z-7>li:before {
            content: "\0025cb   "
        }

        li.li-bullet-0:before {
            margin-left: -18pt;
            white-space: nowrap;
            display: inline-block;
            min-width: 18pt
        }

        .lst-kix_dfan2ie4mj27-7>li:before {
            content: "\0025cb   "
        }

        .lst-kix_p4228eoj2c1z-5>li:before {
            content: "\0025a0   "
        }

        .lst-kix_p4228eoj2c1z-4>li:before {
            content: "\0025cb   "
        }

        .lst-kix_p4228eoj2c1z-6>li:before {
            content: "\0025cf   "
        }

        .lst-kix_p4228eoj2c1z-2>li:before {
            content: "\0025a0   "
        }

        .lst-kix_j0jhv38vzqbt-8>li:before {
            content: "\0025a0   "
        }

        .lst-kix_p4228eoj2c1z-3>li:before {
            content: "\0025cf   "
        }

        ol {
            margin: 0;
            padding: 0
        }

        table td,
        table th {
            padding: 0
        }

        .c7 {
            margin-left: 36pt;
            padding-top: 4pt;
            padding-left: 0pt;
            padding-bottom: 0pt;
            line-height: 1.2;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c3 {
            margin-left: 36pt;
            padding-top: 4pt;
            padding-left: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .c16 {
            color: #666666;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 12pt;
            font-family: "Proxima Nova";
            font-style: italic
        }

        .c15 {
            margin-left: 36pt;
            padding-top: 4pt;
            padding-left: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            text-align: left
        }

        .c18 {
            padding-top: 24pt;
            padding-bottom: 10pt;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        .c35 {
            padding-top: 6pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        .c29 {
            padding-top: 24pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            page-break-after: avoid;
            text-align: left
        }

        .c37 {
            font-size: 18pt;
            font-family: "Proxima Nova";
            color: #00ab44;
            font-weight: 400
        }

        .c4 {
            font-size: 8pt;
            font-family: "Times New Roman";
            color: #666666;
            font-weight: 400
        }

        .c14 {
            color: #666666;
            font-weight: 400;
            font-size: 10pt;
            font-family: "Proxima Nova"
        }

        .c27 {
            padding-top: 10pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c26 {
            padding-top: 24pt;
            padding-bottom: 8pt;
            line-height: 1.0;
            text-align: left
        }

        .c38 {
            padding-top: 24pt;
            padding-bottom: 10pt;
            line-height: 1.0;
            text-align: left
        }

        .c25 {
            color: #000000;
            font-weight: 400;
            font-size: 11pt;
            font-family: "Arial"
        }

        .c24 {
            color: #666666;
            font-weight: 400;
            font-size: 18pt;
            font-family: "Proxima Nova"
        }

        .c23 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.15;
            text-align: left
        }

        .c36 {
            font-weight: 400;
            font-size: 16pt;
            font-family: "Arial";
            font-style: normal
        }

        .c11 {
            color: #000000;
            font-weight: 400;
            font-size: 11pt;
            font-family: "Proxima Nova"
        }

        .c1 {
            font-size: 8pt;
            font-family: "Times New Roman";
            font-style: italic;
            font-weight: 400
        }

        .c17 {
            padding-top: 4pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c33 {
            color: #666666;
            font-weight: 400;
            font-size: 11pt;
            font-family: "Proxima Nova"
        }

        .c0 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            text-align: left
        }

        .c28 {
            font-size: 8pt;
            font-weight: 400;
            font-family: "Times New Roman"
        }

        .c20 {
            color: #434343;
            font-weight: 400;
            font-family: "Proxima Nova"
        }

        .c8 {
            font-size: 8pt;
            font-weight: 700;
            font-family: "Times New Roman"
        }

        .c34 {
            vertical-align: baseline;
            font-size: 11pt;
            font-style: normal
        }

        .c32 {
            color: #000000;
            text-decoration: none;
            vertical-align: baseline
        }

        .c21 {
            text-decoration-skip-ink: none;
            -webkit-text-decoration-skip: none;
            text-decoration: underline
        }

        .c10 {
            text-decoration: none;
            vertical-align: baseline;
            font-style: normal
        }

        .c31 {
            background-color: #ffffff;
            max-width: 468pt;
            padding: 72pt 72pt 72pt 72pt
        }

        .c30 {
            color: inherit;
            text-decoration: inherit
        }

        .c2 {
            font-weight: 700;
            font-family: "Proxima Nova"
        }

        .c13 {
            font-size: 12pt;
            color: #353744
        }

        .c12 {
            color: #53bb84;
            font-size: 14pt
        }

        .c5 {
            padding: 0;
            margin: 0
        }

        .c9 {
            orphans: 2;
            widows: 2
        }

        .c6 {
            font-size: 14pt;
            color: #00ab44
        }

        .c39 {
            font-style: normal
        }

        .c19 {
            height: 11pt
        }

        .c22 {
            font-style: italic
        }

        .title {
            padding-top: 0pt;
            color: #000000;
            font-size: 26pt;
            padding-bottom: 3pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        .subtitle {
            padding-top: 0pt;
            color: #666666;
            font-size: 15pt;
            padding-bottom: 16pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        li {
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        p {
            margin: 0;
            color: #000000;
            font-size: 11pt;
            font-family: "Arial"
        }

        h1 {
            padding-top: 20pt;
            color: #000000;
            font-size: 20pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h2 {
            padding-top: 18pt;
            color: #000000;
            font-size: 16pt;
            padding-bottom: 6pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h3 {
            padding-top: 16pt;
            color: #434343;
            font-size: 14pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h4 {
            padding-top: 14pt;
            color: #666666;
            font-size: 12pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h5 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            orphans: 2;
            widows: 2;
            text-align: left
        }

        h6 {
            padding-top: 12pt;
            color: #666666;
            font-size: 11pt;
            padding-bottom: 4pt;
            font-family: "Arial";
            line-height: 1.15;
            page-break-after: avoid;
            font-style: italic;
            orphans: 2;
            widows: 2;
            text-align: left
        }
    </style>
</head>

<body class="c31 doc-content">
    <h2 class="c9 c35" id="h.5x0d5h95i329"><span class="c32 c36">Jason Ryszka</span></h2>
    <p class="c0 c9 subtitle" id="h.sbziogryzzql"><span class="c37">Full Stack Developer | IT &amp; Network
            Specialist</span></p>
    <p class="c0 c9"><span class="c20 c21"><a class="c30"
                href="mailto:jason@handles.tech">jason@handles.tech</a></span><span class="c20">&nbsp;</span><span
            class="c10 c33">| (480) 442-3138</span></p>
    <p class="c0 c9"><span class="c20 c21"><a class="c30"
                href="https://www.google.com/url?q=https://jason.handles.tech&amp;sa=D&amp;source=editors&amp;ust=1755200695964807&amp;usg=AOvVaw0orq-oVaE1fmnVy_eAKzkp">https://Jason.Handles.Tech</a></span>
    </p>
    <h1 class="c9 c18" id="h.inx73jfg7qti"><span class="c2 c6">Professional Summary</span><span class="c11 c10"><br>Full
            Stack Developer with extensive hands-on experience across IT, software development, and network engineering.
            Proven track record of designing scalable, secure, and efficient technology solutions that reduce costs,
            automate operations, and increase business agility. Adept in team leadership, API development,
            infrastructure management, and automation.</span></h1>
    <h1 class="c9 c29" id="h.ekedb43bqnkb"><span class="c10 c2 c6">Key Achievements</span></h1>
    <ul class="c5 lst-kix_j0jhv38vzqbt-0 start">
        <li class="c15 c9 li-bullet-0"><span class="c11 c10">Developed full stack event management platform, saving over
                $7,000 per event and sped venue ingress times by more than 90+ minutes per 1K attendees.</span></li>
        <li class="c15 c9 li-bullet-0"><span class="c11 c10">Automated daily administrative office functions, saving
                over $400/month through reduced energy and labor costs.</span></li>
        <li class="c15 c9 li-bullet-0"><span class="c11 c10">Engineered automated fulfillment pipelines for over 200
                physical and digital products.</span></li>
        <li class="c15 c9 li-bullet-0"><span class="c11 c10">Assumed roles of third party IT and Software development
                contractors, saving $6,800 per month.</span></li>
        <li class="c9 c15 li-bullet-0"><span class="c11 c10">Created automated marketing and list hygiene flows handling
                engagement for 80,000+ daily contacts.</span></li>
        <li class="c15 c9 li-bullet-0"><span class="c11 c10">Executed two office relocations with zero downtime or
                productivity loss.</span></li>
    </ul>
    <h1 class="c29 c9" id="h.d3z10zhiarma"><span class="c10 c2 c6">SKILLS</span></h1>
    <ul class="c5 lst-kix_j0jhv38vzqbt-0">
        <li class="c7 li-bullet-0"><span class="c2">Languages: </span><span class="c11 c10">PHP (OOP), JavaScript (OOP),
                HTML, CSS, Bash, SQL, JSON, XML, YAML</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Frameworks/Libraries:</span><span class="c11 c10">&nbsp;Laravel,
                WordPress, jQuery, TailwindCSS, Bootstrap</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Web &amp; API Tech: </span><span class="c11 c10">REST, SOAP,
                XML-RPC, WebSockets, SSO, 2FA, OAuth, JWT, Basic Auth</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Databases: </span><span class="c11 c10">MySQL, SQLite, PostgreSQL,
                MongoDB, Redis</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Networking &amp; Systems: </span><span class="c11 c10">Linux (RHEL,
                CLI), DNS (Bind9), Apache, Nginx, Traefik, NPM, TCP/IP, Reverse Proxies</span></li>
        <li class="c7 li-bullet-0"><span class="c2">DevOps &amp; Tools:</span><span class="c11 c10">&nbsp;Docker, Git,
                SVN, Proxmox, VirtualBox, AWS, CI/CD, AI MCPs</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Monitoring &amp; Security:</span><span
                class="c11 c10">&nbsp;SolarWinds, Uptime Kuma, NetData, custom Bash scripts, OWASP practices, PCI
                compliance</span></li>
        <li class="c7 li-bullet-0"><span class="c2">CRM &amp; Automation:</span><span class="c11 c10">&nbsp;Salesforce,
                Keap, Maropost, HubSpot, Go High Level, MarketingCloud, Node-RED, N8N, Zapier, IFTTT, PlusThis</span>
        </li>
        <li class="c7 li-bullet-0"><span class="c2">Business &amp; Ops: </span><span class="c11 c10">SaaS lifecycle, KPI
                tracking, Interdepartmental liaison, TeamWork, Klaviyo</span></li>
        <li class="c7 li-bullet-0"><span class="c2">Analytics &amp; Reporting: </span><span class="c11 c10">Google
                Analytics, GTM, Hyros, WickedReports, Facebook Ads, Tune, Periscope, VWO</span></li>
    </ul>
    <h1 class="c9 c26" id="h.5sh58lh512k2"><span class="c2 c6">EXPERIENCE</span></h1>
    <h2 class="c0 c9" id="h.mu43qcboozqe"><span class="c2 c13">Clever Investor, Tempe AZ</span><span class="c16">&nbsp;-
            Chief Technology Officer</span></h2>
    <p class="c9 c17"><span class="c14 c10">August 2015 - April 2025</span></p>
    <ul class="c5 lst-kix_dfan2ie4mj27-0 start">
        <li class="c3 li-bullet-0"><span class="c11 c10">Lead and manage all technical aspects of product development
                and lifecycle, ensuring accurate documentation and systems interoperability.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Designed, coded, and deployed secure, performant, and scalable
                REST APIs for intra and extra company data access.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Leveraged Third-Party APIs to build code based solutions per
                specific project requirements.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Managed IT and software development teams across multiple
                concurrent projects.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Designed and implemented Sales, Marketing, and Business
                automation solutions with a strong emphasis on maximizing ROI and optimizing business efficiency.</span>
        </li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Enforced legal and compliance standards across technology and
                marketing departments.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Administered all building infrastructure and IT assets of
                remote and in person employees, including ticketing systems, VoIP, Building Security, Computer Support,
                Remote Desktop, IP Cameras/NVR, Server Architecture, and Networking Equipment.</span></li>
    </ul>
    <h2 class="c9 c27" id="h.25ksbxwbal7a"><span class="c2 c13">Black Box Network Services, Chandler AZ </span><span
            class="c16">- Network Specialist</span></h2>
    <p class="c17 c9"><span class="c10 c14">January 2015 - August 2015</span></p>
    <ul class="c5 lst-kix_p4228eoj2c1z-0 start">
        <li class="c3 li-bullet-0"><span class="c11 c10">Installed, tested, and repaired Ethernet, Coax, and fiber optic
                cabling as well as data switches, routers, and racks in semiconductor manufacturing environments (Intel
                &amp; Motorola)</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Worked in cleanroom data centers, contributing to large-scale
                infrastructure projects.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Troubleshot and resolved network performance issues to maintain
                optimal functionality.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Served as project manager for Installation and Repair
                team.</span></li>
    </ul>
    <h2 class="c27 c9" id="h.qttiqnuhschn"><span class="c2 c13">Cox Communications, Tempe AZ </span><span class="c16">-
            Installation &amp; Repair Technician</span></h2>
    <p class="c17 c9"><span class="c14 c10">April 2008 - January 2015</span></p>
    <ul class="c5 lst-kix_9rvhrxtbuwjn-0 start">
        <li class="c3 li-bullet-0"><span class="c11 c10">Utilized advanced tools to troubleshoot data issues in a HFC
                network environment.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Installed and repaired video and data network services for
                residential and business clients in the Phoenix, Mesa, Chandler, Tempe, and Gilbert area.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Performed TCP/IP Networking, IP-based services.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Provided technical support for end user equipment.</span></li>
    </ul>
    <h2 class="c27 c9" id="h.80chje887uil"><span class="c2 c13">AT&amp;T</span><span class="c16">&nbsp;-
            Telecommunications Technician</span></h2>
    <p class="c17 c9"><span class="c14 c10">April 2001 - January 2008</span></p>
    <ul class="c5 lst-kix_9rvhrxtbuwjn-0">
        <li class="c3 li-bullet-0"><span class="c11 c10">Installed, repaired, and maintained voice and data services for
                business and residential customers.</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">Serviced physical network infrastructure from the central
                office to end user equipment.</span></li>
        <li class="c3 li-bullet-0"><span class="c10 c11">Maintained security clearance to provide services to secure and
                regulated facilities</span></li>
        <li class="c3 li-bullet-0"><span class="c11 c10">TCP/IP networking, network configuration, and
                troubleshooting.</span></li>
    </ul>
    <h1 class="c9 c38" id="h.pwnp1k6vsbh1"><span class="c2 c6 c10">EDUCATION</span></h1>
    <p class="c0"><span class="c8">Purdue University Indianapolis </span><span class="c1">97-98</span><span
            class="c8 c22">&nbsp;</span><span class="c1">Indianapolis, IN</span><span class="c8">&nbsp;</span><span
            class="c28 c32 c39">&nbsp;</span></p>
    <p class="c0"><span class="c4 c10">Electronics Engineering Technology</span></p>
    <p class="c0"><span class="c8">Purdue University North Central</span><span class="c28">&nbsp;</span><span
            class="c1">96-96</span><span class="c28">&nbsp;</span><span class="c1 c32">Westville, IN</span></p>
    <p class="c0"><span class="c4 c10">Electronics Engineering Technology</span></p>
    <p class="c0"><span class="c8">A.K Smith Career Center </span><span class="c1 c32">92-96 Michigan City, IN</span>
    </p>
    <p class="c0"><span class="c4 c10">Three years specialized vocational training in Electronics Engineering Technology
        </span></p>
    <p class="c0"><span class="c4">One year Vocational Residential Electrical`</span></p>
    <p class="c0 c19"><span class="c11 c10"></span></p>
    <p class="c9 c19 c23"><span class="c10 c25"></span></p>
</body>

</html>