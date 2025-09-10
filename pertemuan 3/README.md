# 🌐 Portofolio Web – Nur Rahmiati

## 📌 Deskripsi
Website ini adalah portofolio pribadi **Nur Rahmiati** yang dibuat menggunakan **HTML, CSS, dan JavaScript murni** tanpa framework.  
Tampilan dibuat estetik dengan animasi, background interaktif, serta navigasi sederhana yang memudahkan pengunjung mengenal profil, pengalaman, dan kontak.

---

HTML berfungsi sebagai struktur dasar halaman dengan elemen-elemen penting seperti `<nav>` untuk navigasi, `<section>` untuk membagi konten menjadi About, Experience, Quote, dan Contact, serta `<footer>` untuk bagian hak cipta. Ada juga `<img>` untuk menampilkan foto profil, `<h1>` dan `<h2>` untuk judul, `<p>` untuk paragraf deskripsi, dan `<a>` untuk tautan ke media sosial. Dengan HTML ini, kerangka website terbentuk secara rapi dan terorganisir.

Untuk tampilan visual, digunakan **CSS** yang ditulis di dalam tag `<style>`. Beberapa properti penting antara lain `background: #87CEFA;` pada body untuk memberi warna biru muda, serta `font-family: "Poppins", sans-serif;` untuk konsistensi tipografi. CSS juga digunakan untuk memberikan efek interaktif, misalnya `.profile-pic:hover` yang membuat foto profil membesar dan sedikit berputar ketika diarahkan kursor, atau `.card:hover` yang membuat card pengalaman dan kutipan memiliki bayangan lebih tegas. Selain itu, animasi dibuat dengan `@keyframes`, contohnya animasi typing pada teks, efek glow pada judul, animasi fade-in untuk section, serta animasi melayang (float) untuk emoji. Semua ini menambah kesan dinamis pada tampilan portofolio.

Sementara itu, **JavaScript** dipakai khusus untuk memberikan efek animasi pada latar belakang. Elemen `<canvas id="bg">` menjadi media tempat partikel kecil berbentuk lingkaran digambar menggunakan `ctx.arc()`. Posisi partikel diperbarui secara terus-menerus dengan `requestAnimationFrame()`, sehingga tampak bergerak bebas. Agar tidak keluar layar, ditambahkan logika sederhana dengan membalik arah pergerakan (`p.dx *= -1` atau `p.dy *= -1`) saat partikel menyentuh tepi. Efek ini menghasilkan kesan modern dan interaktif karena halaman terasa hidup dengan background yang bergerak.
