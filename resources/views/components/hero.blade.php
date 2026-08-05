
@vite(['resources/css/app.css', 'resources/js/app.js'])
<section id="tentang" class="relative scroll-mt-24">
    <div class="relative h-[400px] overflow-hidden md:h-[460px]">
        <img
            src="{{ asset(config('portfolio.profile.hero')) }}"
            alt="{{ config('portfolio.profile.hero_alt') }}"
            width="1920"
            height="800"
            class="h-full w-full object-cover object-center"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-card via-card/25 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-card/70 via-transparent to-transparent"></div>

        <div class="absolute inset-x-0 bottom-0 p-5 md:p-10">
            <div class="flex items-center gap-2">
                <x-icon name="badge-check" class="size-5 text-verified" />
                <span class="text-sm font-semibold">Verified Developer</span>
            </div>
            <h1 class="mt-2 text-5xl font-black tracking-tighter drop-shadow-lg md:text-7xl xl:text-8xl">
                {{ config('portfolio.profile.name') }}
            </h1>
            <p class="mt-3 text-sm font-medium text-foreground/80">
                {{ config('portfolio.profile.stats') }}
            </p>

            <div class="mt-6 flex items-center gap-5">
                <button
                    type="button"
                    data-player-toggle
                    aria-label="Putar"
                    class="grid size-14 place-items-center rounded-full bg-primary text-primary-foreground shadow-xl transition-transform hover:scale-105"
                >
                    <span data-icon-play><x-icon name="play" class="ml-0.5 size-6 fill-current" /></span>
                    <span data-icon-pause class="hidden"><x-icon name="pause" class="size-6 fill-current" /></span>
                </button>
                <a
                    href="#kontak"
                    class="rounded-full border border-foreground/40 px-6 py-2.5 text-sm font-bold transition-all hover:scale-105 hover:border-foreground"
                >
                    Ikuti
                </a>
                <button
                    type="button"
                    aria-label="Opsi lainnya"
                    class="text-muted-foreground transition-colors hover:text-foreground"
                >
                    <x-icon name="ellipsis" class="size-7" />
                </button>
            </div>
        </div>
    </div>
</section>
