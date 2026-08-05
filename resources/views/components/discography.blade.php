

<section id="pengalaman" class="scroll-mt-24">
    <h2 class="text-2xl font-bold tracking-tight">Diskografi Karier</h2>
    <p class="mt-1 text-sm text-muted-foreground">
        Album-album yang membentuk perjalanan ini
    </p>

    <div class="mt-4 grid gap-4 md:grid-cols-3">
        @foreach (config('portfolio.experiences', []) as $exp)
            <article class="overflow-hidden rounded-lg bg-secondary/50 transition-colors hover:bg-accent/50">
                <div class="flex h-24 items-end justify-between bg-gradient-to-br from-primary/40 via-primary/10 to-transparent p-4">
                    <span class="text-2xl font-black tracking-tight">{{ $exp['year'] }}</span>
                    <span class="rounded-full bg-background/60 px-2.5 py-1 text-[11px] font-bold">
                        {{ $exp['period'] }}
                    </span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold">{{ $exp['role'] }}</h3>
                    <p class="mt-0.5 text-sm text-muted-foreground">{{ $exp['company'] }}</p>
                    <ul class="mt-3 space-y-1.5">
                        @foreach ($exp['points'] as $point)
                            <li class="flex gap-2 text-xs leading-relaxed text-muted-foreground">
                                <span class="text-primary">•</span>
                                {{ $point }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </article>
        @endforeach
    </div>
</section>
