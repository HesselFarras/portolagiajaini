<section id="proyek" class="scroll-mt-24">
    <div class="flex items-end justify-between">
        <h2 class="text-2xl font-bold tracking-tight">Popular Projects</h2>
        <a
            href="#rilisan"
            class="text-sm font-bold text-muted-foreground transition-colors hover:text-foreground"
        >
            Show All
        </a>
    </div>

    <div class="mt-3">
        @foreach (collect(config('portfolio.projects'))->take(5) as $i => $project)
            <button
                type="button"
                data-track-row="{{ $i }}"
                class="group grid w-full grid-cols-[1.5rem_minmax(0,1fr)_auto] items-center gap-3 rounded-md px-2 py-2 text-left transition-colors hover:bg-accent/60 md:grid-cols-[1.5rem_minmax(0,1fr)_9rem_3rem_3rem] md:gap-4"
            >
                <span class="flex items-center justify-center">
                    <span data-row-number class="{{ $i === 0 ? 'hidden' : 'flex' }} items-center justify-center">
                        <span class="text-sm text-muted-foreground group-hover:hidden">{{ $i + 1 }}</span>
                        <x-icon name="play" class="hidden size-3.5 fill-current group-hover:block" />
                    </span>
                    <span data-row-eq class="{{ $i === 0 ? '' : 'hidden' }}">
                        <x-equalizer :paused="true" />
                    </span>
                </span>

                <span class="flex min-w-0 items-center gap-3">
                    <img
                        src="{{ asset($project['cover']) }}"
                        alt="Sampul {{ $project['title'] }}"
                        loading="lazy"
                        width="640"
                        height="640"
                        class="size-10 shrink-0 rounded object-cover"
                    >
                    <span class="min-w-0">
                        <span data-row-title class="block truncate text-sm font-semibold {{ $i === 0 ? 'text-primary' : '' }}">
                            {{ $project['title'] }}
                        </span>
                        <!-- resources/views/components/top-tracks.blade.php -->
                        <span class="block truncate text-xs text-muted-foreground">
                            {{ $project['tagline'] ?? $project['category'] ?? '' }}
                        </span>
                    </span>
                </span>

                <span class="hidden text-sm text-muted-foreground md:block">
                    {{ $project['plays'] }}
                </span>
                <span class="hidden justify-center md:flex">
                    <x-icon name="heart" class="size-4 text-muted-foreground opacity-0 transition-opacity hover:text-primary group-hover:opacity-100" />
                </span>
                <span class="text-right text-sm text-muted-foreground">
                    {{ $project['duration'] }}
                </span>
            </button>
        @endforeach
    </div>
</section>