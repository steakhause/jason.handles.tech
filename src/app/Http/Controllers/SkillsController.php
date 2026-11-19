<?php

namespace App\Http\Controllers;

class SkillsController extends Controller
{
    /**
     * Core skills: the short, curated list shown as chips and used on the resume.
     * Keep this to things Jason can discuss in depth in an interview.
     */
    public static function core(): array
    {
        return [
            'Languages & Frameworks' => ['PHP (OOP)', 'Laravel', 'JavaScript', 'SQL / T-SQL', 'HTML & CSS', 'Tailwind CSS', 'Bash', 'VBA / MS Access'],
            'Integration & Automation' => ['REST & SOAP APIs', 'Webhooks', 'OAuth2 / JWT', 'n8n', 'Node-RED', 'Zapier', 'Browser extensions'],
            'AI & LLM' => ['Claude & Claude Code', 'OpenAI API', 'Gemini', 'Local LLMs', 'LiteLLM gateway', 'MCP servers', 'RAG', 'Model evaluation', 'Multi-agent systems'],
            'Business Platforms' => ['Keap', 'GoHighLevel', 'Salesforce', 'HubSpot', 'Stripe', 'Authorize.Net', 'Zendesk', 'Syspro ERP'],
            'Infrastructure & DevOps' => ['Linux', 'Docker', 'Proxmox', 'TrueNAS / ZFS', 'Nginx & Traefik', 'AWS', 'GitHub Actions', 'GitLab CI/CD'],
            'Data' => ['MySQL / MariaDB', 'PostgreSQL', 'Microsoft SQL Server', 'Redis', 'Reporting & dashboards'],
            'Security' => ['OpenBao (Vault)', 'Trivy CVE scanning', 'Cloudflare & Sucuri WAF', 'OWASP', 'PCI compliance', 'Incident response'],
            'Networking' => ['TCP/IP', 'VLANs', 'DNS', 'UniFi & Omada', 'VoIP', 'Fiber & copper cabling'],
        ];
    }

    /**
     * Platforms and APIs Jason has worked with, shown in a collapsed list on the homepage.
     */
    public static function platforms(): array
    {
        return [
            'CRM & marketing' => ['Keap / Infusionsoft', 'Salesforce & Marketing Cloud', 'GoHighLevel', 'HubSpot', 'Close', 'Podio', 'InvestorFuse', 'Realeflow', 'Maropost', 'Klaviyo', 'ClickFunnels', 'Kartra', 'Squarespace'],
            'Payments & commerce' => ['Stripe', 'Authorize.Net', 'Chase Paymentech', 'Whop', 'Fanbasis', 'Fortapay', 'Sticky.io', 'CustomerHub', 'ShipStation'],
            'Webinars & scheduling' => ['Aevent', 'WebinarJam / EverWebinar', 'WebinarFuel', 'Zoom', 'OnceHub', 'Google Calendar', 'Lightspeed VT'],
            'Communications' => ['Twilio', 'Vonage', 'BroadWorks XSI', 'ExpertTexting', 'Mailgun', 'Slack API', 'ElevenLabs'],
            'Operations & documents' => ['Zendesk', 'Asana', 'Teamwork', 'BoldSign', 'Typeform', 'Google Workspace APIs', 'Syspro', 'BarTender'],
            'Analytics & attribution' => ['Google Analytics', 'Google Tag Manager', 'Meta Pixel', 'Hyros', 'Wicked Reports', 'Tune / HasOffers', 'Hotjar'],
            'Hosting & DNS' => ['AWS', 'DigitalOcean', 'Vercel', 'Liquid Web', 'Backblaze B2', 'cPanel / WHM', 'InterWorx', 'Cloudflare', 'DNSimple'],
            'Physical & network' => ['ProdataKey (PDK) access control', 'UniFi', 'Omada', 'IP cameras / NVR', 'Pi-hole'],
        ];
    }
}
