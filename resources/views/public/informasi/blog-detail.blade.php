@extends('layouts.public')

@section('title', 'Detail Berita - KKN Desa Mulangsari')

@section('content')
<!-- Detail Article Section -->
<section class="pt-24 pb-16 lg:pt-32 lg:pb-24 bg-brand-bg relative">
    
    <!-- Background Decor -->
    <div class="absolute top-0 left-0 w-full h-96 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-20 right-0 w-64 h-64 bg-brand-light/20 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-[55rem] mx-auto px-6 sm:px-10">
        
        <!-- Breadcrumb -->
        <nav class="flex text-sm text-brand-gray mb-8" aria-label="Breadcrumb" data-aos="fade-up">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="hover:text-brand-accent transition-colors">Beranda</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-[10px] mx-2"></i>
                        <a href="{{ url('/blog') }}" class="hover:text-brand-accent transition-colors">Artikel</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center text-brand-dark font-medium">
                        <i class="fas fa-chevron-right text-[10px] mx-2 text-brand-gray"></i>
                        <span class="truncate max-w-[150px] sm:max-w-[300px]">Sosialisasi Pemilahan Sampah Sukses Digelar di Balai Desa Mulangsari</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Article Header -->
        <header class="mb-10" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
                <span class="inline-block bg-brand-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Headline</span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-dark leading-tight mb-6">
                Sosialisasi Pemilahan Sampah Sukses Digelar di Balai Desa Mulangsari
            </h1>
            
            <div class="flex flex-wrap items-center gap-6 text-sm text-brand-gray border-b border-gray-200 pb-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-light/30 flex items-center justify-center text-brand-dark font-bold">
                        AK
                    </div>
                    <div>
                        <p class="font-bold text-brand-dark">Admin KKN</p>
                        <p class="text-xs">Penulis</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <i class="far fa-calendar text-brand-accent"></i>
                    <span>17 Juli 2026</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="far fa-clock text-brand-accent"></i>
                    <span>5 Menit Baca</span>
                </div>
            </div>
        </header>

        <!-- Main Image -->
        <figure class="mb-12 relative rounded-3xl overflow-hidden shadow-lg group" data-aos="fade-up" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1470&auto=format&fit=crop" alt="Sosialisasi Sampah" class="w-full h-auto sm:h-[500px] object-cover group-hover:scale-105 transition-transform duration-1000">
            <figcaption class="absolute bottom-0 w-full bg-gradient-to-t from-black/80 to-transparent text-white p-6 text-sm">
                Kegiatan sosialisasi pemilahan sampah organik dan anorganik bersama warga di balai desa.
            </figcaption>
        </figure>

        <!-- Article Content -->
        <article class="prose prose-lg max-w-none prose-headings:font-serif prose-headings:text-brand-dark prose-p:text-brand-gray prose-p:leading-relaxed prose-a:text-brand-accent hover:prose-a:text-brand-dark" data-aos="fade-up" data-aos-delay="300">
            <p>
                <strong>Mulangsari</strong> — Mahasiswa Kuliah Kerja Nyata (KKN) sukses menyelenggarakan sosialisasi pemilahan sampah bagi warga Desa Mulangsari pada hari Minggu, 17 Juli 2026. Acara yang digelar di balai desa ini dihadiri oleh puluhan warga yang antusias untuk memahami cara mengelola sampah rumah tangga dengan baik.
            </p>
            
            <p>
                Dalam kegiatan ini, warga diberikan edukasi mengenai perbedaan sampah organik (sisa makanan, dedaunan) dan anorganik (plastik, kertas, kaca), serta bahaya dari limbah B3. Tidak hanya materi, mahasiswa juga mempraktikkan langsung cara memilah sampah menggunakan tempat sampah terpisah yang telah disediakan di balai desa.
            </p>
            
            <blockquote>
                "Kegiatan ini sangat bermanfaat bagi kami. Selama ini banyak warga yang masih membakar sampah plastik, padahal itu sangat berbahaya. Kini kami tahu cara memilah dan memanfaatkannya," ujar Bapak Sunardi, Kepala Desa Mulangsari.
            </blockquote>
            
            <h3 class="text-2xl font-serif font-bold text-brand-dark mt-8 mb-4">Langkah Awal Menuju Bank Sampah</h3>
            <p>
                Sosialisasi ini bukan sekadar edukasi sementara, melainkan langkah awal dari program utama pembentukan Bank Sampah Desa Mulangsari. Nantinya, sampah anorganik yang telah dipilah oleh warga dapat disetorkan ke bank sampah untuk didaur ulang atau dijual. Hal ini diharapkan mampu memberikan nilai ekonomi tambahan bagi keluarga.
            </p>

            <p>
                "Kami melihat potensi besar di Mulangsari. Dengan pengelolaan yang tepat, sampah bukan lagi menjadi masalah, tapi bisa menjadi berkah. Warga sangat terbuka dengan ide ini," pungkas Ketua Koordinator KKN.
            </p>
        </article>

        <!-- Gallery / Foto Pendukung (Sesuai Permintaan) -->
        <div class="mt-16 pt-10 border-t border-gray-200" data-aos="fade-up">
            <h3 class="text-2xl font-serif font-bold text-brand-dark mb-6">Galeri Kegiatan</h3>
            <p class="text-brand-gray text-sm mb-6">Berikut adalah beberapa dokumentasi dari kegiatan sosialisasi ini:</p>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Nanti foto-foto ini di-looping dari database (uploaded oleh admin) -->
                <a href="#" class="block overflow-hidden rounded-xl shadow-sm group">
                    <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=600&auto=format&fit=crop" alt="Galeri 1" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                <a href="#" class="block overflow-hidden rounded-xl shadow-sm group">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=600&auto=format&fit=crop" alt="Galeri 2" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                <a href="#" class="block overflow-hidden rounded-xl shadow-sm group">
                    <img src="https://images.unsplash.com/photo-1595278069441-2cf29f8005a4?q=80&w=600&auto=format&fit=crop" alt="Galeri 3" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                <a href="#" class="block overflow-hidden rounded-xl shadow-sm group hidden md:block">
                    <img src="https://images.unsplash.com/photo-1605600659908-0ef719419d41?q=80&w=600&auto=format&fit=crop" alt="Galeri 4" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                <a href="#" class="block overflow-hidden rounded-xl shadow-sm group hidden md:block">
                    <img src="https://images.unsplash.com/photo-1618477461853-cf6ed80f41c9?q=80&w=600&auto=format&fit=crop" alt="Galeri 5" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                </a>
                <div class="block overflow-hidden rounded-xl shadow-sm relative group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=600&auto=format&fit=crop" alt="Galeri 6" class="w-full h-40 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                        <span class="text-white font-bold text-lg">+3 Foto</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share & Tags -->
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 py-6 border-y border-gray-200" data-aos="fade-up">
            <div class="flex items-center gap-2">
                <span class="text-sm font-bold text-brand-dark">Kategori:</span>
                <span class="bg-brand-light/30 text-brand-dark px-3 py-1 rounded-full text-xs font-semibold">Headline</span>
                <span class="bg-brand-light/30 text-brand-dark px-3 py-1 rounded-full text-xs font-semibold">Edukasi</span>
            </div>
            
            <div class="flex items-center gap-4">
                <span class="text-sm font-bold text-brand-dark">Bagikan:</span>
                <a href="#" class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-facebook-f text-sm"></i>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-blue-400 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-twitter text-sm"></i>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-whatsapp text-sm"></i>
                </a>
            </div>
        </div>
        
    </div>
</section>

<!-- Related Articles Section -->
<section class="py-16 bg-white">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <h2 class="text-3xl font-serif font-bold text-brand-dark mb-10 text-center" data-aos="fade-up">Berita Terkait Lainnya</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=1470&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 15 Jul 2026</span>
                    </div>
                    <h3 class="text-lg font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Bahaya Membakar Sampah Plastik di Lingkungan Permukiman</a>
                    </h3>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1595278069441-2cf29f8005a4?q=80&w=1471&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 12 Jul 2026</span>
                    </div>
                    <h3 class="text-lg font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Kerja Bakti Bersihkan Saluran Air Sambut Musim Penghujan</a>
                    </h3>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1613&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 10 Jul 2026</span>
                    </div>
                    <h3 class="text-lg font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Menyulap Botol Plastik Bekas Menjadi Pot Vertikal Garden</a>
                    </h3>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
