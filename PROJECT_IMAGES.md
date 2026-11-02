# Project Screenshots

Taruh screenshot tiap project di folder masing-masing:

```text
public/images/projects/
├── skillink/
├── Savvy/
├── voting-duta/
├── sdn-ciledug-barat/
├── clauve/
├── smkletris2/
└── travelin/
```

Contoh file:

```text
public/images/projects/skillink/dashboard.png
public/images/projects/skillink/projects.png
public/images/projects/skillink/profile.png
```

Daftarkan path di `config/portfolio.php`:

```php
'screenshots' => [
    'images/projects/skillink/dashboard.png',
    'images/projects/skillink/projects.png',
    'images/projects/skillink/profile.png',
],
```

Klik project akan menampilkan cover + screenshot gallery. Thumbnail dan tombol panah bisa dipakai untuk berpindah gambar.
