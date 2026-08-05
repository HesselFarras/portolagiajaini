@php
    $mobileNav = [
        ['label' => 'About', 'href' => '#tentang'],
        ['label' => 'Projects', 'href' => '#proyek'],
        ['label' => 'Releases', 'href' => '#rilisan'],
        ['label' => 'Skills', 'href' => '#keahlian'],
        ['label' => 'Experience', 'href' => '#pengalaman'],
        ['label' => 'Contact', 'href' => '#kontak'],
    ];
@endphp

<header class="sticky top-0 z-30 bg-background/55 px-4 pb-3 pt-3 backdrop-blur-md md:px-8">
    <div class="flex items-center justify-between gap-4">
        <div class="hidden gap-2 md:flex">
            <button
                type="button"
                aria-label="Kembali"
                class="grid size-8 place-items-center rounded-full bg-background/70 text-muted-foreground transition-colors hover:text-foreground"
            >
                <x-icon name="chevron-left" class="size-5" />
            </button>
            <button
                type="button"
                aria-label="Maju"
                class="grid size-8 place-items-center rounded-full bg-background/70 text-muted-foreground transition-colors hover:text-foreground"
            >
                <x-icon name="chevron-right" class="size-5" />
            </button>
        </div>

        <div class="flex items-center gap-3">
            <a
                href="{{ asset('documents/CV_HESSEL_FARRAS.pdf') }}"
                download="CV_HESSEL_FARRAS.pdf"
                target="_blank"
                rel="noopener noreferrer"
                class="rounded-full bg-foreground px-4 py-2 text-xs font-bold text-background transition-transform hover:scale-105"
            >
                Download CV
            </a>
            <img
                src="{{ asset(config('portfolio.profile.avatar')) }}"
                alt="Foto profil {{ config('portfolio.profile.name') }}"
                width="640"
                height="640"
                class="size-8 rounded-full object-cover ring-2 ring-border"
            >
        </div>
    </div>

    <nav class="mt-3 flex gap-2 overflow-x-auto no-scrollbar lg:hidden">
        @foreach ($mobileNav as $item)
            <a
                href="{{ $item['href'] }}"
                class="shrink-0 rounded-full bg-secondary px-3.5 py-1.5 text-xs font-semibold transition-colors hover:bg-accent"
            >
                {{ $item['label'] }}
            </a>
        @endforeach
    </nav>
</header>