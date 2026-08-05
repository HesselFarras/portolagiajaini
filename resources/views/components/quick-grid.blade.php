@php
    $quickLinks = [
        ['label' => 'Proyek Unggulan', 'href' => '#proyek', 'icon' => 'folder-git-2'],
        ['label' => 'Rilisan Terbaru', 'href' => '#rilisan', 'icon' => 'disc-3'],
        ['label' => 'Keahlian', 'href' => '#keahlian', 'icon' => 'sparkles'],
        ['label' => 'Pengalaman', 'href' => '#pengalaman', 'icon' => 'briefcase'],
        ['label' => 'Tentang', 'href' => '#tentang', 'icon' => 'user'],
        ['label' => 'Kontak', 'href' => '#kontak', 'icon' => 'mail'],
    ];
@endphp

@vite(['resources/css/app.css', 'resources/js/app.js'])

<section aria-label="Navigasi cepat">
    <div class="grid grid-cols-2 gap-2 lg:grid-cols-3">
        @foreach ($quickLinks as $link)
            <a
                href="{{ $link['href'] }}"
                class="group flex h-14 items-center gap-3 overflow-hidden rounded-md bg-secondary/70 transition-colors hover:bg-accent md:h-16"
            >
                <span class="grid h-full aspect-square shrink-0 place-items-center bg-primary/15">
                    <x-icon :name="$link['icon']" class="size-6 text-primary" />
                </span>
                <span class="truncate text-sm font-bold">{{ $link['label'] }}</span>
            </a>
        @endforeach
    </div>
</section>
