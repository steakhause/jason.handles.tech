<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SkillsController extends Controller
{
    public static function data(): array
    {
        return [
            [
                'title' => 'Programming & Scripting',
                'items' => [
                    'Languages' => 'PHP (OOP), JavaScript (OOP), SQL / T-SQL, VBA, HTML, CSS, Bash',
                    'Frameworks & Libraries' => 'Laravel, Vite, TailwindCSS, jQuery, Bootstrap, WordPress (themes, plugins, hooks, ACF, Memberium)',
                    'Browser Extensions' => 'Chrome Web Store and Firefox Add-ons development and publishing',
                    'Data Handling' => 'REST, SOAP, XML-RPC, JSON, AJAX, WebSockets, Webhooks',
                ]
            ],
            [
                'title' => 'Platforms & Systems',
                'items' => [
                    'Operating Systems' => 'Linux (server and desktop), Windows (server and desktop), Proxmox, TrueNAS',
                    'Servers' => 'Apache, Nginx, Traefik, Nginx Proxy Manager, Postfix, Dovecot, Bind9',
                    'Containers & Virtualization' => 'Docker, Portainer, VirtualBox, KVM/QEMU',
                    'Monitoring & Reporting' => 'Grafana, Klipfolio, Periscope, NetData, SolarWinds, Uptime Kuma',
                    'Automation' => 'Linux cron, GitHub Actions, GitLab CI/CD, n8n, Node-Red, Home Assistant, Let\'s Encrypt Certbot, Zapier, PlusThis',
                ]
            ],
            [
                'title' => 'Data Solutions',
                'items' => [
                    'SQL' => 'Microsoft SQL Server, MySQL, PostgreSQL, SQLite, MariaDB, MS Access',
                    'NoSQL' => 'MongoDB, Redis',
                    'Cloud & Hosting' => 'AWS (S3, EC2, RDS), Google Cloud Platform (GCP), DigitalOcean, Vercel, Liquid Web, Backblaze B2, cPanel/WHM, InterWorx',
                    'NAS' => 'TrueNAS, Synology, SMB/CIFS, NFS',
                    'Backup & Recovery' => 'Bacula, Duplicati, Rsync, ZFS, RAID',
                ]
            ],
            [
                'title' => 'Security & Standards',
                'items' => [
                    'Sources' => 'OWASP, NIST CSF, SANS, Mail Hardeners, CIS Benchmarks, hardenize.com',
                    'Secrets & Scanning' => 'OpenBao (Vault), Trivy container CVE scanning, Sucuri WAF, Cloudflare',
                    'Threat Intel & Testing' => 'VirusTotal, AbuseIPDB, Sucuri SiteCheck, Mozilla Observatory, MXToolbox',
                    'Network Security' => 'Firewall, VPN, ACL, IDS/IPS',
                    'Auth & Encryption' => '2FA, MFA, Basic Authentication, Digest Authentication, OAuth2, JWT, SSL/TLS, STARTTLS, MTA-STS, Fail2Ban, ClamAV, UFW, iptables',
                ]
            ],
            [
                'title' => 'DevOps & Automation',
                'items' => [
                    'Version Control & CI/CD' => 'Git, GitHub, GitLab (self-hosted), SVN, Composer, GitHub Actions, GitLab CI/CD',
                    'Dev Tooling' => 'ngrok, webhook.site, Firefox Profiler, Let\'s Encrypt Certbot',
                    'Process Automation' => 'n8n, Node-Red, Zapier, PlusThis, Home Assistant',
                    'Container Orchestration' => 'Docker Compose, Portainer, Traefik',
                ]
            ],
            [
                'title' => 'AI & LLM Engineering',
                'items' => [
                    'Models & Platforms' => 'Claude / Claude Code, OpenAI API, Gemini, Hugging Face, LM Studio, Nous Hermes, local LLMs',
                    'Techniques' => 'AI agents and sub-agents, MCP servers, RAG, model evaluation, human-in-the-loop guardrails',
                    'Infrastructure' => 'LiteLLM gateway, local GPU inference, model routing and fallback',
                    'Voice' => 'ElevenLabs, Piper TTS, local speech-to-text transcription, Picovoice',
                ]
            ],
            [
                'title' => 'CRM & Marketing Automation',
                'items' => [
                    'CRM Platforms' => 'Keap / Infusionsoft (API, PHP SDK), Salesforce (incl. Marketing Cloud), GoHighLevel (API, Marketplace apps), HubSpot, Close, Podio, InvestorFuse, Realeflow',
                    'Marketing & Funnels' => 'Maropost, Klaviyo, ClickFunnels, Kartra, Squarespace',
                    'Practices' => 'Campaign flows, list hygiene, lead capture, contact segmentation, webhooks, OAuth2 flows',
                ]
            ],
            [
                'title' => 'Payments & Commerce',
                'items' => [
                    'Processors' => 'Stripe, Authorize.Net, Chase Paymentech, Whop, Fanbasis, Fortapay',
                    'Subscriptions & Fulfillment' => 'Sticky.io, CustomerHub, ShipStation',
                    'Revenue Protection' => 'Chargeback evidence automation, collections workflows, access control',
                ]
            ],
            [
                'title' => 'Communications & Scheduling',
                'items' => [
                    'Messaging & Voice' => 'Twilio, Vonage / Nexmo, BroadWorks XSI (VoIP), ExpertTexting, Mailgun, Slack API',
                    'Webinars & Events' => 'Aevent, WebinarJam / EverWebinar, WebinarFuel, Zoom, Lightspeed VT',
                    'Scheduling & Forms' => 'OnceHub, Google Calendar, Typeform, BoldSign (e-signature API)',
                ]
            ],
            [
                'title' => 'Operations, Analytics & ERP',
                'items' => [
                    'Support & Projects' => 'Zendesk, Asana API, Teamwork API, Google Workspace APIs (Sheets, Drive)',
                    'Analytics & Attribution' => 'Google Analytics, Google Tag Manager, Facebook Pixel / Conversions, Hyros, Wicked Reports, Tune / HasOffers, Hotjar',
                    'ERP & Manufacturing' => 'Syspro (SOAP API), BarTender label automation, QR / barcode receiving',
                ]
            ],
            [
                'title' => 'Networking & Hardware',
                'items' => [
                    'Protocols & Services' => 'TCP/IP, DNS, DHCP, VLANs, NAT, Reverse Proxy',
                    'Enterprise Hardware' => 'Cisco, Ubiquiti UniFi, TP-Link Omada, Dell KVM, Pi-hole',
                    'DNS' => 'Bind9, DNSimple, GoDaddy, Dynu, Cloudflare',
                    'Physical Security' => 'ProdataKey (PDK) access control API, IP cameras / NVR, SimpliSafe',
                    'Physical Layer' => 'Cat5e/6 Cabling, Fiber, Rack Mount Equipment, Patch Panels',
                    'Tools' => 'Fluke Link Runner, Tempo Sidekick, JDSU DSAM, Wireshark, Nmap, Netcat, Ping, Traceroute',
                ]
            ],
            [
                'title' => 'Leadership & Strategy',
                'items' => [
                    'Roles' => 'Chief Technology Officer, Sole Technologist, Technical Project Manager, Lead Developer',
                    'Responsibilities' => 'Cross-functional team leadership, KPI tracking, stakeholder engagement, compliance oversight',
                    'Strengths' => 'Full-picture thinking, process automation, vendor management, scalable architecture',
                ]
            ]
        ];
    }
}
