@php
    $footerNav = [
        ['label' => 'Beranda', 'href' => '#tentang'],
        ['label' => 'Proyek', 'href' => '#proyek'],
        ['label' => 'Keahlian', 'href' => '#keahlian'],
        ['label' => 'Pengalaman', 'href' => '#pengalaman'],
        ['label' => 'Kontak', 'href' => '#kontak'],
    ];
    $socialLinks = [
        ['label' => 'GitHub', 'href' => config('portfolio.socials.github'), 'icon' => 'github'],
        ['label' => 'LinkedIn', 'href' => config('portfolio.socials.linkedin'), 'icon' => 'linkedin'],
        ['label' => 'Instagram', 'href' => config('portfolio.socials.instagram'), 'icon' => 'instagram'],
        ['label' => 'Email', 'href' => 'mailto:' . config('portfolio.socials.email'), 'icon' => 'mail'],
    ];
@endphp


<footer class="border-t border-border pt-10">
    <div class="grid gap-10 md:grid-cols-[1.5fr_1fr_auto]">
        <div>
            <a href="#tentang" class="flex items-center gap-2">
                <x-icon name="audio-lines" class="size-6 text-primary" />
                <span class="font-black tracking-tight">{{ config('portfolio.profile.brand') }}</span>
            </a>
            <p class="mt-3 max-w-xs text-xs leading-relaxed text-muted-foreground">
                Creative developer yang meracik kode seperti playlist: setiap baris
                punya ritme, setiap rilis punya cerita.
            </p>
        </div>

        <nav aria-label="Navigasi footer">
            <p class="text-xs font-bold uppercase tracking-widest text-muted-foreground">
                Navigasi
            </p>
            <ul class="mt-3 space-y-2">
                @foreach ($footerNav as $item)
                    <li>
                        <a
                            href="{{ $item['href'] }}"
                            class="text-sm text-muted-foreground transition-colors hover:text-foreground"
                        >
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <div>
            <p class="text-xs font-bold uppercase tracking-widest text-muted-foreground">
                Sosial
            </p>
            <div class="mt-3 flex gap-3">
                @foreach ($socialLinks as $link)
                    <a
                        href="{{ $link['href'] }}"
                        aria-label="{{ $link['label'] }}"
                        class="grid size-10 place-items-center rounded-full bg-secondary text-muted-foreground transition-colors hover:bg-primary hover:text-primary-foreground"
                    >
                        <x-icon :name="$link['icon']" class="size-4" />
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mt-10 flex flex-col justify-between gap-2 border-t border-border pt-5 text-[11px] text-muted-foreground md:flex-row">
        <span>© {{ date('Y') }} {{ config('portfolio.profile.name') }}. Semua hak dilindungi.</span>
        <span>Dibangun dengan Laravel, Tailwind CSS & banyak kopi.</span>
    </div>
</footer>
