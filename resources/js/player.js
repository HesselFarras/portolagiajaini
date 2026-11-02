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
const audio = new Audio();
audio.preload = "metadata";
let projectGallery = [];
let projectGalleryIndex = 0;
audio.volume = Number(localStorage.getItem("portfolio-volume") ?? 0.7);

// ponytail: Web Audio API click sound, zero dependencies
function openProjectModal(id) {
    const project = (window.__PROJECTS ?? []).find((item) => item.id === id);
    const modal = document.getElementById("project-modal");
    if (!project || !modal) return;

    projectGallery = [project.cover, ...(project.screenshots ?? [])];
    projectGalleryIndex = 0;
    renderProjectGallery(project.title);

    document.getElementById("project-modal-cover").alt = `Cover ${project.title}`;
    document.getElementById("project-modal-title").textContent = project.title;
    document.getElementById("project-modal-tagline").textContent = project.tagline;
    document.getElementById("project-modal-meta").textContent = `${project.year} • ${project.plays} plays • ${project.duration}`;
    document.getElementById("project-modal-description").textContent = project.description;

    const demoButton = document.getElementById("project-modal-demo");
    const githubButton = document.getElementById("project-modal-github");
    const links = document.getElementById("project-modal-links");

    demoButton.href = project.demo ?? "#";
    githubButton.href = project.github ?? "#";
    demoButton.classList.toggle("hidden", !project.demo);
    githubButton.classList.toggle("hidden", !project.github);
    links.classList.toggle("hidden", !project.demo && !project.github);

    const tags = document.getElementById("project-modal-tags");
    tags.replaceChildren(...project.tags.map((tag) => {
        const badge = document.createElement("span");
        badge.className = "rounded-full bg-secondary px-3 py-1 text-xs font-semibold";
        badge.textContent = tag;
        return badge;
    }));

    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.classList.add("overflow-hidden");
}

function renderProjectGallery(title) {
    const image = document.getElementById("project-modal-cover");
    const thumbs = document.getElementById("project-gallery-thumbs");
    const previous = document.querySelector("[data-project-gallery-prev]");
    const nextButton = document.querySelector("[data-project-gallery-next]");
    const current = projectGallery[projectGalleryIndex];

    if (!current) return;
    image.src = current;
    image.alt = `${title} screenshot ${projectGalleryIndex + 1}`;
    image.onclick = () => window.open(current, "_blank", "noopener,noreferrer");
    previous?.classList.toggle("hidden", projectGallery.length < 2);
    nextButton?.classList.toggle("hidden", projectGallery.length < 2);
    thumbs.replaceChildren(...projectGallery.map((src, index) => {
        const thumb = document.createElement("button");
        thumb.type = "button";
        thumb.className = `size-16 shrink-0 overflow-hidden rounded-lg border-2 ${index === projectGalleryIndex ? "border-primary" : "border-white/30"}`;
        thumb.innerHTML = `<img src="${src}" alt="Screenshot ${index + 1}" class="h-full w-full object-cover">`;
        thumb.addEventListener("click", () => {
            projectGalleryIndex = index;
            renderProjectGallery(title);
        });
        return thumb;
    }));
}

function openCertificateModal(button) {
    const modal = document.getElementById("certificate-modal");
    const image = document.getElementById("certificate-modal-image");
    const placeholder = document.getElementById("certificate-modal-placeholder");
    const title = button.dataset.certificateTitle;
    const imageUrl = button.dataset.certificateImage;

    document.getElementById("certificate-modal-title").textContent = title;
    document.getElementById("certificate-modal-placeholder-title").textContent = title;
    image.alt = `Sertifikat ${title}`;
    image.src = imageUrl;
    image.classList.toggle("hidden", !imageUrl);
    placeholder.classList.toggle("hidden", Boolean(imageUrl));
    placeholder.classList.toggle("flex", !imageUrl);
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.classList.add("overflow-hidden");
}

function closeCertificateModal() {
    const modal = document.getElementById("certificate-modal");
    if (!modal) return;
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.classList.remove("overflow-hidden");
}

function closeProjectModal() {
    const modal = document.getElementById("project-modal");
    if (!modal) return;
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.classList.remove("overflow-hidden");
}

function playClickSound() {
    try {
        const audioContext = new (window.AudioContext || window.webkitAudioContext)();
        const oscillator = audioContext.createOscillator();
        const gainNode = audioContext.createGain();
        
        oscillator.connect(gainNode);
        gainNode.connect(audioContext.destination);
        
        oscillator.frequency.value = 800;
        oscillator.type = 'sine';
        
        gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.1);
        
        oscillator.start(audioContext.currentTime);
        oscillator.stop(audioContext.currentTime + 0.1);
    } catch (e) {
        // silent fail jika browser tidak support
    }
}

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
    const audioDuration = Number.isFinite(audio.duration) ? audio.duration : 0;
    return audio.src && audioDuration > 0
        ? audioDuration
        : toSeconds(tracks[state.index]?.duration ?? "0:00");
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
    const current = tracks[state.index];
    
    // Pakai audio asli jika path tersedia
    if (current?.audio) {
        audio.src = current.audio;
        audio.currentTime = state.progress;
        audio.onloadedmetadata = () => {
            setText("#pb-duration", toClock(audio.duration));
            renderProgress();
        };
        audio.play().catch(() => {
            // Fallback ke simulasi jika audio gagal
            startSimulatedTimer();
        });
        
        // Update progress dari audio
        audio.ontimeupdate = () => {
            state.progress = Math.floor(audio.currentTime);
            renderProgress();
        };
        
        audio.onended = () => {
            next();
        };
    } else {
        // Simulasi timer
        startSimulatedTimer();
    }
}

function startSimulatedTimer() {
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
    audio.pause();
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
    const current = tracks[state.index];
    if (current?.audio && audio.src) {
        audio.currentTime = state.progress;
    }
    renderProgress();
}

export function initPlayer() {
    if (!tracks.length) return;

    document.querySelectorAll("[data-track-row]").forEach((row) => {
        row.addEventListener("click", () => {
            playClickSound();
            playAt(Number(row.dataset.trackRow));
            openProjectModal(row.dataset.projectId);
        });
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

    document.querySelectorAll("[data-project-modal-close]").forEach((btn) => btn.addEventListener("click", closeProjectModal));
    document.querySelector("[data-project-gallery-prev]")?.addEventListener("click", () => {
        projectGalleryIndex = (projectGalleryIndex - 1 + projectGallery.length) % projectGallery.length;
        renderProjectGallery((window.__PROJECTS ?? [])[state.index]?.title ?? "Project");
    });
    document.querySelector("[data-project-gallery-next]")?.addEventListener("click", () => {
        projectGalleryIndex = (projectGalleryIndex + 1) % projectGallery.length;
        renderProjectGallery((window.__PROJECTS ?? [])[state.index]?.title ?? "Project");
    });
    document.querySelectorAll("[data-certificate-preview]").forEach((btn) => btn.addEventListener("click", () => openCertificateModal(btn)));
    document.querySelectorAll("[data-certificates-toggle]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const allCertificates = document.getElementById("all-certificates");
            if (!allCertificates) return;
            const expanded = !allCertificates.classList.contains("max-h-0");
            allCertificates.classList.toggle("max-h-0", expanded);
            allCertificates.classList.toggle("max-h-[5000px]", !expanded);
            allCertificates.classList.toggle("opacity-0", expanded);
            allCertificates.classList.toggle("opacity-100", !expanded);
            btn.textContent = expanded ? "View All Certificates" : "Show Less";
        });
    });
    document.querySelectorAll("[data-certificate-modal-close]").forEach((btn) => btn.addEventListener("click", closeCertificateModal));
    document.getElementById("certificate-modal")?.addEventListener("click", (event) => {
        if (event.target.id === "certificate-modal") closeCertificateModal();
    });
    document.getElementById("project-modal")?.addEventListener("click", (event) => {
        if (event.target.id === "project-modal") closeProjectModal();
    });
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeProjectModal();
            closeCertificateModal();
        }
    });

    document.querySelectorAll("[data-like]").forEach((btn) => {
        btn.addEventListener("click", () => {
            const liked = btn.classList.toggle("text-primary");
            btn.classList.toggle("text-muted-foreground", !liked);
            btn.querySelector("svg")?.classList.toggle("fill-current", liked);
        });
    });

    const volumeControl = document.querySelector("[data-player-volume]");
    const muteButton = document.querySelector("[data-player-mute]");
    const volumeIcon = document.querySelector("[data-volume-icon]");

    if (volumeControl) {
        volumeControl.value = String(Math.round(audio.volume * 100));
        volumeControl.addEventListener("input", () => {
            audio.volume = Number(volumeControl.value) / 100;
            localStorage.setItem("portfolio-volume", String(audio.volume));
            audio.muted = audio.volume === 0;
            volumeIcon?.setAttribute("data-lucide", audio.muted ? "volume-x" : "volume-2");
        });
    }

    muteButton?.addEventListener("click", () => {
        audio.muted = !audio.muted;
        muteButton.setAttribute("aria-label", audio.muted ? "Unmute" : "Mute");
        volumeIcon?.setAttribute("data-lucide", audio.muted ? "volume-x" : "volume-2");
    });

    render();
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initPlayer);
} else {
    initPlayer();
}
