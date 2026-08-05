@php
    $tileClasses = [
        'green' => 'bg-tile-green',
        'rust' => 'bg-tile-rust',
        'gold' => 'bg-tile-gold',
        'berry' => 'bg-tile-berry',
        'iris' => 'bg-tile-iris',
        'teal' => 'bg-tile-teal',
    ];
    $iconNames = [
        'code' => 'code-2',
        'server' => 'server',
        'smartphone' => 'smartphone',
        'palette' => 'palette',
        'cloud' => 'cloud',
        'chart' => 'bar-chart-3',
    ];
@endphp

<section id="keahlian" class="scroll-mt-24">
    <h2 class="text-2xl font-bold tracking-tight">Skills</h2>
    <p class="mt-1 text-sm text-muted-foreground">
        Skills and technologies that I have mastered and used in my projects
    </p>

    <div class="mt-4 grid grid-cols-2 gap-3 md:grid-cols-3">
        @foreach (config('portfolio.skills', []) as $skill)
            <div class="relative h-28 overflow-hidden rounded-lg p-4 transition-transform hover:scale-[1.02] md:h-32 {{ $tileClasses[$skill['tile']] ?? 'bg-tile-green' }}">
                <p class="text-lg font-extrabold text-tile-foreground">{{ $skill['name'] }}</p>
                <p class="mt-1 max-w-[75%] text-xs font-medium leading-relaxed text-tile-foreground/75">
                    {{ $skill['detail'] }}
                </p>
                <!-- resources/views/components/skill-tiles.blade.php -->
                <x-icon
                    :name="$iconNames[$skill['icon'] ?? ''] ?? 'code-2'"
                    class="absolute -bottom-4 -right-4 size-24 rotate-12 text-tile-foreground opacity-25"
                />
            </div>
        @endforeach
    </div>
</section>
