# Audio Setup

Portfolio menggunakan simulasi audio untuk project secara default.

## Menambahkan Audio Asli

1. Letakkan file `.mp3` di folder `public/audio/`:

```text
public/audio/skillink.mp3
public/audio/savvy.mp3
public/audio/voting-duta.mp3
public/audio/sdn-ciledug-barat.mp3
public/audio/clauve.mp3
public/audio/smkletris2.mp3
public/audio/travelin.mp3
```

2. Update `config/portfolio.php`, tambahkan field `audio`:

```php
'projects' => [
    [
        'id' => 'skillink',
        'title' => 'Skillink',
        'audio' => 'audio/skillink.mp3',  // tambahkan ini
        // ... field lain
    ],
],
```

3. Player otomatis pakai file audio. Jika file tidak ada atau gagal load, player pakai simulasi timer.

## Format Audio

- Format: `.mp3` (paling kompatibel)
- Bitrate: 128-192 kbps
- Ukuran: < 5MB per file

Player mendukung fallback otomatis ke simulasi jika audio gagal.