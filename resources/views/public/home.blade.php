@extends('layouts.public')

@section('title', 'Beranda - Kebersihan Desa Mulangsari')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative pt-10 pb-20 lg:pt-24 lg:pb-32">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="lg:col-span-6 flex flex-col justify-center" data-aos="fade-right">
                
                <!-- Tag -->
                <div class="inline-flex items-center gap-2 bg-[#eef3ea] text-[#5b6b64] px-4 py-1.5 rounded-full text-xs font-semibold mb-8 w-max border border-[#d8e6da]">
                    <div class="w-2 h-2 rounded-full bg-brand-light"></div>
                    Gerakan warga Desa Mulangsari
                </div>
                
                <!-- Headline -->
                <h1 class="font-serif text-5xl md:text-[4.5rem] lg:text-[5.5rem] font-bold leading-[1.1] tracking-tight mb-8 text-brand-dark">
                    Desa yang <br>
                    <span class="italic text-brand-accent font-medium">tumbuh</span> <br>
                    bersama alam.
                </h1>
                
                <!-- Description -->
                <p class="text-brand-gray text-lg md:text-xl leading-relaxed mb-10 max-w-lg">
                    Belajar mengelola sampah, menjaga lingkungan, dan membangun kebiasaan baik untuk kehidupan yang lebih sehat — dari rumah kita sendiri.
                </p>
                
                <!-- Buttons -->
                <div class="flex flex-wrap items-center gap-4 mb-16">
                    <a href="#edukasi" class="bg-brand-dark text-white px-8 py-3.5 rounded-full text-sm font-semibold hover:bg-[#16503e] transition-colors flex items-center gap-2 group">
                        Mulai belajar 
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#tentang" class="bg-white text-brand-dark px-8 py-3.5 rounded-full text-sm font-semibold hover:bg-gray-50 transition-colors flex items-center gap-2 border border-gray-200">
                        Kenal desa kami
                        <i class="fas fa-arrow-right text-xs"></i>
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="flex flex-wrap items-center gap-8 md:gap-12 mt-8">
                    <div>
                        <h4 class="text-2xl font-bold text-brand-dark mb-1">9 km&sup2;</h4>
                        <p class="text-xs text-brand-gray uppercase tracking-wider">luas wilayah</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-brand-dark mb-1">4.800 jiwa</h4>
                        <p class="text-xs text-brand-gray uppercase tracking-wider">penduduk</p>
                    </div>
                    <div>
                        <h4 class="text-2xl font-bold text-brand-dark mb-1">04</h4>
                        <p class="text-xs text-brand-gray uppercase tracking-wider">program KKN</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Content (Image) -->
            <div class="lg:col-span-6 relative" data-aos="fade-left" data-aos-delay="200">
                <!-- Background Shape -->
                <div class="absolute inset-0 bg-brand-light rounded-[3rem] transform translate-x-6 translate-y-6 -z-10"></div>
                
                <!-- Main Image -->
                <div class="relative rounded-[3rem] overflow-hidden shadow-2xl aspect-[4/5] lg:aspect-square">
                    <img src="https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&w=1000&q=80" alt="Pemandangan Desa" class="w-full h-full object-cover">
                    
                    <!-- Floating Quote Card -->
                    <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10 bg-white p-6 rounded-2xl shadow-xl max-w-[280px]">
                        <p class="text-sm text-brand-gray italic mb-4 leading-relaxed">
                            "Lingkungan bukan warisan, tapi titipan untuk generasi berikutnya."
                        </p>
                        <p class="text-xs font-bold text-brand-dark flex items-center gap-2">
                            <span class="w-4 h-0.5 bg-brand-dark"></span> Warga Mulangsari
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Tentang Section -->
<section id="tentang" class="py-24 bg-white rounded-t-[3rem] mt-12 shadow-[0_-10px_40px_rgba(0,0,0,0.03)]">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-up">
                <h2 class="font-serif text-4xl md:text-5xl font-bold text-brand-dark mb-6">Membangun <span class="italic text-brand-accent">kesadaran</span> kolektif.</h2>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Menjaga kebersihan bukan sekadar tugas individu, melainkan tanggung jawab bersama. Melalui program KKN ini, kami mengajak seluruh elemen masyarakat Desa Mulangsari untuk berkolaborasi menciptakan lingkungan yang asri.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-light/30 flex items-center justify-center text-brand-dark flex-shrink-0 mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-brand-dark font-medium">Meningkatkan kesehatan warga dengan lingkungan bebas sampah.</p>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-brand-light/30 flex items-center justify-center text-brand-dark flex-shrink-0 mt-1">
                            <i class="fas fa-check text-xs"></i>
                        </div>
                        <p class="text-brand-dark font-medium">Mencegah terjadinya bencana banjir akibat saluran air yang tersumbat.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=500&q=80" alt="Kebersihan 1" class="rounded-3xl w-full h-64 object-cover">
                <img src="https://images.unsplash.com/photo-1595278069441-2cf29f8005a4?auto=format&fit=crop&w=500&q=80" alt="Kebersihan 2" class="rounded-3xl w-full h-64 object-cover mt-8">
            </div>
        </div>
    </div>
</section>

<!-- Edukasi Section -->
<section id="edukasi" class="py-24 bg-brand-bg relative">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="font-serif text-4xl md:text-5xl font-bold text-brand-dark mb-6">Pilah sampah <span class="italic text-brand-accent">sekarang</span>.</h2>
            <p class="text-brand-gray text-lg">Langkah kecil di rumah berdampak besar bagi bumi. Klik kartu di bawah untuk mempelajari setiap jenis sampah.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Organik -->
            <a href="/edukasi/organik" class="group block" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                    <div class="w-16 h-16 bg-[#eef5e9] text-brand-accent rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-brand-dark mb-3">Sampah Organik</h3>
                    <p class="text-brand-gray mb-8 flex-grow">Sisa makanan, dedaunan, dan material yang mudah terurai oleh alam. Cocok untuk dijadikan kompos.</p>
                    <div class="flex items-center text-sm font-bold text-brand-dark group-hover:text-brand-accent transition-colors">
                        Pelajari lebih lanjut <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Anorganik -->
            <a href="/edukasi/anorganik" class="group block" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                    <div class="w-16 h-16 bg-[#fdf5e6] text-[#e5a024] rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-box"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-brand-dark mb-3">Sampah Anorganik</h3>
                    <p class="text-brand-gray mb-8 flex-grow">Plastik, kaleng, botol kaca. Sulit terurai namun memiliki nilai ekonomi tinggi jika didaur ulang.</p>
                    <div class="flex items-center text-sm font-bold text-brand-dark group-hover:text-[#e5a024] transition-colors">
                        Pelajari lebih lanjut <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- B3 -->
            <a href="/edukasi/b3" class="group block" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-white p-8 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                    <div class="w-16 h-16 bg-[#fdeaea] text-[#d94a4a] rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-biohazard"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-brand-dark mb-3">Sampah B3</h3>
                    <p class="text-brand-gray mb-8 flex-grow">Baterai, limbah elektronik, obat kadaluarsa. Sangat berbahaya dan butuh penanganan khusus.</p>
                    <div class="flex items-center text-sm font-bold text-brand-dark group-hover:text-[#d94a4a] transition-colors">
                        Pelajari lebih lanjut <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Program Section -->
<section id="program" class="py-24 bg-brand-dark text-white rounded-[3rem] mx-4 sm:mx-8 lg:mx-12 my-12 overflow-hidden relative">
    <!-- Abstract shape -->
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-brand-accent/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-brand-light/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-[80rem] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <h2 class="font-serif text-4xl md:text-5xl font-bold mb-6">Program KKN Kami.</h2>
                <p class="text-[#a1b8ae] text-lg mb-10 leading-relaxed">
                    Kami tidak hanya memberikan edukasi, namun juga turun tangan langsung membenahi fasilitas dan sistem tata kelola kebersihan di Desa Mulangsari.
                </p>
                <div class="space-y-6">
                    <div class="flex items-center gap-6 p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/10">
                        <div class="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center text-brand-light text-2xl flex-shrink-0">
                            <i class="fas fa-broom"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Jumat Bersih</h4>
                            <p class="text-[#a1b8ae] text-sm">Kerja bakti rutin pembersihan jalan dan selokan desa.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/10">
                        <div class="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center text-brand-light text-2xl flex-shrink-0">
                            <i class="fas fa-store-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Inisiasi Bank Sampah</h4>
                            <p class="text-[#a1b8ae] text-sm">Pembentukan wadah untuk daur ulang bernilai ekonomi.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-6 p-4 rounded-2xl hover:bg-white/5 transition-colors border border-transparent hover:border-white/10">
                        <div class="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center text-brand-light text-2xl flex-shrink-0">
                            <i class="fas fa-trash"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Distribusi Tong Sampah</h4>
                            <p class="text-[#a1b8ae] text-sm">Pengadaan tong sampah terpilah di titik-titik publik.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <a href="/program" class="group inline-flex items-center gap-3 bg-brand-light text-brand-dark px-8 py-3.5 rounded-full font-bold hover:bg-[#a8d360] transition-all hover:-translate-y-1 shadow-lg">
                        Lihat Selengkapnya <i class="fas fa-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
            
            <div class="relative" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?auto=format&fit=crop&w=800&q=80" alt="Program Kerja" class="rounded-[2rem] shadow-2xl relative z-10">
                <div class="absolute -bottom-8 -left-8 w-48 h-48 bg-brand-light rounded-[2rem] -z-0"></div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-brand-bg text-center">
    <div class="max-w-3xl mx-auto px-6" data-aos="zoom-in">
        <h2 class="font-serif text-4xl font-bold text-brand-dark mb-6">Mari bergandeng tangan.</h2>
        <p class="text-brand-gray text-lg mb-10">
            Perubahan dimulai dari niat, dan diwujudkan dengan aksi nyata. Dukung program KKN kami untuk Desa Mulangsari yang lebih baik.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/program" class="inline-block bg-brand-light text-brand-dark px-10 py-4 rounded-full font-bold shadow-lg hover:shadow-xl hover:bg-[#a8d360] transition-all transform hover:-translate-y-1">
                Lihat Detail Program Kerja
            </a>
        </div>
    </div>
</section>
@endsection
