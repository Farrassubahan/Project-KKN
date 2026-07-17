@extends('layouts.public')

@section('title', 'Artikel & Berita - KKN Desa Mulangsari')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-light/20 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-accent/10 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12 text-center" data-aos="fade-up">
        <span class="inline-block py-1.5 px-4 rounded-full bg-brand-light/30 text-brand-dark font-semibold text-sm mb-6 border border-brand-light/50 backdrop-blur-sm">
            Kabar Desa
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-brand-dark mb-6 leading-tight">
            Media Informasi & <span class="text-brand-accent italic">Berita Terbaru</span>
        </h1>
        <p class="text-brand-gray text-lg max-w-2xl mx-auto leading-relaxed">
            Dapatkan informasi terkini seputar kegiatan program kerja KKN, edukasi lingkungan, dan berita penting lainnya dari Desa Mulangsari.
        </p>
    </div>
</section>

<!-- Blog List Section -->
<section class="py-16 bg-white relative">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <!-- Filter / Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
            <button class="px-6 py-2.5 rounded-full bg-brand-dark text-white text-sm font-medium shadow-md transition-all">Semua Kabar</button>
            <button class="px-6 py-2.5 rounded-full bg-brand-bg text-brand-dark hover:bg-brand-light/30 text-sm font-medium transition-all">Edukasi Sampah</button>
            <button class="px-6 py-2.5 rounded-full bg-brand-bg text-brand-dark hover:bg-brand-light/30 text-sm font-medium transition-all">Kegiatan Warga</button>
            <button class="px-6 py-2.5 rounded-full bg-brand-bg text-brand-dark hover:bg-brand-light/30 text-sm font-medium transition-all">Program KKN</button>
        </div>

        <!-- Featured / Headline Post (Optional) -->
        <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
            <div class="group relative flex flex-col lg:flex-row bg-[#fbfaf5] rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5">
                <div class="w-full lg:w-1/2 relative overflow-hidden h-72 lg:h-auto">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1470&auto=format&fit=crop" alt="Featured News" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent lg:bg-gradient-to-r"></div>
                    <div class="absolute bottom-6 left-6 lg:bottom-auto lg:top-6 lg:left-6">
                        <span class="bg-brand-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Headline</span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center relative">
                    <div class="flex items-center gap-4 text-sm text-brand-gray mb-4">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar text-brand-accent"></i> 17 Jul 2026</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                        <span class="flex items-center gap-1.5"><i class="far fa-user text-brand-accent"></i> Admin KKN</span>
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-serif font-bold text-brand-dark mb-4 group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">
                            Sosialisasi Pemilahan Sampah Sukses Digelar di Balai Desa Mulangsari
                        </a>
                    </h2>
                    <p class="text-brand-gray leading-relaxed mb-8 line-clamp-3">
                        Masyarakat Desa Mulangsari menunjukkan antusiasme tinggi dalam acara sosialisasi pemilahan sampah organik dan anorganik. Program ini merupakan langkah awal untuk mewujudkan bank sampah desa yang mandiri...
                    </p>
                    <div class="mt-auto flex items-center text-brand-accent font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Baca Selengkapnya</span>
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid Posts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?q=80&w=1470&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                        <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">Edukasi</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 15 Jul 2026</span>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Bahaya Membakar Sampah Plastik di Lingkungan Permukiman</a>
                    </h3>
                    <p class="text-sm text-brand-gray line-clamp-3 mb-5">
                        Membakar sampah plastik bukan solusi. Asap yang dihasilkan mengandung zat karsinogenik yang sangat berbahaya bagi sistem pernapasan warga.
                    </p>
                    <div class="mt-auto flex items-center text-sm font-semibold text-brand-accent group-hover:gap-2 transition-all">
                        Baca Artikel <i class="fas fa-chevron-right text-[10px] ml-1"></i>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1595278069441-2cf29f8005a4?q=80&w=1471&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                        <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">Program KKN</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 12 Jul 2026</span>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Kerja Bakti Bersihkan Saluran Air Sambut Musim Penghujan</a>
                    </h3>
                    <p class="text-sm text-brand-gray line-clamp-3 mb-5">
                        Mahasiswa KKN bersama Karang Taruna bergotong-royong membersihkan selokan untuk mencegah banjir tahunan di dusun utama.
                    </p>
                    <div class="mt-auto flex items-center text-sm font-semibold text-brand-accent group-hover:gap-2 transition-all">
                        Baca Artikel <i class="fas fa-chevron-right text-[10px] ml-1"></i>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1613&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                        <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">Kreatif</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 10 Jul 2026</span>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Menyulap Botol Plastik Bekas Menjadi Pot Vertikal Garden</a>
                    </h3>
                    <p class="text-sm text-brand-gray line-clamp-3 mb-5">
                        Pelatihan daur ulang botol plastik menjadi vertikal garden bagi ibu-ibu PKK Desa Mulangsari untuk menghijaukan pekarangan rumah.
                    </p>
                    <div class="mt-auto flex items-center text-sm font-semibold text-brand-accent group-hover:gap-2 transition-all">
                        Baca Artikel <i class="fas fa-chevron-right text-[10px] ml-1"></i>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-56 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1605600659908-0ef719419d41?q=80&w=1336&auto=format&fit=crop" alt="Thumbnail" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                        <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">Kegiatan Warga</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> 05 Jul 2026</span>
                    </div>
                    <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ url('/blog/detail') }}" class="before:absolute before:inset-0">Peresmian Tempat Penampungan Sampah Sementara (TPS)</a>
                    </h3>
                    <p class="text-sm text-brand-gray line-clamp-3 mb-5">
                        Pemerintah Desa Mulangsari akhirnya meresmikan TPS baru yang akan memudahkan pengelolaan sampah warga secara kolektif.
                    </p>
                    <div class="mt-auto flex items-center text-sm font-semibold text-brand-accent group-hover:gap-2 transition-all">
                        Baca Artikel <i class="fas fa-chevron-right text-[10px] ml-1"></i>
                    </div>
                </div>
            </article>

        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center" data-aos="fade-up">
            <nav class="flex items-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-brand-gray hover:bg-brand-dark hover:text-white hover:border-brand-dark transition-all">
                    <i class="fas fa-chevron-left text-sm"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-brand-dark text-white shadow-md font-medium transition-all">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-brand-gray hover:bg-brand-dark hover:text-white hover:border-brand-dark font-medium transition-all">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-brand-gray hover:bg-brand-dark hover:text-white hover:border-brand-dark font-medium transition-all">3</a>
                <span class="text-brand-gray">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 text-brand-gray hover:bg-brand-dark hover:text-white hover:border-brand-dark transition-all">
                    <i class="fas fa-chevron-right text-sm"></i>
                </a>
            </nav>
        </div>

    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">Punya Informasi Menarik Seputar Lingkungan?</h2>
        <p class="text-[#8eaba0] mb-8 text-lg">Mari berkontribusi membangun wawasan desa dengan berbagi artikel atau berita kegiatan warga.</p>
        <button class="bg-brand-light text-brand-dark font-bold px-8 py-3.5 rounded-full hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg">
            Kirim Tulisan Anda
        </button>
    </div>
</section>
@endsection
