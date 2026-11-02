<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Meta & SEO
    |--------------------------------------------------------------------------
    */
    'meta' => [
        'title' => 'Hessel Farras',
        'description' => 'Portfolio of Hessel Farras, an Informatics Engineering student.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Profil
    |--------------------------------------------------------------------------
    */
    'profile' => [
        'name' => 'Hessel Farras',
        'brand' => 'hessel.dev',
        'avatar' => asset('images/avatar.jpg'),
        'hero' => asset('images/hero-artist.jpg'),
        'hero_alt' => 'Hessel Farras in workspace with Spotify dark mode theme',
        'stats' => '7 Projects Released • Informatics Engineering Student & Tech Explorer • Indonesia',
    ],

    /*
    |--------------------------------------------------------------------------
    | Link Sosial
    |--------------------------------------------------------------------------
    */
    'socials' => [
        'email' => 'hesselfarras@gmail.com',
        'github' => 'https://github.com/hesselfarras',
        'linkedin' => 'https://www.linkedin.com/in/hessel-farras-abiyyu-079381332 ',
        'instagram' => 'https://instagram.com/hhesself',
    ],

    /*
    |--------------------------------------------------------------------------
    | Proyek ("Lagu")
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'Savvy',
            'title' => 'Savvy',
            'tagline' => 'AI-powered mobile financial tracker',
            'description' => 'A mobile application for personal finance tracking with AI assistance to help analyze daily expenditures.',
            'tags' => ['Flutter', 'Supabase', 'Dart'],
            'plays' => '1.890.432',
            'duration' => '4:10',
            'year' => '2026',
            'cover' => asset('images/cover-2.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [],
        ],
        [
            'id' => 'voting-duta',
            'title' => 'Voting Duta HIMAFI',
            'demo_url' => 'https://votingdutafisika.vercel.app/',
            'github_url' => 'https://github.com/mes1u/voting-duta.git',
            'tagline' => 'Real-time e-voting system with strict deadline enforce',
            'description' => 'Online voting platform featuring automatic schedule validation (Carbon), time limit protection, and fast vote tallying.',
            'tags' => ['Laravel', 'Alpine.js', 'Supabase','PostgreSQL','Tailwind CSS'],
            'plays' => '510.000',
            'duration' => '3:15',
            'year' => '2026',
            'cover' => asset('images/cover-4.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [
                'images/projects/voting-duta/landingpage.png',
                'images/projects/voting-duta/kandidat.png',
                'images/projects/voting-duta/leaderboard.png',
            ],
        ],
        [
            'id' => 'sdn-ciledug-barat',
            'title' => 'SDN Ciledug Barat',
            'demo_url' => 'https://sdnciledugbarat.vercel.app/',
            'github_url' => 'https://github.com/mes1u/sdn_cilbar.git',
            'tagline' => 'School profile website built with Laravel',
            'description' => 'School profile website for public information delivery, equipped with content management and school news features.',
            'tags' => ['Laravel', 'Tailwind CSS','JavaScript', 'PostgreSQL', 'Supabase'],
            'plays' => '1.200.000',
            'duration' => '4:00',
            'year' => '2026',
            'cover' => asset('images/cover-3.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [
                'images/projects/sdn-ciledug-barat/landingpage.png',
                'images/projects/sdn-ciledug-barat/about.png',
                'images/projects/sdn-ciledug-barat/akademik.png',
                'images/projects/sdn-ciledug-barat/ekstrakurikuler.png',
                'images/projects/sdn-ciledug-barat/fasilitas.png',
                'images/projects/sdn-ciledug-barat/formpendaftaran1.png',
                'images/projects/sdn-ciledug-barat/formpendaftaran2.png',
                'images/projects/sdn-ciledug-barat/konsul.png',
                'images/projects/sdn-ciledug-barat/portalguru.png',
                'images/projects/sdn-ciledug-barat/prestasi.png',
                'images/projects/sdn-ciledug-barat/strukturorg.png',
                'images/projects/sdn-ciledug-barat/visimisi.png',
            ],
        ],
        [
            'id' => 'clauve',
            'title' => 'clauve.wear',
            'demo_url' => 'https://clauve-wear.vercel.app/',
            'github_url' => 'https://github.com/mes1u/clauve.wear.git',
            'tagline' => 'Single-vendor fashion e-commerce platform',
            'description' => 'An e-commerce platform for single-vendor fashion retail, featuring product catalogs, shopping cart, and online payment integration.',
            'tags' => ['Laravel', 'Tailwind CSS', 'PostgreSQL', 'Supabase'],
            'plays' => '750.000',
            'duration' => '3:30',
            'year' => '2025',
            'cover' => asset('images/cover-5.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [
                'images/projects/clauve/login.png',
                'images/projects/clauve/landingpage.png',
                'images/projects/clauve/product.png',
                'images/projects/clauve/cart.png',
                'images/projects/clauve/checkout.png',
                'images/projects/clauve/orders.png',
                'images/projects/clauve/shippingstatus.png',
                'images/projects/clauve/midtrans.png',
            ],
        ],
        [
            'id' => 'smkletris2',
            'title' => 'SMK Letris Indonesia 2',
            'github_url' => 'https://github.com/mes1u/SMKLETRISINDONESIA2.git',
            'tagline' => 'School profile website built with Laravel',
            'description' => 'School profile website for public information dissemination, featuring content management and school news updates.',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL',],
            'plays' => '1.000.000',
            'duration' => '3:50',
            'year' => '2025',
            'cover' => asset('images/cover-6.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [
                'images/projects/smkletris2/landingpage.png',
                'images/projects/smkletris2/about.png',
                'images/projects/smkletris2/formdaftar.png',
                'images/projects/smkletris2/formkonsul.png',
                'images/projects/smkletris2/news.png',
                'images/projects/smkletris2/prodi.png',
            ],
        ],
        [
            'id' => 'travelin',
            'title' => 'Travelin',
            'github_url' => 'https://github.com/mes1u/travelin.git',
            'tagline' => 'Laravel-based travel and tourism website',
            'description' => 'A travel and tourism website powered by Laravel, featuring destination search, ticket booking, and user reviews.',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL',],
            'plays' => '1.000.000',
            'duration' => '3:50',
            'year' => '2024',
            'cover' => asset('images/cover-7.png'),
            'audio' => 'audio/skillink.mp3',
            'screenshots' => [
                'images/projects/travelin/landingpage.png',
                'images/projects/travelin/searchticket.png',
                'images/projects/travelin/resultsearch.png',
            ],
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Keahlian ("Genre")
    |--------------------------------------------------------------------------
    | icon : nama ikon di <x-icon>  (code|server|smartphone|palette|cloud|chart)
    | tile : warna kartu            (green|rust|gold|berry|iris|teal)
    */
    'skills' => [
        ['name' => 'Backend', 'detail' => 'Laravel, Go, PHP, REST APIs, MySQL, PostgreSQL', 'icon' => 'server', 'tile' => 'green'],
        ['name' => 'Frontend', 'detail' => 'Tailwind CSS, Blade, Vanilla JS, HTML5, CSS3', 'icon' => 'code', 'tile' => 'rust'],
        ['name' => 'Mobile', 'detail' => 'Flutter, Dart', 'icon' => 'smartphone', 'tile' => 'gold'],
        ['name' => 'Data Science', 'detail' => 'Python, Statistics, Algorithm Analysis, Pandas', 'icon' => 'chart', 'tile' => 'teal'],
        ['name' => 'SysAdmin', 'detail' => 'Linux (RHEL/RH124), Shell/CLI, Server Setup, Homelab', 'icon' => 'cloud', 'tile' => 'iris'],
        ['name' => 'Networking', 'detail' => 'Cisco Packet Tracer, Computer Networks, Routing & Switching', 'icon' => 'wifi', 'tile' => 'berry'],
    ],

    'certificates' => [
        [
            'title' => 'EC-Council Capture the Flag',
            'year' => '2026',
            'image' => 'images/certificates/Sertifikat CTF EC-Council.png',
            'url' => '#',
        ],
        [
            'title' => 'CyberOps Associate', 'year' => '2026',
            'image' => 'images/certificates/serti20.png', 'url' => '#',
        ],
        [
            'title' => 'Introduction To Modern AI', 'year' => '2026',
            'image' => 'images/certificates/serti19.png', 'url' => '#',
        ],  
        [
            'title' => 'Introduction To Cybersecurity', 'year' => '2026',
            'image' => 'images/certificates/serti18.png', 'url' => '#',
        ],
        [
            'title' => 'Endpoint Security', 'year' => '2026',
            'image' => 'images/certificates/serti17.png', 'url' => '#',
        ],
        [
            'title' => 'Cyber Threat Management ', 'year' => '2026',
            'image' => 'images/certificates/serti16.png', 'url' => '#',
        ],
        [
            'title' => 'Network Defense', 'year' => '2026',
            'image' => 'images/certificates/serti15.png', 'url' => '#',
        ],
        [
            'title' => 'Security Operations', 'year' => '2026',
            'image' => 'images/certificates/serti14.png', 'url' => '#',
        ],
        [
            'title' => 'Network Security', 'year' => '2026',
            'image' => 'images/certificates/serti13.png', 'url' => '#',
        ],
        [
            'title' => 'Access Control Concepts', 'year' => '2026',
            'image' => 'images/certificates/serti12.png', 'url' => '#',
        ],
        [
            'title' => 'Incident Response, Business Continuity and Disaster Recovery Concepts', 'year' => '2026',
            'image' => 'images/certificates/serti11.png', 'url' => '#',
        ],
        [
            'title' => 'Security Principles', 'year' => '2026',
            'image' => 'images/certificates/serti10.png', 'url' => '#',
        ],
        [
            'title' => 'Red Hat Enterprise Linux Automation with Ansible', 'year' => '2025',
            'image' => 'images/certificates/serti9.png', 'url' => '#',
        ],
        [
            'title' => 'Red Hat System Administration I', 'year' => '2025',
            'image' => 'images/certificates/serti8.png', 'url' => '#',
        ],
        [
            'title' => 'Red Hat System Administration II', 'year' => '2025',
            'image' => 'images/certificates/serti7.png', 'url' => '#',
        ],
        [
            'title' => 'Linux Essentials', 'year' => '2025',
            'image' => 'images/certificates/serti6.png', 'url' => '#',
        ],
        [
            'title' => 'Operating Systems Basics', 'year' => '2025',
            'image' => 'images/certificates/serti5.png', 'url' => '#',
        ],
        [
            'title' => 'Dasar AI', 'year' => '2025',
            'image' => 'images/certificates/serti4.png', 'url' => '#',
        ],
        [
            'title' => 'DCI Bootcamp for Beginners: Flutter', 'year' => '2025',
            'image' => 'images/certificates/serti3.png', 'url' => '#',
        ],
        [
            'title' => 'Full-Stack Developer Laravel 11, TailwindCSS, dan Filament', 'year' => '2025',
            'image' => 'images/certificates/serti2.png', 'url' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Pengalaman ("Diskografi")
    |--------------------------------------------------------------------------
    */
    'experiences' => [
        [
            'role' => 'Full-Stack Developer',
            'company' => 'SDN Ciledug Barat',
            'period' => '2026',
            'year' => '2026',
            'points' => [
                'Developed school profile website for public information dissemination',
                'Implemented content management system and school news publishing feature',
                'Built using Laravel and Tailwind CSS',
            ],
        ],
        [
            'role' => 'Full-Stack Developer',
            'company' => 'Himpunan Mahasiswa Pendidikan Fisika Universitas Sultan Ageng Tirtayasa',
            'period' => '2026',
            'year' => '2026',
            'points' => [
                'Engineered time-restricted e-voting system application',
                'Utilized Laravel Carbon & Vanilla JS for automated deadline enforcement mechanism',
            ],
        ],
    ],
];