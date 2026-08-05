@php
    $projects = config('portfolio.projects');
    $navItems = [
        ['label' => 'Beranda', 'href' => '#tentang', 'icon' => 'home'],
        ['label' => 'Proyek', 'href' => '#proyek', 'icon' => 'folder-git-2'],
        ['label' => 'Kontak', 'href' => '#kontak', 'icon' => 'mail'],
    ];
@endphp
<script src="https://cdn.tailwindcss.com"></script>

<aside class="hidden w-72 shrink-0 flex-col gap-2 lg:flex">
    <div class="rounded-lg bg-card p-5">
        <a href="#tentang" class="flex items-center gap-2">
            <x-icon name="audio-lines" class="size-7 text-primary" />
            <span class="text-lg font-black tracking-tight">{{ config('portfolio.profile.brand') }}</span>
        </a>
        <nav class="mt-6 space-y-1">
            @foreach ($navItems as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="flex items-center gap-4 rounded-md px-2 py-2 text-sm font-bold text-muted-foreground transition-colors hover:text-foreground"
                >
                    <x-icon :name="$item['icon']" class="size-5" />
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>
    </div>

    <div class="flex min-h-0 flex-1 flex-col rounded-lg bg-card p-5">
        <div class="flex items-center justify-between">
            <span class="flex items-center gap-3 text-sm font-bold text-muted-foreground">
                <x-icon name="library-big" class="size-5" />
                Library
            </span>
            <x-icon name="plus" class="size-5 text-muted-foreground transition-colors hover:text-foreground" />
        </div>

        <div class="mt-4 min-h-0 flex-1 space-y-1 overflow-y-auto no-scrollbar">
            @foreach (array_slice($projects, 0, 4) as $i => $project)
                <button
                    type="button"
                    data-track-row="{{ $i }}"
                    class="group flex w-full items-center gap-3 rounded-md p-2 text-left transition-colors hover:bg-accent/60"
                >
                    <img
                        src="{{ asset($project['cover']) }}"
                        alt="Sampul {{ $project['title'] }}"
                        loading="lazy"
                        width="640"
                        height="640"
                        class="size-11 shrink-0 rounded-md object-cover"
                    >
                    <span class="min-w-0 flex-1">
                        <span data-row-title class="block truncate text-sm font-semibold {{ $i === 0 ? 'text-primary' : '' }}">
                            {{ $project['title'] }}
                        </span>
                        <span class="block truncate text-xs text-muted-foreground">
                            Playlist • {{ $project['year'] }}
                        </span>
                    </span>
                    <span data-row-eq class="{{ $i === 0 ? '' : 'hidden' }}">
                        <x-equalizer :paused="true" />
                    </span>
                </button>
            @endforeach
        </div>
    </div>
</aside>
