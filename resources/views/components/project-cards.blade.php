<section id="rilisan" class="scroll-mt-24">
    <div class="flex items-end justify-between">
        <div>
            <h2 class="text-2xl font-bold tracking-tight">Rilisan Terbaru</h2>
            <p class="mt-1 text-sm text-muted-foreground">
                Beberapa proyek paling fresh dari studio
            </p>
        </div>
    </div>
<script src="https://cdn.tailwindcss.com"></script>

    <div class="mt-4 grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-6">
        @foreach (config('portfolio.projects') as $i => $project)
            <button
                type="button"
                data-track-row="{{ $i }}"
                class="group rounded-lg bg-secondary/50 p-3 text-left transition-colors hover:bg-accent/70"
            >
                <span class="relative block">
                    <img
                        src="{{ asset($project['cover']) }}"
                        alt="Sampul album {{ $project['title'] }}"
                        loading="lazy"
                        width="640"
                        height="640"
                        class="aspect-square w-full rounded-md object-cover shadow-2xl"
                    >
                    <span class="absolute bottom-2 right-2 grid size-10 translate-y-2 place-items-center rounded-full bg-primary text-primary-foreground opacity-0 shadow-lg transition-all group-hover:translate-y-0 group-hover:opacity-100">
                        <x-icon name="play" class="ml-0.5 size-4 fill-current" />
                    </span>
                </span>
                <span class="mt-3 block truncate text-sm font-bold">{{ $project['title'] }}</span>
                <span class="mt-1 block text-xs leading-relaxed text-muted-foreground line-clamp-2">
                    {{ $project['description'] }}
                </span>
                <span class="mt-2 block text-[11px] font-medium text-muted-foreground">
                    {{ $project['year'] }} • {{ implode(' • ', $project['tags']) }}
                </span>
            </button>
        @endforeach
    </div>
</section>
