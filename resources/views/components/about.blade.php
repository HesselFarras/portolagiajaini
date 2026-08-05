<section id="about" class="py-12 px-6 max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl md:text-3xl font-bold text-white tracking-tight hover:underline cursor-pointer">
                About Me
            </h2>
            <p class="text-xs md:text-sm text-neutral-400 mt-1">Behind the code, architecture, and exploration</p>
        </div>
        <span class="text-xs font-semibold text-neutral-400 uppercase tracking-widest bg-neutral-800/80 px-3 py-1.5 rounded-full border border-neutral-700/50">
            Artist Bio
        </span>
    </div>

    <!-- Main About Container -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        
        <!-- Left Column: Hero Artist Card (Big Feature) -->
        <div class="lg:col-span-7 bg-[#181818] hover:bg-[#202020] transition-colors duration-300 rounded-xl p-6 md:p-8 flex flex-col justify-between relative overflow-hidden group border border-neutral-800/60 transform-gpu">
            <!-- Background Glow Effect -->
            <div class="absolute -right-16 -top-16 w-64 h-64 bg-[#1DB954]/10 rounded-full blur-3xl pointer-events-none group-hover:bg-[#1DB954]/20 transition-all duration-500"></div>

            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-3 h-3 rounded-full bg-[#1DB954] animate-pulse"></span>
                    <span class="text-xs font-medium text-[#1DB954] uppercase tracking-wider">Verified Developer</span>
                </div>

                <h3 class="text-2xl md:text-4xl font-extrabold text-white mb-4 leading-tight">
                    Developing high performance digital products with continuous curiosity.
                </h3>

                <p class="text-neutral-300 text-sm md:text-base leading-relaxed mb-4">
                    Hello! I’m a Informatics Engineering student with a strong passion for software engineering and modern web development. I love turning ideas into high performance, responsive applications combining solid backend architecture with clean, intuitive user interfaces.
                </p>

                <p class="text-neutral-300 text-sm md:text-base leading-relaxed mb-4">
                    Beyond core application design, I actively expand my reach across the entire tech stack. I continuously explore broader fields like <span class="text-[#1DB954] font-medium">Cybersecurity</span>, <span class="text-[#1DB954] font-medium">Networking & Systems</span>, and <span class="text-[#1DB954] font-medium">Data Analytics</span>. Understanding the full ecosystem allows me to build more secure, resilient, and end-to-end solutions.
                </p>

                <p class="text-neutral-300 text-sm md:text-base leading-relaxed">
                    Outside of tech, music drives my daily workflow whether it's <span class="text-white font-medium">Pop Punk</span>, <span class="text-white font-medium">Midwestern Emo</span>, or <span class="text-white font-medium">Hip-hop Dangdut</span>. Much like writing clean code or tuning a system, music sparks my creativity and brings fresh energy to every challenge I tackle.
                </p>
            </div>
        </div>

        <!-- Right Column: Tech Stack & Credits (Spotify Playlist Style) -->
        <div class="lg:col-span-5 flex flex-col justify-between gap-4">
            
            <!-- Tech Stack Card -->
            <div class="bg-[#181818] rounded-xl p-6 border border-neutral-800/60 transform-gpu">
                <h4 class="text-sm font-bold text-neutral-300 uppercase tracking-wider mb-4 flex items-center gap-2">
                    <svg class="w-4 h-4 text-[#1DB954]" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/>
                    </svg>
                    Top Weapons & Interests
                </h4>

                <div class="flex flex-wrap gap-2">
                    @php
                        $skills = [
                            'Laravel'      => 'laravel',
                            'Go'           => 'go',
                            'Node.js'      => 'nodedotjs',
                            'Tailwind CSS' => 'tailwindcss',
                            'Supabase'     => 'supabase',
                            'Flutter'      => 'flutter',
                            'PHP'          => 'php',
                            'MySQL'        => 'mysql',
                            'PostgreSQL'   => 'postgresql',
                            'Figma'        => 'figma',
                            'Dart'         => 'dart',
                            'JavaScript'   => 'javascript',
                            'Python'       => 'python',
                            'Git'          => 'git',
                            'REST APIs'    => 'postman',
                        ];
                    @endphp

                    @foreach($skills as $name => $slug)
                        <span class="px-3 py-1.5 bg-[#282828] hover:bg-[#333333] text-neutral-200 text-xs font-medium rounded-full transition-colors cursor-default border border-neutral-700/40 flex items-center gap-2">
                            <img src="https://cdn.simpleicons.org/{{ $slug }}/1DB954" alt="{{ $name }}" class="w-3.5 h-3.5" loading="lazy" />
                            <span>{{ $name }}</span>
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Quick Info / Social Player Card -->
            <div class="bg-gradient-to-br from-[#181818] to-[#121212] rounded-xl p-6 border border-neutral-800/60 flex items-center justify-between transform-gpu">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-[#282828] rounded-lg flex items-center justify-center text-[#1DB954]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-sm font-bold text-white">Current Focus</h5>
                        <p class="text-xs text-neutral-400">Exploring Cyber, Systems & Web Performance</p>
                    </div>
                </div>

                <a href="#contact" class="w-10 h-10 bg-[#1DB954] hover:scale-105 rounded-full flex items-center justify-center text-black font-bold transition-transform shadow-lg shadow-[#1DB954]/20">
                    <svg class="w-5 h-5 ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </a>
            </div>

        </div>

    </div>
</section>