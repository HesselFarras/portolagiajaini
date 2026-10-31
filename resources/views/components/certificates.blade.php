<section id="sertifikat" class="scroll-mt-24">
    <div class="flex items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold tracking-tight">Certificates</h2>
            <p class="mt-1 text-sm text-muted-foreground">Selected certificates and completed courses</p>
        </div>
    </div>

    @php
        $certificates = collect(config('portfolio.certificates', []));
    @endphp

    <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($certificates->take(3) as $certificate)
            <article class="overflow-hidden rounded-lg border border-border bg-secondary/50 transition-colors hover:bg-accent/70">
                <button
                    type="button"
                    data-certificate-preview
                    data-certificate-title="{{ $certificate['title'] }}"
                    data-certificate-image="{{ !empty($certificate['image']) ? asset($certificate['image']) : '' }}"
                    class="group relative block w-full aspect-[1.6/1] overflow-hidden bg-gradient-to-br from-primary/30 via-card to-secondary p-4 text-left"
                    aria-label="Lihat preview {{ $certificate['title'] }}"
                >
                    @if (!empty($certificate['image']))
                        <img
                            src="{{ asset($certificate['image']) }}"
                            alt="Sertifikat {{ $certificate['title'] }}"
                            loading="lazy"
                            class="h-full w-full rounded border border-white/20 object-cover"
                        >
                    @else
                        <div class="flex h-full flex-col justify-between rounded border border-white/20 bg-card/90 p-4 shadow-lg">
                            <div class="flex items-center justify-between text-[10px] font-bold uppercase tracking-widest text-primary">
                                <span>Certificate</span>
                                <x-icon name="badge-check" class="size-5" />
                            </div>
                            <div>
                                <p class="text-xs font-bold text-foreground/60">Certificate of Completion</p>
                                <p class="mt-1 text-sm font-black leading-5">{{ $certificate['title'] }}</p>
                            </div>
                            <p class="text-[10px] font-semibold text-muted-foreground">{{ $certificate['year'] }} • Hessel Farras</p>
                        </div>
                    @endif
                    <span class="absolute bottom-3 right-3 rounded-full bg-black/60 px-3 py-1 text-[10px] font-bold text-white opacity-0 transition-opacity group-hover:opacity-100">View full preview</span>
                </button>
                <div class="flex items-center justify-between gap-3 p-4">
                    <div class="min-w-0">
                        <h3 class="truncate text-sm font-bold">{{ $certificate['title'] }}</h3>
                        <p class="mt-1 text-xs font-medium text-muted-foreground">Issued {{ $certificate['year'] }}</p>
                    </div>
                    <a
                        href="{{ $certificate['url'] }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="shrink-0 text-xs font-bold text-primary transition-colors hover:text-foreground"
                    >
                        View full
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </article>
        @endforeach
    </div>

    @if ($certificates->skip(3)->isNotEmpty())
        <div id="all-certificates" class="mt-3 grid max-h-0 grid-cols-1 gap-3 overflow-hidden opacity-0 transition-[max-height,opacity] duration-500 ease-out sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($certificates->skip(3) as $certificate)
                <article class="overflow-hidden rounded-lg border border-border bg-secondary/50 transition-colors hover:bg-accent/70">
                    <button type="button" data-certificate-preview data-certificate-title="{{ $certificate['title'] }}" data-certificate-image="{{ !empty($certificate['image']) ? asset($certificate['image']) : '' }}" class="group relative block aspect-[1.6/1] w-full overflow-hidden bg-gradient-to-br from-primary/30 via-card to-secondary p-4 text-left" aria-label="Lihat preview {{ $certificate['title'] }}">
                        @if (!empty($certificate['image']))
                            <img src="{{ asset($certificate['image']) }}" alt="Sertifikat {{ $certificate['title'] }}" loading="lazy" class="h-full w-full rounded border border-white/20 object-cover">
                        @else
                            <span class="flex h-full flex-col justify-between rounded border border-white/20 bg-card/90 p-4 shadow-lg">
                                <span class="text-xs font-bold uppercase tracking-widest text-primary">Certificate</span>
                                <span class="text-sm font-black leading-5">{{ $certificate['title'] }}</span>
                                <span class="text-[10px] font-semibold text-muted-foreground">{{ $certificate['year'] }} • Hessel Farras</span>
                            </span>
                        @endif
                    </button>
                    <div class="flex items-center justify-between gap-3 p-4">
                        <div class="min-w-0"><h3 class="truncate text-sm font-bold">{{ $certificate['title'] }}</h3><p class="mt-1 text-xs font-medium text-muted-foreground">Issued {{ $certificate['year'] }}</p></div>
                        <a href="{{ $certificate['url'] }}" target="_blank" rel="noopener noreferrer" class="shrink-0 text-xs font-bold text-primary">View full ↗</a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="flex justify-center">
            <button type="button" data-certificates-toggle class="mt-5 rounded-full border border-border px-5 py-2.5 text-sm font-bold transition-colors hover:bg-accent">
            View All Certificates
            </button>
        </div>
    @endif
</section>
