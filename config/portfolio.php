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
            'id' => 'skillink',
            'title' => 'Skillink',
            'tagline' => 'Student freelance and portfolio platform',
            'description' => 'A digital platform for students to build professional portfolios and reach clients for freelance opportunities.',
            'tags' => ['Laravel', 'JavaScript', 'Tailwind CSS', 'PostgreSQL'],
            'plays' => '2.340.112',
            'duration' => '3:45',
            'year' => '2026',
            'cover' => asset('images/cover-1.png'),
        ],
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
        ],
        [
            'id' => 'voting-duta',
            'title' => 'Voting Duta HIMAFI',
            'tagline' => 'Real-time e-voting system with strict deadline enforce',
            'description' => 'Online voting platform featuring automatic schedule validation (Carbon), time limit protection, and fast vote tallying.',
            'tags' => ['Laravel', 'Alpine.js', 'Supabase','PostgreSQL','Tailwind CSS'],
            'plays' => '510.000',
            'duration' => '3:15',
            'year' => '2026',
            'cover' => asset('images/cover-4.png'),
        ],
        [
            'id' => 'sdn-ciledug-barat',
            'title' => 'SDN Ciledug Barat',
            'tagline' => 'School profile website built with Laravel',
            'description' => 'School profile website for public information delivery, equipped with content management and school news features.',
            'tags' => ['Laravel', 'Tailwind CSS','JavaScript', 'PostgreSQL', 'Supabase'],
            'plays' => '1.200.000',
            'duration' => '4:00',
            'year' => '2026',
            'cover' => asset('images/cover-3.png'),
        ],
        [
            'id' => 'clauve',
            'title' => 'clauve.wear',
            'tagline' => 'Single-vendor fashion e-commerce platform',
            'description' => 'An e-commerce platform for single-vendor fashion retail, featuring product catalogs, shopping cart, and online payment integration.',
            'tags' => ['Laravel', 'Tailwind CSS', 'PostgreSQL', 'Supabase'],
            'plays' => '750.000',
            'duration' => '3:30',
            'year' => '2025',
            'cover' => asset('images/cover-5.png'),
        ],
        [
            'id' => 'smkletris2',
            'title' => 'SMK Letris Indonesia 2',
            'tagline' => 'School profile website built with Laravel',
            'description' => 'School profile website for public information dissemination, featuring content management and school news updates.',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL',],
            'plays' => '1.000.000',
            'duration' => '3:50',
            'year' => '2025',
            'cover' => asset('images/cover-6.png'),
        ],
        [
            'id' => 'travelin',
            'title' => 'Travelin',
            'tagline' => 'Laravel-based travel and tourism website',
            'description' => 'A travel and tourism website powered by Laravel, featuring destination search, ticket booking, and user reviews.',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL',],
            'plays' => '1.000.000',
            'duration' => '3:50',
            'year' => '2024',
            'cover' => asset('images/cover-7.png'),
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