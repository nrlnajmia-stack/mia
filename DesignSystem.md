# Design System
## Portofolio — "Pixel Tower" (Tema Pixel ala Disney Rapunzel)

| Atribut | Detail |
|---|---|
| Nama Produk | Portofolio |
| Tema Visual | Pixel Art, terinspirasi Disney Rapunzel (Tangled) |
| Vibe Utama | Bersih, modern, segar |
| Basis Pattern | Vercel Design System / Material 3 / Tailwind UI |
| Font Heading | Outfit |
| Font Sub-heading | TT Commons Pro |
| Versi Dokumen | 1.0 |

---

## 1. Overview & Tipografi

### 1.1 Overview Brand
Portofolio ini mengangkat nuansa **pixel art bergaya Disney Rapunzel (Tangled)** — dunia menara, cahaya lampion emas, bunga golden-hour, dan sihir rambut ajaib — tetapi diterjemahkan ke dalam bahasa visual web modern yang **bersih, modern, dan segar**, bukan pixel art kasar/retro-game penuh noise. Pendekatannya: struktur layout mengikuti prinsip *clean-grid* ala Vercel/Tailwind UI (banyak whitespace, grid presisi, shadow lembut, tipografi tegas), sementara elemen pixel-art hanya muncul sebagai **aksen dekoratif bertarget** — ikon kecil pixel (mahkota, lentera, bunga, jarum rajut), border pixel tipis pada kartu unggulan, dan micro-illustration — bukan mendominasi seluruh layout.

Palet warna diambil dari dunia Rapunzel: **ungu magenta (gaun & malam menara)**, **emas keunguan/kuning hangat (rambut & cahaya lentera)**, dan **lavender-pink lembut (bunga & langit senja)**. Kombinasi ini dipilih agar produk terasa personal dan playful tanpa kehilangan kredibilitas profesional — cocok untuk portofolio yang menampilkan sisi teknis (developer) sekaligus sisi kreatif (UI/UX designer).

**Filosofi 3 lapis:**
1. **Fondasi bersih (Vercel-like):** grid presisi, surface netral, shadow lembut, radius konsisten.
2. **Kehangatan Rapunzel:** palet ungu-emas-lavender, gradient "golden hour lentera".
3. **Sentuhan pixel:** dipakai spesifik pada ikon, badge, border dekoratif, dan komponen khas (lihat Bab 5) — bukan pada teks atau layout inti, agar tetap readable dan modern.

### 1.2 Font Family

| Peran | Font | Fallback Stack | Kegunaan |
|---|---|---|---|
| **Font 1 — Fungsional** | **TT Commons Pro** | `'TT Commons Pro', 'Inter', system-ui, sans-serif` | Body text, UI label, tombol, form, navigasi, caption — seluruh teks fungsional yang butuh keterbacaan tinggi di ukuran kecil. |
| **Font 2 — Dekoratif/Editorial** | **Outfit** | `'Outfit', 'Inter', system-ui, sans-serif` | Hero headline, judul section besar, tagline, angka statistik besar — elemen yang butuh kesan modern, geometris, dan tegas. |

> Catatan implementasi: sesuai catatan proyek, **Outfit** dipakai untuk *heading* (judul besar/hero) karena bentuknya geometris-modern cocok untuk statement visual, sedangkan **TT Commons Pro** dipakai untuk *sub-heading dan seluruh teks fungsional* karena karakter humanis-nya lebih nyaman dibaca panjang.

### 1.3 Hierarki Tipografi

| Token | Ukuran (px / rem) | Weight | Line-height | Letter-spacing | Font | Kegunaan |
|---|---|---|---|---|---|---|
| `display-xl` | 64px / 4rem | 700 (Bold) | 1.05 | -0.02em | Outfit | Hero headline utama di Beranda |
| `display-lg` | 48px / 3rem | 700 (Bold) | 1.1 | -0.02em | Outfit | Judul section besar (misal "Proyek Web Development") |
| `display-md` | 36px / 2.25rem | 600 (SemiBold) | 1.15 | -0.01em | Outfit | Sub-hero, angka statistik besar |
| `heading-lg` | 28px / 1.75rem | 600 (SemiBold) | 1.2 | -0.01em | TT Commons Pro | Judul card besar, judul studi kasus |
| `heading-md` | 22px / 1.375rem | 600 (SemiBold) | 1.25 | 0em | TT Commons Pro | Sub-heading section, judul card standar |
| `heading-sm` | 18px / 1.125rem | 600 (SemiBold) | 1.3 | 0em | TT Commons Pro | Judul komponen kecil, label kategori skill |
| `body-lg` | 18px / 1.125rem | 400 (Regular) | 1.6 | 0em | TT Commons Pro | Paragraf pembuka, deskripsi hero |
| `body-md` | 16px / 1rem | 400 (Regular) | 1.6 | 0em | TT Commons Pro | Paragraf standar, deskripsi card |
| `body-sm` | 14px / 0.875rem | 400 (Regular) | 1.5 | 0em | TT Commons Pro | Teks sekunder, meta info (tanggal, tag) |
| `button-md` | 16px / 1rem | 600 (SemiBold) | 1 | 0.01em | TT Commons Pro | Label tombol standar |
| `button-sm` | 14px / 0.875rem | 600 (SemiBold) | 1 | 0.01em | TT Commons Pro | Label tombol kecil, nav pill |
| `caption` | 12px / 0.75rem | 500 (Medium) | 1.4 | 0.02em | TT Commons Pro | Label form, timestamp, badge kecil |

### 1.4 Prinsip Tipografi — Do's & Don'ts

**Do's:**
- Gunakan **Outfit** hanya untuk elemen hero/statement besar (`display-*`) agar dampak visualnya tetap istimewa, bukan dipakai berulang di semua judul kecil.
- Terapkan **tracking negatif** (`-0.01em` hingga `-0.02em`) pada seluruh token `display-*` agar headline besar terasa rapat dan modern, bukan longgar/renggang.
- Gunakan **sentence case** (huruf kapital hanya di awal kalimat) untuk seluruh heading dan body, memberi kesan bersih dan tidak berteriak.
- Jaga line-height minimal `1.5` pada seluruh `body-*` untuk keterbacaan paragraf panjang (studi kasus, tentang saya).

**Don'ts:**
- Jangan gunakan **UPPERCASE** pada heading utama — kesan "berteriak" bertentangan dengan vibe bersih & segar; UPPERCASE hanya boleh dipakai pada `caption`/badge kecil dengan letter-spacing lebar (`0.05em`+).
- Jangan mencampur lebih dari 2 family font dalam satu komponen yang sama.
- Jangan menerapkan tracking negatif pada `body-*` atau `caption` — hanya untuk `display-*` dan `heading-lg`.
- Jangan gunakan weight di bawah 400 (Light/Thin) untuk teks di atas latar warna (on-primary) — kontras akan turun drastis.

---

## 2. Sistem Warna (Colors Token)

### 2.1 Brand & Aksen

| Token | Hex | Keterangan |
|---|---|---|
| `color-primary` | `#7C3AED` | Ungu magenta khas gaun Rapunzel — warna utama CTA, link aktif, ikon utama. |
| `color-primary-deep` | `#5B21B6` | Hover/active state dari primary — dipakai saat tombol ditekan/hover. |
| `color-primary-soft` | `#EDE4FB` | Soft highlight — background badge, hover ringan pada list item, selection state. |
| `color-accent-gold` | `#F5A524` | Emas hangat cahaya lentera/rambut Rapunzel — aksen sekunder, ikon bintang/sparkle, highlight angka statistik. |
| `color-accent-gold-deep` | `#C77C0E` | Hover state untuk elemen ber-aksen emas. |
| `color-accent-pink` | `#F472B6` | Lavender-pink bunga — aksen tersier untuk ilustrasi, dekorasi pixel, tag kategori kreatif (studi kasus UI/UX). |

### 2.2 Surface

| Token | Hex | Keterangan |
|---|---|---|
| `color-canvas` | `#FFFFFF` | Latar belakang utama halaman (section terang). |
| `color-canvas-soft` | `#FAF7FF` | Latar belakang alternatif section (nuansa ungu sangat muda), dipakai selang-seling antar section agar tidak monoton putih polos. |
| `color-surface-card` | `#FFFFFF` | Warna dasar kartu/modal di atas `canvas-soft`. |
| `color-surface-card-alt` | `#F4F0FC` | Kartu dengan aksen ungu sangat muda (untuk card "soft", lihat Bab 4.2). |
| `color-hairline` | `#E7E1F5` | Warna border/divider tipis antar elemen, garis pemisah section. |
| `color-hairline-strong` | `#D4CBEF` | Border lebih tegas untuk input focus/kartu unggulan. |

### 2.3 Teks

| Token | Hex | Keterangan |
|---|---|---|
| `color-ink` | `#1F1730` | Warna teks heading utama — hitam keunguan, bukan hitam murni, agar selaras palet brand. |
| `color-body` | `#4B4160` | Warna teks paragraf/body sekunder. |
| `color-mute` | `#8A82A3` | Teks redup — placeholder, meta info, caption, teks nonaktif. |
| `color-on-primary` | `#FFFFFF` | Warna teks di atas latar `color-primary`/`color-primary-deep`. |
| `color-on-gold` | `#2A1A00` | Warna teks di atas latar `color-accent-gold` (kontras lebih baik dengan gelap, bukan putih). |

### 2.4 Semantik & Status

| Token | Hex | Keterangan |
|---|---|---|
| `color-success` | `#16A34A` | Status berhasil — misal notifikasi "Pesan berhasil dikirim". |
| `color-success-soft` | `#DCFCE7` | Background badge/alert success. |
| `color-warning` | `#D97706` | Status peringatan/proses — misal validasi form belum lengkap. |
| `color-warning-soft` | `#FEF3C7` | Background badge/alert warning. |
| `color-error` | `#DC2626` | Status gagal/error — misal validasi email tidak valid. |
| `color-error-soft` | `#FEE2E2` | Background badge/alert error. |
| `color-info` | `#7C3AED` | Status informasi — menyatu dengan primary agar identitas brand tetap konsisten. |
| `color-info-soft` | `#EDE4FB` | Background badge/alert info. |

**Tabel Pemetaan Status "Kirim Pesan" (Aksi Utama Produk — Formulir Kontak)**

| Status Aksi | Token Warna | Ikon Pixel | Keterangan |
|---|---|---|---|
| Idle (belum submit) | `color-mute` | — | Tombol dalam state default. |
| Validating | `color-warning` + `color-warning-soft` | ⏳ ikon jam pasir pixel | Saat validasi client-side berjalan. |
| Sending | `color-info` + `color-info-soft` | ✉️ ikon amplop pixel beranimasi ringan | Saat request dikirim ke `contact-process.php`. |
| Success | `color-success` + `color-success-soft` | ✨ ikon bintang/sparkle pixel (sentuhan tema Rapunzel) | Pesan berhasil dikirim. |
| Error | `color-error` + `color-error-soft` | ⚠️ ikon peringatan pixel | Validasi gagal atau server error. |

### 2.5 Brand Gradient

```css
/* Gradient utama "Golden Hour Menara" — dipakai di hero background & CTA unggulan */
--gradient-brand: linear-gradient(135deg, #7C3AED 0%, #A855F7 45%, #F5A524 100%);

/* Gradient lembut untuk background section alternatif */
--gradient-soft: linear-gradient(180deg, #FAF7FF 0%, #F4F0FC 100%);

/* Radial glow — dipakai sebagai aksen dekoratif di belakang foto profil (efek "cahaya lentera") */
--gradient-glow: radial-gradient(circle at 50% 40%, rgba(245, 165, 36, 0.35) 0%, rgba(124, 58, 237, 0.15) 45%, transparent 70%);
```

---

## 3. Layout, Elevasi, & Bentuk

### 3.1 Sistem Spacing (basis kelipatan 4px)

| Token | Nilai | Kegunaan |
|---|---|---|
| `space-xxs` | 4px | Jarak ikon-label, gap internal terkecil |
| `space-xs` | 8px | Padding badge/chip, gap antar ikon |
| `space-sm` | 12px | Padding tombol kecil, gap form label-input |
| `space-md` | 16px | Padding standar card, gap antar elemen form |
| `space-lg` | 24px | Padding card besar, gap antar card dalam grid |
| `space-xl` | 32px | Margin antar sub-section |
| `space-2xl` | 48px | Margin atas/bawah section standar (mobile) |
| `space-3xl` | 64px | Margin atas/bawah section standar (desktop) |
| `space-4xl` | 96px | Jarak antar section besar (hero ke section berikutnya) |
| `space-5xl` / `section` | 128px | Jarak section pada layout desktop wide, memberi ruang napas ala Vercel |

### 3.2 Grid & Container

| Breakpoint | Lebar Viewport | Max-width Container | Kolom Grid |
|---|---|---|---|
| Mobile | < 640px | 100% (padding 16px) | 4 kolom |
| Tablet | 640px – 1024px | 688px | 8 kolom |
| Desktop | 1024px – 1440px | 1120px | 12 kolom |
| Wide | > 1440px | 1280px | 12 kolom (gutter lebih lebar) |

Gutter grid: `16px` (mobile), `24px` (tablet), `32px` (desktop/wide).

### 3.3 Elevasi & Bayangan (Elevation)

Menggunakan teknik **stacked shadow** (2 layer offset tipis) + **inset hairline ring** agar tepi kartu tetap tajam meski shadow lembut — ciri khas pendekatan Vercel/Material 3 modern.

| Level | Token | Definisi CSS | Kegunaan |
|---|---|---|---|
| 0 | `elevation-flat` | `box-shadow: none; ring: inset 0 0 0 1px var(--color-hairline);` | Section flat, background besar |
| 1 | `elevation-xs` | `0 1px 2px rgba(31,23,48,0.04), inset 0 0 0 1px var(--color-hairline)` | Input form, chip, badge |
| 2 | `elevation-sm` | `0 2px 4px rgba(31,23,48,0.06), 0 1px 2px rgba(31,23,48,0.04), inset 0 0 0 1px var(--color-hairline)` | Card list item, nav item |
| 3 | `elevation-md` | `0 4px 8px rgba(31,23,48,0.08), 0 2px 4px rgba(31,23,48,0.05), inset 0 0 0 1px var(--color-hairline)` | Card proyek/studi kasus standar |
| 4 | `elevation-lg` | `0 8px 16px rgba(31,23,48,0.10), 0 4px 8px rgba(31,23,48,0.06), inset 0 0 0 1px var(--color-hairline-strong)` | Card unggulan/hover state, dropdown |
| 5 | `elevation-modal` | `0 16px 32px rgba(31,23,48,0.16), 0 8px 16px rgba(31,23,48,0.08), inset 0 0 0 1px var(--color-hairline-strong)` | Modal window, popover besar |

### 3.4 Border Radius Scale

| Token | Nilai | Komponen Pencocokan |
|---|---|---|
| `radius-none` | 0px | Divider, garis section |
| `radius-sm` | 6px | Input kecil, chip, badge |
| `radius-md` | 10px | Tombol standar, input form, card kecil |
| `radius-lg` | 16px | Card proyek/studi kasus, modal |
| `radius-pill` | 999px | Tombol CTA marketing, nav pill, tag kategori |
| `radius-full` | 50% | Avatar/foto profil bulat, ikon lingkaran |

---

## 4. Spesifikasi Komponen UI Standar

### 4.1 Tombol (Buttons)

| Varian | Ukuran (H x Padding) | Radius | Warna Default | Hover | Active | Font Token |
|---|---|---|---|---|---|---|
| **Primary Marketing Pill** | H 48px, padding `12px 28px` | `radius-pill` | Background `gradient-brand`, teks `color-on-primary` | Background `color-primary-deep` solid, shadow `elevation-sm` | Scale 0.98, shadow `elevation-xs` | `button-md` |
| **Secondary Pill** | H 44px, padding `10px 24px` | `radius-pill` | Border 1.5px `color-primary`, teks `color-primary`, background transparan | Background `color-primary-soft` | Background `color-primary-soft` + border `color-primary-deep` | `button-md` |
| **Small Nav Button** | H 36px, padding `8px 16px` | `radius-md` | Teks `color-body`, background transparan | Background `color-canvas-soft` | Background `color-primary-soft`, teks `color-primary-deep` | `button-sm` |
| **Danger Button** | H 44px, padding `10px 24px` | `radius-md` | Background `color-error`, teks `color-on-primary` | Background darken 10% | Scale 0.98 | `button-md` |
| **Tab Ghost/Chips** | H 32px, padding `6px 14px` | `radius-pill` | Teks `color-mute`, background `color-canvas-soft` | Teks `color-primary-deep`, background `color-primary-soft` | Background `color-primary`, teks `color-on-primary` (state terpilih) | `button-sm` |

**Focus state (semua tombol):** ring `2px solid color-primary`, offset `2px`, mengikuti pola *focus-visible* aksesibel.

### 4.2 Kartu (Cards)

| Varian | Padding | Radius | Elevation | Border | Kegunaan |
|---|---|---|---|---|---|
| **Card Marketing** | 32px | `radius-lg` | `elevation-md`, hover naik ke `elevation-lg` | `color-hairline` | Hero card, highlight fitur |
| **Card Dashboard/Statistik** | 24px | `radius-md` | `elevation-sm` | `color-hairline` | Angka statistik (jumlah proyek, tahun pengalaman) |
| **Card List Item** | `16px 20px` | `radius-md` | `elevation-xs` | `color-hairline`, border-left 3px `color-accent-gold` saat aktif | Baris pengalaman organisasi (timeline) |
| **Card Soft** | 24px | `radius-lg` | `elevation-flat` (tanpa shadow) | Background `color-surface-card-alt`, tanpa border | Card skill/kategori tools, background ungu muda flat |

Semua card proyek/studi kasus menggunakan **thumbnail image** dengan `radius-lg` mengikuti radius card, rasio gambar `16:10`, dan overlay gradient tipis (`rgba(31,23,48,0.0) → rgba(31,23,48,0.25)`) di bagian bawah untuk keterbacaan label teknologi jika ditumpuk di atas gambar.

### 4.3 Form Input

| Elemen | Spesifikasi |
|---|---|
| **Input Teks Standar** | H 44px, padding `12px 16px`, `radius-md`, border 1px `color-hairline`, background `color-canvas`, font `body-md` |
| **Textarea** | Min-height 120px, padding `12px 16px`, `radius-md`, border 1px `color-hairline`, resize vertical only |
| **Dropdown Select** | H 44px, padding `12px 16px` (kanan +32px untuk ikon chevron pixel), `radius-md`, ikon chevron custom pixel-style |
| **Focus Ring** | Border berubah menjadi `color-primary`, tambahan outer ring `0 0 0 3px color-primary-soft` |
| **Label Input** | Token `caption`, warna `color-body`, margin-bottom `space-xs`, wajib disertai tanda `*` (warna `color-error`) untuk field wajib |
| **Pesan Error** | Token `caption`, warna `color-error`, margin-top `space-xxs`, disertai ikon kecil ⚠️ pixel di depan teks |
| **Pesan Sukses (validasi realtime)** | Token `caption`, warna `color-success`, ikon centang pixel |

### 4.4 Navigasi

| Komponen | Spesifikasi |
|---|---|
| **Sticky Navbar Atas** | H 72px (desktop) / 64px (mobile), background `color-canvas` dengan `backdrop-filter: blur(12px)` + opacity 90%, border-bottom 1px `color-hairline`, shadow muncul (`elevation-xs`) hanya setelah scroll > 8px |
| **Sidebar Navigasi** (opsional, untuk halaman detail proyek/studi kasus) | Lebar 260px, background `color-canvas-soft`, padding `24px 16px`, item menu dengan gap `space-xs` |
| **Item Menu — Default** | Teks `color-body`, `button-sm`, padding `10px 16px`, `radius-md` |
| **Item Menu — Hover** | Background `color-primary-soft`, teks `color-primary-deep` |
| **Item Menu — Active** | Background `gradient-brand` (versi 12% opacity) atau solid `color-primary-soft` + border-left 3px `color-primary`, teks `color-primary-deep` bold |
| **Footer Halaman** | Background `color-ink` (dark), teks `color-on-primary`/`color-mute` versi terang, padding vertikal `space-3xl`, ikon sosial dengan hover `color-accent-gold` |

### 4.5 Tabel Data & Modal

| Elemen | Spesifikasi |
|---|---|
| **Header Tabel** | Background `color-canvas-soft`, teks `caption` uppercase dengan letter-spacing `0.05em`, warna `color-mute`, padding `12px 16px` |
| **Cell Padding** | `14px 16px`, border-bottom 1px `color-hairline` |
| **Hover Row** | Background `color-primary-soft` (opacity 40%) |
| **Modal Window** | Max-width 560px, padding `32px`, `radius-lg`, `elevation-modal`, backdrop `rgba(31,23,48,0.4)` dengan blur 4px, animasi scale-in 0.2s ease-out |
| **Modal Header** | Judul token `heading-md`, tombol close pixel (ikon X 16x16 gaya pixel) di kanan atas |

---

## 5. Komponen Khusus & Unik Produk

Empat komponen berikut adalah ciri khas visual **Portofolio "Pixel Tower"** yang membedakannya dari portofolio generik:

### 5.1 Tower Progress Rail (Timeline Pengalaman Organisasi)
Pengganti timeline biasa — divisualisasikan sebagai **"menara"** vertikal berbentuk garis dengan node pixel berbentuk jendela kecil di setiap titik pengalaman, terinspirasi jendela menara Rapunzel.
- Garis vertikal: 3px, warna `gradient-brand` (vertikal).
- Node: kotak pixel 20x20px bergaya "jendela menara" (ikon pixel custom), warna `color-accent-gold` untuk pengalaman aktif/terbaru, `color-primary-soft` untuk pengalaman lama.
- Card konten muncul di sisi kanan/kiri bergantian (zig-zag) pada desktop, sejajar kiri pada mobile.
- Hover pada node: node membesar 1.15x dengan glow halus `gradient-glow`.

### 5.2 Sparkle Skill Badge (Badge Keterampilan Teknis)
Badge ikon tools (Laravel, Figma, dll.) dengan sentuhan sihir Rapunzel.
- Container: 56x56px, `radius-lg`, background `color-surface-card-alt`.
- Ikon tools di tengah (24x24px, full color/monochrome sesuai brand asal tool).
- Saat hover: muncul 2–3 partikel pixel bintang kecil (`color-accent-gold`) beranimasi "taburan sihir" di sekeliling badge (CSS keyframe sederhana, durasi 0.6s, tanpa library animasi berat).
- Label nama tool di bawah ikon, token `caption`, `color-body`.

### 5.3 Lantern Case Study Viewer (Studi Kasus UI/UX — Before/After)
Komponen pembanding wireframe vs. final design, terinspirasi adegan lentera terbang.
- Slider before-after horizontal dengan handle berbentuk ikon pixel "lentera" (bukan handle default browser).
- Background di belakang gambar menggunakan `gradient-glow` versi redup untuk kesan "cahaya lentera" mengapit hasil desain.
- Label mengambang "Wireframe" (kiri) dan "Final Design" (kanan) menggunakan token `caption` di atas chip `radius-pill`, background `rgba(31,23,48,0.6)`, teks putih.

### 5.4 Golden Thread CTA Banner (Banner Ajakan Kontak)
Banner penutup sebelum footer, mengajak pengunjung menghubungi — terinspirasi "benang rambut emas" Rapunzel yang menyatukan cerita.
- Background: `gradient-brand` penuh, dengan garis dekoratif pixel tipis bergelombang (meniru untaian rambut/benang emas) memotong banner secara diagonal, opacity 15%, dibuat sebagai SVG pixel pattern repeat.
- Heading token `display-md` (Outfit), warna `color-on-primary`.
- CTA button: varian **Primary Marketing Pill** tapi dengan background putih solid dan teks `color-primary-deep` (inverse), agar kontras dengan banner gradient.

---

## 6. Implementasi Tailwind CSS

### 6.1 Konfigurasi `tailwind.config.js`

```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php', './**/*.html'],
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#7C3AED',
          deep: '#5B21B6',
          soft: '#EDE4FB',
        },
        gold: {
          DEFAULT: '#F5A524',
          deep: '#C77C0E',
        },
        pink: {
          DEFAULT: '#F472B6',
        },
        canvas: {
          DEFAULT: '#FFFFFF',
          soft: '#FAF7FF',
        },
        surface: {
          card: '#FFFFFF',
          'card-alt': '#F4F0FC',
        },
        hairline: {
          DEFAULT: '#E7E1F5',
          strong: '#D4CBEF',
        },
        ink: '#1F1730',
        body: '#4B4160',
        mute: '#8A82A3',
        'on-primary': '#FFFFFF',
        'on-gold': '#2A1A00',
        success: { DEFAULT: '#16A34A', soft: '#DCFCE7' },
        warning: { DEFAULT: '#D97706', soft: '#FEF3C7' },
        error: { DEFAULT: '#DC2626', soft: '#FEE2E2' },
        info: { DEFAULT: '#7C3AED', soft: '#EDE4FB' },
      },
      fontFamily: {
        heading: ['Outfit', 'Inter', 'system-ui', 'sans-serif'],
        sub: ['TT Commons Pro', 'Inter', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        'display-xl': ['64px', { lineHeight: '1.05', letterSpacing: '-0.02em', fontWeight: '700' }],
        'display-lg': ['48px', { lineHeight: '1.1', letterSpacing: '-0.02em', fontWeight: '700' }],
        'display-md': ['36px', { lineHeight: '1.15', letterSpacing: '-0.01em', fontWeight: '600' }],
        'heading-lg': ['28px', { lineHeight: '1.2', letterSpacing: '-0.01em', fontWeight: '600' }],
        'heading-md': ['22px', { lineHeight: '1.25', fontWeight: '600' }],
        'heading-sm': ['18px', { lineHeight: '1.3', fontWeight: '600' }],
        'body-lg': ['18px', { lineHeight: '1.6', fontWeight: '400' }],
        'body-md': ['16px', { lineHeight: '1.6', fontWeight: '400' }],
        'body-sm': ['14px', { lineHeight: '1.5', fontWeight: '400' }],
        'button-md': ['16px', { lineHeight: '1', letterSpacing: '0.01em', fontWeight: '600' }],
        'button-sm': ['14px', { lineHeight: '1', letterSpacing: '0.01em', fontWeight: '600' }],
        caption: ['12px', { lineHeight: '1.4', letterSpacing: '0.02em', fontWeight: '500' }],
      },
      spacing: {
        xxs: '4px',
        xs: '8px',
        sm: '12px',
        md: '16px',
        lg: '24px',
        xl: '32px',
        '2xl': '48px',
        '3xl': '64px',
        '4xl': '96px',
        '5xl': '128px',
      },
      borderRadius: {
        sm: '6px',
        md: '10px',
        lg: '16px',
        pill: '999px',
      },
      boxShadow: {
        xs: '0 1px 2px rgba(31,23,48,0.04), inset 0 0 0 1px #E7E1F5',
        sm: '0 2px 4px rgba(31,23,48,0.06), 0 1px 2px rgba(31,23,48,0.04), inset 0 0 0 1px #E7E1F5',
        md: '0 4px 8px rgba(31,23,48,0.08), 0 2px 4px rgba(31,23,48,0.05), inset 0 0 0 1px #E7E1F5',
        lg: '0 8px 16px rgba(31,23,48,0.10), 0 4px 8px rgba(31,23,48,0.06), inset 0 0 0 1px #D4CBEF',
        modal: '0 16px 32px rgba(31,23,48,0.16), 0 8px 16px rgba(31,23,48,0.08), inset 0 0 0 1px #D4CBEF',
      },
      backgroundImage: {
        'gradient-brand': 'linear-gradient(135deg, #7C3AED 0%, #A855F7 45%, #F5A524 100%)',
        'gradient-soft': 'linear-gradient(180deg, #FAF7FF 0%, #F4F0FC 100%)',
        'gradient-glow': 'radial-gradient(circle at 50% 40%, rgba(245,165,36,0.35) 0%, rgba(124,58,237,0.15) 45%, transparent 70%)',
      },
    },
  },
  plugins: [],
};
```

### 6.2 Contoh Penggunaan Utility Class (HTML/PHP)

**Button Primary:**
```html
<button class="inline-flex items-center justify-center h-12 px-7 rounded-pill
               bg-gradient-brand text-on-primary font-sub text-button-md
               shadow-sm hover:shadow-md active:scale-[0.98] transition-all">
  Lihat Proyek Saya
</button>
```

**Badge Status:**
```html
<span class="inline-flex items-center gap-xs px-3 py-1 rounded-pill
             bg-success-soft text-success font-sub text-caption">
  ✨ Pesan berhasil dikirim
</span>
```

**Card Utama (Card Proyek):**
```html
<article class="bg-surface-card rounded-lg shadow-md hover:shadow-lg
                transition-shadow p-lg border border-hairline">
  <img src="assets/projects/project-1.png" alt="Tangkapan layar proyek"
       class="w-full aspect-[16/10] object-cover rounded-md mb-md" loading="lazy">
  <h3 class="font-sub text-heading-md text-ink mb-xs">Nama Proyek</h3>
  <p class="font-sub text-body-sm text-body mb-sm">Deskripsi singkat proyek yang dikerjakan.</p>
  <div class="flex gap-xs">
    <span class="px-3 py-1 rounded-pill bg-primary-soft text-primary-deep text-caption">PHP</span>
    <span class="px-3 py-1 rounded-pill bg-primary-soft text-primary-deep text-caption">Tailwind CSS</span>
  </div>
</article>
```

**Input Form:**
```html
<div class="mb-md">
  <label class="block font-sub text-caption text-body mb-xs" for="email">
    Email <span class="text-error">*</span>
  </label>
  <input type="email" id="email" name="email" required
         class="w-full h-11 px-md rounded-md border border-hairline
                font-sub text-body-md text-ink
                focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft
                transition-all" placeholder="nama@email.com">
  <p class="mt-xxs font-sub text-caption text-error hidden" id="email-error">
    ⚠️ Format email tidak valid
  </p>
</div>
```

**Hero Headline:**
```html
<section class="bg-gradient-soft py-5xl">
  <div class="max-w-[1120px] mx-auto px-md text-center relative">
    <div class="absolute inset-0 bg-gradient-glow pointer-events-none"></div>
    <h1 class="font-heading text-display-xl text-ink mb-md relative">
      Halo, saya seorang<br><span class="text-primary">Developer &amp; UI/UX Designer</span>
    </h1>
    <p class="font-sub text-body-lg text-body max-w-[560px] mx-auto">
      Membangun produk digital yang rapi, fungsional, dan penuh karakter.
    </p>
  </div>
</section>
```

---

## 7. Do's and Don'ts (Aturan Mutlak)

### Do's
1. **Gunakan sentuhan pixel secara bertarget** — hanya pada ikon, badge, dan komponen khas (Bab 5), bukan pada seluruh layout atau tipografi.
2. **Pertahankan whitespace generous** ala Vercel — jangan padatkan section hanya karena ingin memasukkan lebih banyak elemen dekoratif.
3. **Gunakan `gradient-brand` secukupnya** — maksimal pada 1–2 elemen fokal per halaman (hero, CTA banner) agar tetap terasa istimewa.
4. **Selalu sertakan inset hairline ring** pada shadow card sesuai skala elevasi di Bab 3.3, agar tepi komponen tetap tajam di layar retina.
5. **Konsisten memakai token warna semantik** (`success`, `warning`, `error`, `info`) untuk seluruh feedback formulir — jangan membuat warna status baru di luar token.
6. **Uji kontras teks** minimal rasio 4.5:1 (WCAG AA) terutama untuk teks di atas `gradient-brand` dan `color-accent-gold`.

### Don'ts
1. **Jangan gunakan pixel art kasar/beresolusi rendah** (bergaya 8-bit retro game) — pixel accent harus tetap tajam dan halus mengikuti vibe "bersih & modern", bukan nostalgia game jadul.
2. **Jangan mencampur radius berbeda** dalam satu komponen yang sama (misal card dengan radius 16px tapi tombol di dalamnya radius 4px) — ikuti skala radius Bab 3.4 secara konsisten.
3. **Jangan memakai lebih dari 3 warna aksen** (`primary`, `gold`, `pink`) dalam satu section yang sama — pilih maksimal 2 agar tidak ramai.
4. **Jangan menempatkan teks langsung di atas gambar/gradient tanpa overlay** — selalu tambahkan overlay gradient gelap tipis agar keterbacaan terjamin.
5. **Jangan membuat animasi partikel/sparkle berdurasi lebih dari 1 detik atau berulang otomatis (loop) tanpa interaksi** — animasi dekoratif (Bab 5.2) hanya boleh dipicu oleh hover/interaksi pengguna, bukan berjalan terus-menerus, agar tidak mengganggu fokus dan performa.
6. **Jangan menggunakan warna `color-ink` untuk background besar** kecuali footer — warna ini dirancang khusus sebagai warna teks/dark-section terbatas, bukan warna dasar brand.

---

*Dokumen ini menjadi acuan visual utama bagi implementasi frontend Portofolio, memastikan seluruh komponen — dari tombol hingga elemen dekoratif bertema Rapunzel — dibangun secara konsisten menggunakan Tailwind CSS sesuai token yang telah didefinisikan.*
