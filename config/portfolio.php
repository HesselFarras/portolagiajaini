<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Meta & SEO
    |--------------------------------------------------------------------------
    */
    'meta' => [
        'title' => 'Hessel Farras',
        'description' => 'Portofolio Hessel Farras, mahasiswa Informatics Engineering.',
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
        'hero_alt' => 'Hessel Farras di workspace dengan nuansa Spotify dark mode',
        'stats' => '7 Project Released • Informatics Engineering Student & Tech Explorer • Indonesia',
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
            'tagline' => 'Platform freelance dan portofolio mahasiswa',
            'description' => 'Platform digital tempat mahasiswa membangun portofolio profesional dan menjangkau klien untuk layanan freelance.',
            'tags' => ['Laravel', 'JavaScript', 'Tailwind CSS', 'PostgreSQL'],
            'plays' => '2.340.112',
            'duration' => '3:45',
            'year' => '2026',
            'cover' => asset('images/cover-1.png'),
        ],
        [
            'id' => 'Savvy',
            'title' => 'Savvy',
            'tagline' => 'Aplikasi mobile pencatat keuangan dengan AI',
            'description' => 'Aplikasi mobile untuk mencatat keuangan dengan bantuan AI yang dapat membantu menganalisis keuangan pribadi.',
            'tags' => ['Flutter', 'Supabase', 'Dart'],
            'plays' => '1.890.432',
            'duration' => '4:10',
            'year' => '2026',
            'cover' => asset('images/cover-2.png'),
        ],
        [
            'id' => 'voting-duta',
            'title' => 'Voting Duta HIMAFI',
            'tagline' => 'Sistem e-voting real-time berbatas waktu',
            'description' => 'Platform pemungutan suara online dengan validasi jadwal otomatis (Carbon), proteksi batas waktu, dan rekapitulasi cepat.',
            'tags' => ['Laravel', 'Alpine.js', 'Supabase','PostgreSQL','Tailwind CSS'],
            'plays' => '510.000',
            'duration' => '3:15',
            'year' => '2026',
            'cover' => asset('images/cover-4.png'),
        ],
        [
            'id' => 'sdn-ciledug-barat',
            'title' => 'Web Profile SDN Ciledug Barat',
            'tagline' => 'Website profil sekolah berbasis Laravel',
            'description' => 'Website profil sekolah untuk penyampaian informasi publik, dengan fitur manajemen konten dan berita sekolah.',
            'tags' => ['Laravel', 'Tailwind CSS','JavaScript', 'PostgreSQL', 'Supabase'],
            'plays' => '1.200.000',
            'duration' => '4:00',
            'year' => '2026',
            'cover' => asset('images/cover-3.png'),
        ],
        [
            'id' => 'clauve',
            'title' => 'clauve.wear',
            'tagline' => 'E-commerce fashion single vendor',
            'description' => 'Platform e-commerce untuk fashion single vendor, dengan fitur katalog produk, keranjang belanja, dan integrasi pembayaran online.',
            'tags' => ['Laravel', 'Tailwind CSS', 'PostgreSQL', 'Supabase'],
            'plays' => '750.000',
            'duration' => '3:30',
            'year' => '2025',
            'cover' => asset('images/cover-5.png'),
        ],
        [
            'id' => 'smkletris2',
            'title' => 'Web Profile SMK Letris Indonesia 2',
            'tagline' => 'Website profil sekolah berbasis Laravel',
            'description' => 'Website profil sekolah untuk penyampaian informasi publik, dengan fitur manajemen konten dan berita sekolah.',
            'tags' => ['Laravel', 'Tailwind CSS', 'MySQL',],
            'plays' => '1.000.000',
            'duration' => '3:50',
            'year' => '2025',
            'cover' => asset('images/cover-6.png'),
        ],
        [
            'id' => 'travelin',
            'title' => 'Travelin',
            'tagline' => 'Website travel dan wisata berbasis Laravel',
            'description' => 'Website travel dan wisata berbasis Laravel, dengan fitur pencarian destinasi, booking tiket, dan ulasan pengguna.',
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
                'Mengembangkan website profil sekolah untuk penyampaian informasi publik',
                'Mengimplementasikan fitur manajemen konten dan berita sekolah',
                'Dibangun dengan Laravel dan Tailwind CSS',
            ],
        ],
        [
            'role' => 'Full-Stack Developer',
            'company' => 'Himpunan Mahasiswa Pendidikan Fisika Universitas Sultan Ageng Tirtayasa',
            'period' => '2026',
            'year' => '2026',
            'points' => [
                'Membangun aplikasi sistem pemungutan suara (e-voting) berbatas waktu',
                'Menggunakan Laravel Carbon & Vanilla JS untuk mekanisme penutupan otomatis',
            ],
        ],
    ],
];