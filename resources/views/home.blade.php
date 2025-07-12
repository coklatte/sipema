<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Splide CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/css/splide.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
<style>
  html {
    scroll-behavior: smooth;
  }
  .hover-scale {
    transition: transform 0.3s ease;
  }
  .hover-scale:hover {
    transform: scale(1.1);
  }
</style>

<!-- Navbar -->
<nav class="bg-white shadow px-8 py-4 flex justify-between items-center sticky top-0 z-50">
  <div class="text-xl font-bold text-purple-800">SIPEMA</div>
  <ul class="flex gap-6 text-purple-800 font-medium">

    <li><a href="#home" class="hover:text-purple-600">Home</a></li>
    <li><a href="#layanan" class="hover:text-purple-600">Layanan Pengaduan</a></li>
    <li><a href="#fitur" class="hover:text-purple-600">Fitur</a></li>
    <li><a href="#alur" class="hover:text-purple-600">Alur</a></li>
    <li>
      <a href="{{ route('login') }}"
         class="bg-purple-800 text-white px-4 py-2 rounded-md font-semibold hover:bg-purple-700 transition duration-300">
        Login
      </a>
    </li>
  </ul>
</nav>

<!-- Hero Section -->
<section id="home" class="relative">
  <div id="hero-carousel" class="splide" aria-label="Hero Image Carousel">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="{{ asset('images/polmed.jpg') }}" alt="Polmed" class="w-full h-[80vh] object-cover">
        </li>
         <li class="splide__slide">
          <img src="{{ asset('images/polmed1.jpg') }}" alt="Polmed" class="w-full h-[80vh] object-cover">
        </li>
        <li class="splide__slide">
          <img src="{{ asset('images/KI.jpg') }}" alt="Polmed1" class="w-full h-[80vh] object-cover">
        </li>
         <li class="splide__slide">
          <img src="{{ asset('images/g n.jpg') }}" alt="Polmed1" class="w-full h-[80vh] object-cover">
        </li>
      </ul>
    </div>
  </div>
  <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/70 to-purple-700/60 flex flex-col items-center justify-center px-4 text-center">
    <h1 class="text-white text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">SISTEM INFORMASI PENGADUAN MAHASISWA</h1>
    <p class="text-white text-md md:text-lg max-w-2xl" data-aos="fade-up" data-aos-delay="100">
      Sistem ini dirancang untuk memfasilitasi mahasiswa dalam menyampaikan pengaduan mengenai sarana dan prasarana pada jurusan Teknik Komputer dan Infromatika secara efektif, cepat, dan terpantau.
    </p>
    <a href="#layanan" class="mt-6 inline-block bg-white text-purple-800 font-semibold px-6 py-2 rounded-full shadow hover:bg-purple-100 transition" data-aos="zoom-in" data-aos-delay="200">
      Ajukan Laporan Sekarang
    </a>
  </div>
</section>

<!-- Fitur Unggulan -->
<section id="fitur" class="py-20 bg-purple-50">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-purple-800 text-center mb-12 uppercase" data-aos="fade-up">Fitur Unggulan SIPEMA</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl text-center hover-scale" data-aos="fade-up">
        <img src="{{ asset('images/secure.png') }}" class="h-16 mx-auto mb-4" alt="Keamanan">
        <h3 class="text-lg font-semibold text-purple-800 mb-2">Keamanan Data</h3>
        <p class="text-sm text-gray-600">Data laporan terjaga aman dan hanya dapat diakses oleh pihak berwenang.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl text-center hover-scale" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('images/upload.png') }}" class="h-16 mx-auto mb-4" alt="Upload Bukti">
        <h3 class="text-lg font-semibold text-purple-800 mb-2">Upload Bukti</h3>
        <p class="text-sm text-gray-600">Dukung laporan kamu dengan dokumen atau gambar sebagai bukti pengaduan.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl text-center hover-scale" data-aos="fade-up" data-aos-delay="200">
        <img src="{{ asset('images/track.png') }}" class="h-16 mx-auto mb-4" alt="Pelacakan">
        <h3 class="text-lg font-semibold text-purple-800 mb-2">Pelacakan Progres</h3>
        <p class="text-sm text-gray-600">Lihat perkembangan laporan dari awal hingga selesai.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-xl text-center hover-scale" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('images/mobile.png') }}" class="h-16 mx-auto mb-4" alt="Mobile Friendly">
        <h3 class="text-lg font-semibold text-purple-800 mb-2">Akses Fleksibel</h3>
        <p class="text-sm text-gray-600">Gunakan sistem ini dari perangkat mana pun, baik laptop maupun ponsel.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tentang Pengaduan Mahasiswa -->
<section class="py-20 bg-white" id="tentang">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <div data-aos="fade-right">
      <img src="{{ asset('images/helpdesk.png') }}" alt="Ilustrasi Pengaduan" class="w-full max-w-md mx-auto">
    </div>
    <div data-aos="fade-left">
      <h2 class="text-3xl font-bold text-purple-800 mb-4">Apa itu Pengaduan Mahasiswa?</h2>
      <p class="text-gray-700 text-md leading-relaxed mb-4">
        Pengaduan Mahasiswa merupakan sarana resmi untuk menyampaikan keluhan, kritik, maupun saran terhadap kegiatan akademik, layanan dosen, maupun fasilitas kampus. Dengan adanya sistem ini, diharapkan terjalin komunikasi dua arah yang transparan dan membangun antara mahasiswa dan institusi.
      </p>
      <ul class="list-disc list-inside text-gray-600 space-y-2">
        <li>Mendorong peningkatan layanan kampus</li>
        <li>Memberikan solusi yang cepat dan tepat</li>
        <li>Menumbuhkan rasa kepedulian dan tanggung jawab bersama</li>
      </ul>
    </div>
  </div>
</section>


<!-- Layanan Pengaduan -->
<section id="layanan" class="py-20 bg-white">
  <h2 class="text-3xl font-bold text-purple-800 text-center mb-12 uppercase" data-aos="fade-up">Layanan Pengaduan</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto px-4">
    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-xl transition text-center" data-aos="zoom-in">
      <img src="{{ asset('images/Report.png') }}" alt="Buat Laporan" class="mx-auto h-20 mb-4">
      <h3 class="text-xl font-semibold text-purple-800 mb-2">Buat Laporan</h3>
      <p class="text-sm text-gray-600">Ajukan pengaduan mengenai fasilitas atau dosen secara langsung.</p>
    </div>
    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-xl transition text-center" data-aos="zoom-in" data-aos-delay="100">
      <img src="{{ asset('images/History.png') }}" alt="Riwayat Laporan" class="mx-auto h-20 mb-4">
      <h3 class="text-xl font-semibold text-purple-800 mb-2">Riwayat Laporan</h3>
      <p class="text-sm text-gray-600">Lihat laporan yang telah kamu buat dan status penanganannya.</p>
    </div>
    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-xl transition text-center" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{ asset('images/status.png') }}" alt="Status Laporan" class="mx-auto h-20 mb-4">
      <h3 class="text-xl font-semibold text-purple-800 mb-2">Status Laporan</h3>
      <p class="text-sm text-gray-600">Pantau progres dan tindak lanjut dari laporan kamu.</p>
    </div>
    <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-xl transition text-center" data-aos="zoom-in" data-aos-delay="300">
      <img src="{{ asset('images/upload.png') }}" alt="Upload Bukti" class="mx-auto h-20 mb-4">
      <h3 class="text-xl font-semibold text-purple-800 mb-2">Upload Bukti</h3>
      <p class="text-sm text-gray-600">Unggah bukti seperti gambar atau dokumen untuk mendukung laporan kamu.</p>
    </div>
  </div>
</section>

<!-- Alur Pengaduan -->
<section id="alur" class="bg-purple-50 py-20">
  <h2 class="text-3xl font-bold text-purple-800 text-center mb-12 uppercase" data-aos="fade-up">Alur Pengaduan Mahasiswa</h2>
  <div class="flex flex-col md:flex-row items-center justify-center gap-12 px-4 max-w-6xl mx-auto">
    <div class="flex flex-col items-center text-center max-w-xs hover-scale" data-aos="fade-up" data-aos-delay="100">
      <div class="bg-white border-2 border-purple-800 rounded-full p-5 shadow-md">
        <img src="{{ asset('images/pengajuan.png') }}" alt="Pengajuan" class="h-12 w-12">
      </div>
      <h3 class="mt-4 text-lg font-semibold text-purple-800">Pengajuan Laporan</h3>
      <p class="text-sm text-gray-600 mt-2">Mahasiswa membuat laporan terhadap sarana atau dosen.</p>
    </div>
    <svg class="hidden md:block w-10 h-10 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 12h14" />
    </svg>
    <div class="flex flex-col items-center text-center max-w-xs hover-scale" data-aos="fade-up" data-aos-delay="200">
      <div class="bg-purple-800 rounded-full p-5 shadow-md">
        <img src="{{ asset('images/verifikasi.png') }}" alt="Verifikasi" class="h-12 w-12">
      </div>
      <h3 class="mt-4 text-lg font-semibold text-purple-800">Verifikasi & Tindak Lanjut</h3>
      <p class="text-sm text-gray-600 mt-2">Laporan diverifikasi dan ditindaklanjuti oleh jurusan terkait.</p>
    </div>
    <svg class="hidden md:block w-10 h-10 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 12h14" />
    </svg>
    <div class="flex flex-col items-center text-center max-w-xs hover-scale" data-aos="fade-up" data-aos-delay="300">
      <div class="bg-purple-800 rounded-full p-5 shadow-md">
        <img src="{{ asset('images/pemantauan.png') }}" alt="Pantau" class="h-12 w-12">
      </div>
      <h3 class="mt-4 text-lg font-semibold text-purple-800">Pantauan & Status</h3>
      <p class="text-sm text-gray-600 mt-2">Mahasiswa dapat memantau progres dan status laporan.</p>
    </div>
  </div>
</section>

<!-- Lokasi Kampus (Google Maps Embed) -->
<section class="py-20 bg-gray-50">
  <div class="max-w-5xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold text-purple-800 mb-8" data-aos="fade-up">Lokasi Kampus Politeknik Negeri Medan</h2>
    <p class="text-gray-700 mb-6" data-aos="fade-up" data-aos-delay="100">
      Berikut adalah lokasi resmi kampus kami untuk informasi lebih lanjut atau keperluan langsung ke tempat.
    </p>
    <div class="overflow-hidden rounded-xl shadow-lg border" data-aos="zoom-in" data-aos-delay="200">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15958.387858971364!2d98.6530522!3d3.5629523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fd6cb13c6c9%3A0x2f19432e2d054c65!2sGedung%20N%20(Komputer%20dan%20Informartika)!5e0!3m2!1sen!2sid!4v1720310000000!5m2!1sen!2sid"
        width="100%"
        height="350"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-[#5C2E91] text-white text-center py-10 mt-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="text-left">
      <h3 class="text-lg font-bold mb-2">Tentang SIPEMA</h3>
      <p class="text-sm">SIPEMA adalah Sistem Pengaduan Mahasiswa Politeknik Negeri Medan yang dirancang untuk mempermudah mahasiswa menyampaikan keluhan dan mendapatkan respon yang cepat.</p>
    </div>
    <div class="text-left">
      <h3 class="text-lg font-bold mb-2">Navigasi</h3>
      <ul class="text-sm space-y-1">
        <li><a href="#home" class="hover:underline">Home</a></li>
        <li><a href="#layanan" class="hover:underline">Layanan</a></li>
        <li><a href="#fitur" class="hover:underline">Fitur</a></li>
        <li><a href="#alur" class="hover:underline">Alur</a></li>
        <li><a href="{{ route('login') }}" class="hover:underline">Login</a></li>
      </ul>
    </div>
    <div class="text-left">
      <h3 class="text-lg font-bold mb-2">Kontak</h3>
      <p class="text-sm">Kampus Politeknik Negeri Medan<br>Jl. Almamater No. 1, Medan<br>Email: info@sipema.polmed.ac.id</p>
    </div>
  </div>
  <div class="mt-6 text-sm">&copy; {{ date('Y') }} SIPEMA - Politeknik Negeri Medan</div>
</footer>

<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#hero-carousel', {
      type: 'loop',
      autoplay: true,
      interval: 4000,
      pauseOnHover: true,
    }).mount();

    AOS.init({
      duration: 800,
      once: true,
    });
  });
</script>
</body>
</html>
