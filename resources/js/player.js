/**
 * Player bar portofolio — vanilla JS, tanpa dependency.
 *
 * Kontrak atribut data (lihat komponen Blade):
 *   window.__TRACKS            array { title, tagline, duration, cover } (disuntikkan home.blade.php)
 *   [data-track-row="i"]       baris/kartu yang bisa diklik untuk memutar trek ke-i
 *   [data-row-number]          nomor urut (disembunyikan saat trek aktif)
 *   [data-row-eq]              pembungkus equalizer (ditampilkan saat trek aktif)
 *   [data-row-title]           judul yang berubah hijau saat aktif
 *   [data-player-toggle]       tombol play/pause (berisi [data-icon-play] & [data-icon-pause])
 *   [data-player-next] / [data-player-prev]
 *   [data-like]                tombol hati
 *   #pb-cover #pb-title #pb-tagline #pb-duration #pb-current-time
 *   #pb-progress-track         area klik untuk seek
 *   #pb-progress-fill          lebar progress
 */

const tracks = window.__TRACKS ?? [];

const state = { index: 0, playing: false, progress: 0 };
let timer = null;

function toSeconds(duration) {
    const [m = 0, s = 0] = String(duration).split(":").map(Number);
    return m * 60 + s;
}

function toClock(total) {
    const m = Math.floor(total / 60);
    const s = Math.floor(total % 60);
    return `${m}:${String(s).padStart(2, "0")}`;
}

function duration() {
    return toSeconds(tracks[state.index]?.duration ?? "0:00");
}

function setText(selector, text) {
    const el = document.querySelector(selector);
    if (el) el.textContent = text;
}

function renderProgress() {
    const d = duration() || 1;
    const fill = document.getElementById("pb-progress-fill");
    const track = document.getElementById("pb-progress-track");
    if (fill) fill.style.width = `${(state.progress / d) * 100}%`;
    if (track) {
        track.setAttribute("aria-valuemax", String(d));
        track.setAttribute("aria-valuenow", String(state.progress));
    }
    setText("#pb-current-time", toClock(state.progress));
}

function render() {
    const current = tracks[state.index];
    if (!current) return;

    const cover = document.getElementById("pb-cover");
    if (cover) {
        cover.src = current.cover;
        cover.alt = `Sampul ${current.title}`;
    }
    setText("#pb-title", current.title);
    setText("#pb-tagline", current.tagline);
    setText("#pb-duration", current.duration);

    document.querySelectorAll("[data-player-toggle]").forEach((btn) => {
        btn.querySelector("[data-icon-play]")?.classList.toggle("hidden", state.playing);
        btn.querySelector("[data-icon-pause]")?.classList.toggle("hidden", !state.playing);
        btn.setAttribute("aria-label", state.playing ? "Jeda" : "Putar");
    });

    document.querySelectorAll("[data-track-row]").forEach((row) => {
        const isCurrent = Number(row.dataset.trackRow) === state.index;
        row.querySelectorAll("[data-row-title]").forEach((el) => el.classList.toggle("text-primary", isCurrent));
        row.querySelectorAll("[data-row-number]").forEach((el) => el.classList.toggle("hidden", isCurrent));
        row.querySelectorAll("[data-row-eq]").forEach((el) => {
            el.classList.toggle("hidden", !isCurrent);
            el.querySelectorAll(".eq-bar").forEach((bar) => {
                bar.style.animationPlayState = state.playing ? "running" : "paused";
            });
        });
    });

    renderProgress();
}

function startTimer() {
    stopTimer();
    timer = window.setInterval(() => {
        if (state.progress + 1 >= duration()) {
            next();
        } else {
            state.progress += 1;
            renderProgress();
        }
    }, 1000);
}

function stopTimer() {
    if (timer !== null) {
        window.clearInterval(timer);
        timer = null;
    }
}

function playAt(index) {
    if (!tracks.length) return;
    if (index === state.index) {
        toggle();
        return;
    }
    state.index = index;
    state.progress = 0;
    state.playing = true;
    startTimer();
    render();
}

function toggle() {
    state.playing = !state.playing;
    if (state.playing) {
        startTimer();
    } else {
        stopTimer();
    }
    render();
}

function next() {
    if (!tracks.length) return;
    state.index = (state.index + 1) % tracks.length;
    state.progress = 0;
    render();
}

function prev() {
    if (!tracks.length) return;
    state.index = (state.index - 1 + tracks.length) % tracks.length;
    state.progress = 0;
    render();
}

function seek(seconds) {
    state.progress = Math.max(0, Math.min(seconds, duration()));
    renderProgress();
}

export function initPlayer() {
    if (!tracks.length) return;

    document.querySelectorAll("[data-track-row]").forEach((row) => {
        row.addEventListener("click", () => playAt(Number(row.dataset.trackRow)));
    });
    document.querySelectorAll("[data-player-toggle]").forEach((btn) => btn.addEventListener("click", toggle));
    document.querySelectorAll("[data-player-next]").forEach((btn) => btn.addEventListener("click", next));
    document.querySelectorAll("[data-player-prev]").forEach((btn) => btn.addEventListener("click", prev));

    const bar = document.getElementById("pb-progress-track");
    bar?.addEventListener("click", (event) => {
        const rect = bar.getBoundingClientRect();
        const ratio = Math.min(Math.max((event.clientX - rect.left) / rect.width, 0), 1);
        seek(Math.round(ratio * duration()));
    });

    document.querySelectorAll("[data-like]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const liked = btn.classList.toggle("text-primary");
            btn.classList.toggle("text-muted-foreground", !liked);
            btn.querySelector("svg")?.classList.toggle("fill-current", liked);
        });
    });

    render();
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initPlayer);
} else {
    initPlayer();
}
