<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Ryszka · Resume</title>
    <meta name="description" content="Resume of Jason Ryszka: Technology Leader, Automation & AI Systems Engineer.">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @include('partials.analytics')
    <style>
        :root {
            --ink: #1c1917;
            --muted: #57534e;
            --rule: #d6d3d1;
            --accent: #dc2626;
        }

        * { box-sizing: border-box; }

        html { background: #e7e5e4; }

        body {
            margin: 0;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
            color: var(--ink);
            font-size: 10pt;
            line-height: 1.38;
        }

        .toolbar {
            max-width: 8.5in;
            margin: 24px auto 12px;
            padding: 0 16px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .toolbar a { color: var(--ink); text-decoration: none; font-weight: 600; }
        .toolbar a.primary { background: var(--accent); color: #fff; padding: 8px 14px; border-radius: 6px; }

        .page {
            background: #fff;
            max-width: 8.5in;
            margin: 0 auto 48px;
            padding: 0.55in 0.6in;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .15);
        }

        header h1 { margin: 0; font-size: 22pt; line-height: 1.1; letter-spacing: -0.01em; }
        header .headline { margin: 2px 0 6px; font-size: 12pt; font-weight: 600; color: var(--accent); }
        header .contact { margin: 0; color: var(--muted); font-size: 9.5pt; }
        header .contact a { color: var(--muted); text-decoration: none; }

        h2 {
            margin: 14px 0 6px;
            padding-bottom: 3px;
            border-bottom: 1px solid var(--rule);
            font-size: 10.5pt;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--ink);
        }

        p { margin: 0 0 4px; }

        .skills { margin: 0; padding: 0; list-style: none; }
        .skills li { margin-bottom: 2px; }
        .skills b { font-weight: 600; }

        .job { margin-bottom: 9px; break-inside: avoid; }
        .job-head { display: flex; justify-content: space-between; align-items: baseline; gap: 12px; }
        .job-head h3 { margin: 0; font-size: 10.5pt; }
        .job-head h3 span { font-weight: 400; color: var(--muted); }
        .job-head .dates { white-space: nowrap; color: var(--muted); font-size: 9.5pt; }
        .job .lead { margin: 2px 0 3px; color: var(--muted); }

        ul.bullets { margin: 2px 0 0; padding-left: 16px; }
        ul.bullets li { margin-bottom: 2px; }

        .earlier li { margin-bottom: 3px; }

        @media (max-width: 640px) {
            .page { padding: 24px 16px; }
            .job-head { flex-direction: column; gap: 0; }
        }

        @page { size: Letter; margin: 0.5in 0.55in; }

        @media print {
            html { background: #fff; }
            .toolbar { display: none; }
            .page { max-width: none; margin: 0; padding: 0; box-shadow: none; }
            a { color: inherit; }
        }
    </style>
</head>

<body>
    <nav class="toolbar" aria-label="Resume actions">
        <a href="{{ route('index') }}">← jason.handles.tech</a>
        <a class="primary" href="/downloads/resume.pdf">Download PDF</a>
    </nav>

    <article class="page">
        <header>
            <h1>Jason Ryszka</h1>
            <p class="headline">Technology Leader | Automation &amp; AI Systems Engineer</p>
            <p class="contact">
                Tempe, AZ · <a href="mailto:jason@handles.tech">jason@handles.tech</a> · (480) 442-3138 ·
                <a href="https://www.linkedin.com/in/jason-ryszka">linkedin.com/in/jason-ryszka</a> ·
                <a href="https://jason.handles.tech">jason.handles.tech</a>
            </p>
        </header>

        <h2>Summary</h2>
        <p>
            Technology leader who builds the systems himself. I've spent more than ten years running technology for a growing education company,
            and I'm now its CTO and only technology employee, responsible for everything from daily support to system architecture. I connect
            CRM, payment, support and reporting systems with APIs and workflow automation, and I build AI agents that work as teammates under
            human sign-off. My background runs from telecom and network field engineering through ERP and SQL data work to full-stack development.
        </p>

        <h2>Core Skills</h2>
        <ul class="skills">
            @foreach ($skills as $group => $items)
                <li><b>{{ $group }}:</b> {{ implode(', ', $items) }}</li>
            @endforeach
        </ul>

        <h2>Experience</h2>

        <section class="job">
            <div class="job-head">
                <h3>Chief Technology Officer <span>· Clever Investor, Tempe, AZ</span></h3>
                <span class="dates">Apr 2026 – Present</span>
            </div>
            <p class="lead">Sole technology employee. I own daily support, systems administration, vendors and platforms, security, and full system design and build-out.</p>
            <ul class="bullets">
                <li>Set the technology roadmap across three tracks: connecting business systems, protecting revenue, and building AI and automation tools for every department.</li>
                <li>Connect the CRM, marketing automation, checkout, payment processors, support desk and reporting database into one stack (Keap, GoHighLevel, CustomerHub, Zendesk, n8n, SQL).</li>
                <li>Built an AI teammate that takes requests through research, scoping, approval, build and testing. Specialist sub-agents handle scoping, automation, data analysis and QA, credentials stay in a vault, and risky actions need human sign-off.</li>
                <li>Built CLVR Controller, a registry of every system, workflow, script and connection, with stack-wide health checks and a knowledge service for impact and data-lineage questions.</li>
                <li>Current initiatives: a secure checkout and payment-link portal, chargeback evidence and collections automation, GoHighLevel pipelines integrated with Keap, and automated product fulfillment and access control.</li>
            </ul>
        </section>

        <section class="job">
            <div class="job-head">
                <h3>Data Engineer <span>· Coxreels, Tempe, AZ</span></h3>
                <span class="dates">Oct 2025 – Apr 2026</span>
            </div>
            <ul class="bullets">
                <li>Built MS Access and Syspro ERP tools and integrations on MSSQL and Syspro's SOAP API for a manufacturer.</li>
                <li>Rebuilt receiving with QR and barcode scanning straight into Syspro, including automatic stock-location and QC routing and BarTender label printing.</li>
                <li>Built a regulatory-compliance tool with Assent chemical-composition data, and a QC tracking dashboard that flags suspect materials, calculates rework cost, issues RMAs and reports weekly and monthly metrics.</li>
            </ul>
        </section>

        <section class="job">
            <div class="job-head">
                <h3>Chief Technology Officer <span>· Clever Investor, Tempe, AZ</span></h3>
                <span class="dates">Aug 2015 – Apr 2025</span>
            </div>
            <p class="lead">Promoted from Customer Service Rep through Technical Support, Senior Technical Support Specialist and Senior IT Agent to CTO. Led the development and IT teams.</p>
            <ul class="bullets">
                <li>Built a full-stack event management platform that saved more than $7,000 per event and cut venue check-in by 90+ minutes per 1,000 attendees.</li>
                <li>Brought all outside IT and software development work in-house, saving $6,800 a month.</li>
                <li>Built automated fulfillment for 200+ physical and digital products, and marketing and list-hygiene flows for 80,000+ contacts a day.</li>
                <li>Designed and deployed secure REST APIs, CI/CD pipelines, and integrations across Salesforce, Keap, HubSpot, GoHighLevel and Maropost.</li>
                <li>Enforced legal and compliance standards across technology and marketing.</li>
                <li>Ran IT across multiple locations, including servers, networking, VoIP, cabling, building security and two office moves with zero downtime.</li>
            </ul>
        </section>

        <section class="job">
            <div class="job-head">
                <h3>Owner &amp; Engineer <span>· Handles Tech LLC (independent projects)</span></h3>
                <span class="dates">Ongoing</span>
            </div>
            <ul class="bullets">
                <li>Run a self-hosted LiteLLM gateway that routes several apps between local GPU and cloud models, with RAG, a model-evaluation harness and AI agents for infrastructure triage.</li>
                <li>Operate a Proxmox and TrueNAS ZFS environment with OpenBao secrets management, nightly Trivy CVE scanning, a replicated mail server, and CI/CD through n8n.</li>
            </ul>
        </section>

        <section class="job">
            <div class="job-head">
                <h3>Earlier Career <span>· Network &amp; telecom field engineering</span></h3>
                <span class="dates">2001 – 2015</span>
            </div>
            <ul class="bullets earlier">
                <li><b>Network Specialist, Black Box Network Services</b> (2015): built fiber and copper networks in Intel and Motorola cleanroom data centers, and project-managed the install team.</li>
                <li><b>Installation &amp; Repair Technician, Cox Communications</b> (2008–2015): installed and troubleshot business and residential video and data services on an HFC network.</li>
                <li><b>Telecommunications Technician, AT&amp;T</b> (2001–2008): maintained T1, ISDN, MPLS, DSL and fiber circuits from the central office to the customer, including in cleared secure facilities.</li>
            </ul>
        </section>

        <h2>Education</h2>
        <p>Purdue University: Electronics Engineering Technology coursework (1996–1998) · A.K. Smith Career Center: Electronics Engineering Technology and Residential Electrical vocational training (1992–1996)</p>
    </article>
</body>

</html>
