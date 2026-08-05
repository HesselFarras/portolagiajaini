@php
    $first = config('portfolio.projects')[0] ?? null;
@endphp

@if ($first)
<footer class="flex h-16 w-full shrink-0 items-center justify-between gap-4 rounded-lg bg-card px-3 md:h-20 md:px-4">
    {{-- Info trek (Kiri) --}}
    <div class="flex items-center gap-3 min-w-0 flex-1 md:w-72 md:flex-none">
        <img
            id="pb-cover"
            src="{{ asset($first['cover']) }}"
            alt="Sampul {{ $first['title'] }}"
            width="640"
            height="640"
            class="size-11 shrink-0 rounded-md object-cover md:size-14"
        >
        <div class="flex flex-col justify-center min-w-0">
            <p id="pb-title" class="truncate text-sm font-semibold leading-snug">{{ $first['title'] }}</p>
            <p id="pb-tagline" class="truncate text-xs text-muted-foreground leading-snug">{{ $first['tagline'] }}</p>
        </div>
        <button
            type="button"
            data-like
            aria-label="Sukai proyek ini"
            class="ml-1 shrink-0 text-muted-foreground transition-colors hover:text-foreground"
        >
            <x-icon name="heart" class="size-4" />
        </button>
    </div>

    {{-- Kontrol mobile --}}
    <div class="flex items-center gap-3 md:hidden">
        <button
            type="button"
            data-player-toggle
            aria-label="Putar"
            class="grid size-10 place-items-center rounded-full bg-foreground text-background"
        >
            <span data-icon-play><x-icon name="play" class="ml-0.5 size-4 fill-current" /></span>
            <span data-icon-pause class="hidden"><x-icon name="pause" class="size-4 fill-current" /></span>
        </button>
        <button
            type="button"
            data-player-next
            aria-label="Berikutnya"
            class="text-muted-foreground transition-colors hover:text-foreground"
        >
            <x-icon name="skip-forward" class="size-5 fill-current" />
        </button>
    </div>

    {{-- Kontrol tengah (desktop) --}}
    <div class="hidden max-w-xl flex-1 flex-col items-center justify-center gap-2 md:flex">
        <div class="flex items-center gap-5">
            <x-icon name="shuffle" class="size-4 cursor-pointer text-muted-foreground transition-colors hover:text-foreground" />
            <button
                type="button"
                data-player-prev
                aria-label="Sebelumnya"
                class="text-muted-foreground transition-colors hover:text-foreground flex items-center justify-center"
            >
                <x-icon name="skip-back" class="size-5 fill-current" />
            </button>
            <button
                type="button"
                data-player-toggle
                aria-label="Putar"
                class="grid size-9 place-items-center rounded-full bg-foreground text-background transition-transform hover:scale-105"
            >
                <span data-icon-play class="flex items-center justify-center"><x-icon name="play" class="ml-0.5 size-4 fill-current" /></span>
                <span data-icon-pause class="hidden items-center justify-center"><x-icon name="pause" class="size-4 fill-current" /></span>
            </button>
            <button
                type="button"
                data-player-next
                aria-label="Berikutnya"
                class="text-muted-foreground transition-colors hover:text-foreground flex items-center justify-center"
            >
                <x-icon name="skip-forward" class="size-5 fill-current" />
            </button>
            <x-icon name="repeat" class="size-4 cursor-pointer text-muted-foreground transition-colors hover:text-foreground" />
        </div>

        <div class="flex w-full items-center gap-2 text-[10px] font-medium text-muted-foreground">
            <span id="pb-current-time" class="w-8 text-right leading-none">0:00</span>
            <div
                id="pb-progress-track"
                class="group relative flex h-1 flex-1 cursor-pointer items-center rounded-full bg-secondary"
                role="slider"
                aria-label="Progres lagu"
                aria-valuemin="0"
                aria-valuemax="0"
                aria-valuenow="0"
            >
                <div
                    id="pb-progress-fill"
                    class="absolute h-full left-0 rounded-full bg-foreground transition-colors group-hover:bg-primary"
                    style="width: 0%"
                ></div>
            </div>
            <span id="pb-duration" class="w-8 leading-none">{{ $first['duration'] }}</span>
        </div>
    </div>

    {{-- Kontrol kanan (desktop) --}}
    <div class="hidden w-56 items-center justify-end gap-3 md:flex">
        <x-icon name="volume-2" class="size-4 shrink-0 text-muted-foreground" />
        <input
            type="range"
            min="0"
            max="100"
            value="70"
            aria-label="Volume"
            class="w-24 accent-primary cursor-pointer"
        >
        <x-icon name="maximize-2" class="size-4 shrink-0 cursor-pointer text-muted-foreground transition-colors hover:text-foreground" />
    </div>
</footer>
@endif