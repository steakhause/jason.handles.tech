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
                    'Languages' => 'PHP (OOP), JavaScript (OOP), HTML, CSS, Bash',
                    'Frameworks & Libraries' => 'Laravel, jQuery, TailwindCSS, Bootstrap, WordPress',
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
                    'SQL' => 'MySQL, PostgreSQL, SQLite, MariaDB',
                    'NoSQL' => 'MongoDB, Redis',
                    'Cloud Storage' => 'AWS (S3, EC2, RDS), Google Cloud Platform (GCP), DigitalOcean, Liquid Web',
                    'NAS' => 'TrueNAS, Synology, SMB/CIFS, NFS',
                    'Backup & Recovery' => 'Bacula, Duplicati, Rsync, ZFS, RAID',
                ]
            ],
            [
                'title' => 'Security & Standards',
                'items' => [
                    'Sources' => 'OWASP, NIST CSF, SANS, Mail Hardners, CIS Benchmarks, hardenize.com',
                    'Network Security' => 'Firewall, VPN, ACL, IDS/IPS',
                    'Auth & Encryption' => '2FA, MFA, Basic Authentication, Digest Authentication, OAuth2, JWT, SSL/TLS, STARTTLS, MTA-STS, Fail2Ban, ClamAV, UFW, iptables',
                ]
            ],
            [
                'title' => 'DevOps & Automation',
                'items' => [
                    'Version Control & CI/CD' => 'Git, GitHub, GitLab, GitHub Actions, GitLab CI/CD',
                    'Process Automation' => 'n8n, Node-Red, Zapier, PlusThis, Home Assistant',
                    'Container Orchestration' => 'Docker Compose, Portainer, Traefik',
                ]
            ],
            [
                'title' => 'CRM & Integration',
                'items' => [
                    'CRM Platforms' => 'Keap / Infusionsoft, Salesforce, GoHighLevel, HubSpot, Maropost, ClickFunnels, Podio, InvestorFuse, Lightspeed, Kartra, SquareSpace',
                    'API Experience' => 'REST APIs, SDKs, Custom Integrations, Webhooks, OAuth2 flows',
                    'Marketing Automation' => 'Campaign Flows, Email Triggers, Lead Capture, Contact Segmentation',
                ]
            ],
            [
                'title' => 'Networking & Hardware',
                'items' => [
                    'Protocols & Services' => 'TCP/IP, DNS, DHCP, VLANs, NAT, Reverse Proxy',
                    'Enterprise Hardware' => 'Cisco, Ubiquiti, Omada, Dell KVM',
                    'Physical Layer' => 'Cat5e/6 Cabling, Fiber, Rack Mount Equipment, Patch Panels',
                    'Tools' => 'Fluke Link Runner, Tempo Sidekick, JDSU DSAM, Wireshark, Nmap, Netcat, Ping, Traceroute',
                ]
            ],
            [
                'title' => 'Leadership & Strategy',
                'items' => [
                    'Roles' => 'Chief Technology Officer, Technical Project Manager, Lead Developer',
                    'Responsibilities' => 'Cross-functional team leadership, KPI tracking, stakeholder engagement, compliance oversight',
                    'Strengths' => 'Full-picture thinking, process automation, vendor management, scalable architecture',
                ]
            ]
        ];
    }
}
