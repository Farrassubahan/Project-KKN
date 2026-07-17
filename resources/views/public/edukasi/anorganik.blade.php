@extends('layouts.public')

@section('title', 'Edukasi Sampah Anorganik - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden bg-brand-bg">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#fdf5e6] text-[#e5a024] rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm">
            <i class="fas fa-recycle text-3xl animate-spin" style="animation-duration: 8s;"></i>
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-brand-dark">
            Mengenal Sampah <span class="italic text-[#e5a024]">Anorganik</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-2xl mx-auto">
            Sampah yang sulit terurai oleh alam, namun memiliki potensi ekonomi luar biasa jika disentuh dengan kreativitas dan inovasi daur ulang.
        </p>
    </div>
</section>

<!-- Konten Edukasi Dasar -->
<section class="pb-16 relative">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-20 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah Anorganik?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah anorganik adalah jenis limbah yang dihasilkan dari bahan non-hayati, produk sintetik, atau proses teknologi pengolahan bahan tambang. Karakteristik utamanya adalah **sangat sulit terurai secara alami**, bahkan membutuhkan waktu hingga ratusan tahun agar bisa hancur sepenuhnya di tanah.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-check-circle text-[#e5a024] text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Jenis & Contoh Umum</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Plastik (Botol kemasan, kantong belanja, sedotan)</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Logam & Kaleng (Kaleng soda, besi tua, aluminium)</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Kertas & Kardus (Buku bekas, kemasan karton)</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Kaca & Keramik (Botol sirup, piring pecah)</li>
                    </ul>
                </div>
                <div class="bg-[#fff5f5] p-8 rounded-3xl border border-[#fee2e2]">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Bahaya Jika Diabaikan</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Menyumbat gorong-gorong penyulut banjir bandang</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Menurunkan tingkat kesuburan tanah pemukiman</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Mikroplastik termakan hewan & meracuni rantai makanan</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Asap pembakaran plastik merusak organ pernapasan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Potensi Ekonomi & Ide Daur Ulang (Alternating Layout) -->
<section class="py-20 bg-white rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.02)]">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-wider text-[#e5a024] bg-[#fdf5e6] px-4 py-1.5 rounded-full">Nilai Ekonomi Kreatif</span>
            <h2 class="font-serif text-3xl md:text-5xl font-bold text-brand-dark mt-6 mb-6">Mengubah Sampah Menjadi <span class="italic text-brand-accent">Rupiah</span></h2>
            <p class="text-brand-gray text-lg">Di tangan orang kreatif, sampah anorganik bukan lagi akhir dari barang, melainkan awal dari produk baru yang siap dijual.</p>
        </div>

        <div class="space-y-24">
            <!-- Kerajinan Plastik (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-accent bg-[#eef5e9] px-3 py-1 rounded-full">Kreativitas Plastik</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Tas Modis & Pot Bunga Estetis</h3>
                    <div class="w-16 h-1 bg-brand-light rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Limbah kantong plastik tebal dan botol minum bekas dapat dilebur atau dianyam kembali untuk dijadikan tas belanja premium (*ecobag*), dompet, hingga pot bunga gantung berkarakter unik.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Potensi Pendapatan:</strong> Produk olahan ini sangat diminati oleh kalangan pencinta lingkungan (*green buyers*) dan dapat dipasarkan seharga Rp15.000 hingga Rp150.000 per item tergantung kerumitan anyaman.
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#eef5e9] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?auto=format&fit=crop&w=800&q=80" alt="Kerajinan Plastik Daur Ulang" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
            </div>

            <!-- Kerajinan Kertas/Kardus (Image Left, Text Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="relative order-2 lg:order-1" data-aos="fade-right">
                    <div class="absolute inset-0 bg-[#fdf5e6] rounded-[2.5rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1595079676339-1534801ad6cf?auto=format&fit=crop&w=800&q=80" alt="Kerajinan Kardus Organizer" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#e5a024] bg-[#fdf5e6] px-3 py-1 rounded-full">Kreasi Kardus & Kertas</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Organizer Box & Frame Foto Unik</h3>
                    <div class="w-16 h-1 bg-[#e5a024] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Kardus bekas tebal kerap kali dibuang begitu saja. Padahal, dengan sedikit potongan kreatif dan balutan kain perca atau kertas kado, kardus bisa disulap menjadi kotak kosmetik (*desk organizer*), wadah penyimpanan serbaguna, hingga pigura foto bernilai tinggi.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Potensi Pendapatan:</strong> Wadah penyimpanan minimalis dan fungsional dari bahan daur ulang ini memiliki pasar yang besar di e-commerce dengan harga jual rata-rata Rp25.000 hingga Rp80.000.
                    </p>
                </div>
            </div>

            <!-- Kerajinan Kaca & Kaleng (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7] bg-[#f0f9ff] px-3 py-1 rounded-full">Seni Kaca & Logam</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Lampu Hias & Vas Bunga Mewah</h3>
                    <div class="w-16 h-1 bg-[#0284c7] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Botol kaca sisa selai atau sirup dan kaleng logam bekas minuman ringan dapat didekorasi ulang menggunakan cat khusus atau lilitan tali rami. Barang-barang ini bertransformasi menjadi tempat lilin aromaterapi, lampu hias meja, hingga vas bunga bergaya *rustic*.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Potensi Pendapatan:</strong> Sangat pas untuk dekorasi kafe maupun interior rumah bertema industrial atau minimalis. Vas dan lampu hias ini bernilai jual tinggi, mulai dari Rp50.000 hingga ratusan ribu rupiah.
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#e0f2fe] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=800&q=80" alt="Lampu Hias Daur Ulang" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Produk Catalog Preview (Persiapan Fitur Penjualan) -->
{{-- <section class="py-24 bg-brand-bg relative">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12 text-center" data-aos="zoom-in">
        <div class="w-16 h-16 bg-[#eef5e9] text-brand-accent rounded-2xl flex items-center justify-center mx-auto mb-6 text-3xl">
            <i class="fas fa-shopping-bag"></i>
        </div>
        <h2 class="font-serif text-3xl md:text-5xl font-bold text-brand-dark mb-6">Karya Kreatif Warga Mulangsari</h2>
        <p class="text-brand-gray text-lg mb-10 max-w-2xl mx-auto">
            Kami sedang mempersiapkan katalog toko online untuk menjual produk kerajinan berkualitas tinggi hasil produksi langsung masyarakat Desa Mulangsari.
        </p>
        <div class="inline-flex flex-col sm:flex-row items-center gap-4 justify-center">
            <span class="bg-brand-dark/10 text-brand-dark px-6 py-3.5 rounded-full font-bold text-sm flex items-center gap-2 border border-brand-dark/20">
                <span class="w-2.5 h-2.5 rounded-full bg-[#e5a024] animate-pulse"></span> Fitur Toko Segera Hadir
            </span>
            <a href="/#edukasi" class="inline-flex items-center gap-2 px-8 py-3.5 bg-brand-dark text-white font-bold rounded-full hover:bg-[#16503e] transition-colors shadow-lg">
                <i class="fas fa-arrow-left text-sm"></i> Kembali
            </a>
        </div>
    </div>
</section> --}}
@endsection
