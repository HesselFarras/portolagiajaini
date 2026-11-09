@if (app()->isProduction())
    @php
        $manifestPath = public_path('build/manifest.json');
        $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];
    @endphp

    @if(!empty($manifest))
        <link rel="stylesheet" href="{{ asset('build/' . $manifest['resources/css/app.css']['file']) }}">
        <script type="module" src="{{ asset('build/' . $manifest['resources/js/app.js']['file']) }}"></script>
    @endif
@else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif
@extends('layouts.app')

@section('content')
    @php
        // Data untuk player bar (dibaca resources/js/player.js).
        $tracks = collect(config('portfolio.projects'))
            ->map(fn ($p) => [
                'title' => $p['title'],
                'tagline' => $p['tagline'],
                'duration' => $p['duration'],
                'cover' => asset($p['cover']),
                'audio' => isset($p['audio']) ? asset($p['audio']) : null,
            ])
            ->values();

        $projectsForModal = collect(config('portfolio.projects'))
            ->map(function ($p) {
                return [
                    'id' => $p['id'],
                    'title' => $p['title'],
                    'tagline' => $p['tagline'],
                    'description' => $p['description'],
                    'tags' => $p['tags'],
                    'year' => $p['year'],
                    'plays' => $p['plays'],
                    'duration' => $p['duration'],
                    'cover' => asset($p['cover']),
                    'demo' => $p['demo_url'] ?? null,
                    'github' => $p['github_url'] ?? null,
                    'screenshots' => collect($p['screenshots'] ?? [])->map(fn ($image) => asset($image))->values(),
                ];
            })
            ->values();
    @endphp

    <div class="flex h-dvh flex-col gap-2 bg-background p-2">
        <div class="flex min-h-0 flex-1 gap-2">
            <x-sidebar />

            <main class="min-w-0 flex-1 overflow-y-auto rounded-lg bg-card">
                <x-top-bar />
                <x-hero />

                <div class="space-y-12 px-4 pb-10 pt-6 md:px-8">
                    <x-quick-grid />
                    <x-about />
                    <x-project-cards />
                    <x-skill-tiles />
                    <x-certificates />
                    <x-discography />
                    <x-contact />
                    <x-footer />
                </div>
            </main>
        </div>

        <x-player-bar />
    </div>

    <div
        id="project-modal"
        class="fixed inset-0 z-50 hidden items-center justify-center bg-black/75 p-4 backdrop-blur-sm"
        role="dialog"
        aria-modal="true"
        aria-labelledby="project-modal-title"
    >
        <div class="max-h-[95vh] w-full max-w-6xl overflow-y-auto rounded-2xl border border-white/10 bg-card shadow-2xl">
            <div class="relative bg-black/40 p-2 md:p-4">
                <div class="flex max-h-[70vh] min-h-[22rem] items-center justify-center overflow-auto rounded-xl bg-black/30">
                    <img id="project-modal-cover" src="" alt="" class="block max-h-[68vh] max-w-full cursor-zoom-in object-contain md:max-h-[72vh]">
                </div>
                <button type="button" data-project-gallery-prev aria-label="Gambar sebelumnya" class="absolute left-3 top-1/2 hidden -translate-y-1/2 rounded-full bg-black/60 px-3 py-2 text-white">‹</button>
                <button type="button" data-project-gallery-next aria-label="Gambar berikutnya" class="absolute right-3 top-1/2 hidden -translate-y-1/2 rounded-full bg-black/60 px-3 py-2 text-white">›</button>
                <div id="project-gallery-thumbs" class="absolute bottom-4 left-1/2 flex max-w-[94%] -translate-x-1/2 gap-2 overflow-x-auto rounded-xl bg-black/70 p-2.5 shadow-lg"></div>
                <button type="button" data-project-modal-close aria-label="Tutup detail project" class="absolute right-4 top-4 grid size-10 place-items-center rounded-full bg-black/60 text-xl text-white transition hover:bg-black/80">×</button>
            </div>
            <div class="space-y-5 p-6">
                <div>
                    <p id="project-modal-tagline" class="text-sm font-semibold text-primary"></p>
                    <h2 id="project-modal-title" class="mt-1 text-3xl font-black tracking-tight"></h2>
                    <p id="project-modal-meta" class="mt-2 text-xs text-muted-foreground"></p>
                </div>
                <button type="button" id="project-modal-play" class="rounded-full bg-primary px-5 py-2.5 text-sm font-bold text-primary-foreground transition hover:scale-105">
                    ▶ Play project audio
                </button>
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-muted-foreground">Tech Stack</h3>
                    <div id="project-modal-tags" class="mt-2 flex flex-wrap gap-2"></div>
                </div>
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-widest text-muted-foreground">Tentang Project</h3>
                    <p id="project-modal-description" class="mt-2 text-sm leading-7 text-foreground/80"></p>
                </div>
                <div id="project-modal-links" class="flex gap-3">
                    <a id="project-modal-demo" href="#" target="_blank" rel="noopener" class="hidden rounded-full bg-primary px-5 py-2.5 text-sm font-bold text-primary-foreground">Live Demo</a>
                    <a id="project-modal-github" href="#" target="_blank" rel="noopener" class="hidden rounded-full border border-border px-5 py-2.5 text-sm font-bold">GitHub</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.__TRACKS = @json($tracks);
        window.__PROJECTS = @json($projectsForModal);
    </script>
@endsection
