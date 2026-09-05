## Ringkasan
- Saya akan menginjeksi seluruh kode ke dalam project Anda secara otomatis: model, migration, Filament Resources, Livewire pages, layout Blade, routing, dan contoh view.
- Hasilnya: website Portfolio SPA modern, responsif, tanpa reload penuh berkat `wire:navigate`, lengkap dengan Admin Panel untuk CRUD seluruh konten.

## Fitur Lengkap
- Konten dinamis: Projects, Services, Skills, Experience, Posts (Blog), Messages (Contact).
- Global Settings: nama, jabatan, bio singkat, foto profil, social links (dikelola via Filament) untuk mengisi Home & footer.
- Portfolio: grid + filter kategori, gambar, link proyek, pagination.
- Blog: daftar artikel dengan pagination + halaman detail `/blog/{slug}` yang tetap SPA.
- Skills: progress bar berbasis Tailwind.
- Experience: timeline vertikal responsif.
- Contact: form simpan pesan ke DB + kirim email ke admin, rate limit & honeypot sederhana anti‑spam.
- Slug otomatis dari title (Project & Post).
- Upload gambar (Project/Post) dengan `FileUpload`, tersaji via `Storage::url`.
- SEO meta partial (title/description per halaman), favicon, basic open graph.
- Dark mode toggle (persist di `localStorage`).
- Navbar responsif (hamburger di mobile) dengan semua link menggunakan `wire:navigate`.

## Struktur File yang Akan Dibuat/Diedit
- `.env`: konfigurasi SQLite (`DB_CONNECTION=sqlite`, `DB_DATABASE=database/database.sqlite`).
- `database/migrations/*`: tabel untuk Project, Service, Skill, Experience, Post, Message, Settings.
- `app/Models/*`: model beserta `$fillable` dan casts (tanggal, dsb.).
- `app/Filament/Resources/*`: Resources CRUD untuk semua model, form menggunakan `TextInput`, `Textarea`, `RichEditor`, `FileUpload`, `DatePicker`, `Select`, termasuk auto‑slug & upload.
- `app/Livewire/Pages/*`: 8 halaman utama (Home, About, Services, Portfolio, Skills, Experience, Blog, Contact) + `BlogShow` untuk detail.
- `resources/views/components/layouts/app.blade.php`: layout utama dengan Tailwind CDN, navbar SPA, dark mode toggle.
- `resources/views/livewire/pages/*`: Blade views untuk tiap halaman, termasuk contoh profesional untuk Home & Portfolio.
- `resources/views/components/meta.blade.php`: partial untuk SEO meta.
- `routes/web.php`: route ke komponen Livewire dengan nama rute sesuai menu + rute detail blog.
- `app/Providers/AppServiceProvider.php`: set `DB::statement('PRAGMA foreign_keys=ON')` saat SQLite (opsional) & view composers untuk meta.
- `app/Http/Middleware/ThrottleContact.php`: rate limit untuk submit contact.
- `app/Mail/ContactMessageMail.php`: email notifikasi untuk pesan masuk.

## Penyesuaian Admin Panel (Filament v3)
- Install & register panel `/admin`.
- Resources dengan:
  - ProjectResource: title, slug (auto), description (RichEditor), image (FileUpload), url, category (Select).
  - ServiceResource: title, icon, description.
  - SkillResource: name, proficiency_level (slider 0‑100).
  - ExperienceResource: company, role, start_date, end_date, description.
  - PostResource: title, slug (auto), content (RichEditor), image.
  - MessageResource: hanya List/View (read‑only), tanpa create/edit.
  - SettingResource: nama, headline, bio, avatar (FileUpload), social links.
- Global search diatur via `$recordTitleAttribute`.

## SPA Frontend
- Navbar semua link memakai `wire:navigate`.
- Home: hero dengan foto, CTA, statistik kecil, data dari Settings.
- Portfolio: filter kategori, grid responsif `grid-cols-1 sm:grid-cols-2 lg:grid-cols-3`, hover effects.
- Blog: list dengan pagination + komponen `BlogShow` untuk detail.
- Contact: validasi + submit simpan ke DB + email; middleware throttle + honeypot field tersembunyi.
- Dark mode toggle: tombol yang mengganti kelas `dark` pada `html` dan menyimpan preferensi.

## Validasi & Seed
- Seeder minimal: beberapa Projects/Posts/Skills/Experience untuk uji UI.
- Jalankan `php artisan storage:link` agar gambar terposisikan benar.
- Uji SPA: klik semua menu dan pastikan navigasi tanpa reload penuh.

## Perintah yang Akan Saya Jalankan
- `composer require livewire/livewire:"^3.0"`
- `composer require filament/filament:"^3.3" -W`
- `php artisan filament:install --panels`
- `php artisan make:filament-user`
- `php artisan make:model <Model> -m` untuk semua model.
- `php artisan migrate`
- `php artisan storage:link`
- `php artisan make:livewire pages.<name>` untuk 8 halaman + `pages.blog-show`.
- `php artisan make:filament-resource <Model> --generate`
- `php artisan make:mail ContactMessageMail`
- `php artisan make:middleware ThrottleContact`

## Catatan Teknis
- Tailwind via CDN pada frontend publik, Filament memakai asetnya sendiri.
- Disk upload default `public`; untuk produksi bisa ganti ke S3 privat.
- Email menggunakan driver `.env` sesuai lingkungan lokal Anda.

## Setelah Anda Konfirmasi
- Saya akan langsung menulis semua file, menjalankan perintah di atas di project Anda, mengisi contoh konten, dan memverifikasi hasil (frontend + admin) berjalan baik.

Silakan konfirmasi untuk memulai eksekusi otomatis di project Anda.