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
            ])
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
                    <x-top-tracks />
                    <x-project-cards />
                    <x-skill-tiles />
                    <x-discography />
                    <x-contact />
                    <x-footer />
                </div>
            </main>
        </div>

        <x-player-bar />
    </div>

    <script>
        window.__TRACKS = @json($tracks);
    </script>
@endsection
