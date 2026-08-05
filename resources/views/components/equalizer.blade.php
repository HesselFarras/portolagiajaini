<script src="https://cdn.tailwindcss.com"></script>

@props(['paused' => false])

<span {{ $attributes->merge(['class' => 'flex h-3.5 items-end gap-[2.5px]']) }} aria-hidden="true">
    @for ($i = 0; $i < 3; $i++)
        <span
            class="eq-bar h-full w-[3px] origin-bottom rounded-full bg-primary animate-eq"
            style="animation-delay: {{ $i * 0.22 }}s; animation-play-state: {{ $paused ? 'paused' : 'running' }}"
        ></span>
    @endfor
</span>
