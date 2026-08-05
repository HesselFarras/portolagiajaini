@php
    $quickLinks = [
        ['label' => 'About', 'href' => '#about', 'icon' => 'user'],
        ['label' => 'Top Projects', 'href' => '#proyek', 'icon' => 'folder-git-2'],
        ['label' => 'Latest Releases', 'href' => '#rilisan', 'icon' => 'disc-3'],
        ['label' => 'Skills', 'href' => '#keahlian', 'icon' => 'sparkles'],
        ['label' => 'Experience', 'href' => '#pengalaman', 'icon' => 'briefcase'],
        ['label' => 'Contact', 'href' => '#kontak', 'icon' => 'mail'],
    ];
@endphp

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
