@extends('layouts.public')

@section('title', 'Edukasi Sampah Organik - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden bg-brand-bg">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#eef5e9] text-brand-accent rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm">
            <i class="fas fa-leaf text-3xl animate-bounce"></i>
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-brand-dark">
            Mengenal Sampah <span class="italic text-brand-accent">Organik</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-2xl mx-auto">
            Sampah yang bersahabat dengan alam. Mari pelajari cara pengolahannya yang cerdas untuk mengembalikan nutrisi ke bumi dan mendatangkan nilai guna.
        </p>
    </div>
</section>

<!-- Konten Edukasi Dasar -->
<section class="pb-16 relative">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-20 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah Organik?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah organik adalah barang atau sisa-sisa yang berasal dari makhluk hidup (tumbuhan maupun hewan) yang sifatnya <strong>mudah membusuk dan terurai</strong> secara alami oleh mikroorganisme tanah dalam waktu yang relatif singkat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-check-circle text-brand-accent text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Contoh Organik</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Sisa makanan (nasi basi, lauk pauk)</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Kulit buah dan sisa potongan sayuran</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Daun-daun kering, rumput, dan ranting</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Cangkang telur dan tulang ikan</li>
                    </ul>
                </div>
                <div class="bg-[#fff5f5] p-8 rounded-3xl border border-[#fee2e2]">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Yang BUKAN Organik</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Bungkus plastik makanan</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Karet gelang dan styrofoam</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Kertas berlapis plastik (kertas nasi)</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Tisu basah (mengandung serat sintetis)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Potensi Pengolahan & Teori (Alternating Layout) -->
<section class="py-20 bg-white rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.02)]">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-accent bg-[#eef5e9] px-4 py-1.5 rounded-full">Solusi Lingkungan</span>
            <h2 class="font-serif text-3xl md:text-5xl font-bold text-brand-dark mt-6 mb-6">Mengubah Sisa Menjadi <span class="italic text-brand-accent">Berkah</span></h2>
            <p class="text-brand-gray text-lg">Berhenti membuang sisa makanan ke TPA. Mari manfaatkan sampah organik di rumah tangga menjadi produk bernilai guna tinggi melalui 3 metode cerdas ini.</p>
        </div>

        <div class="space-y-24">
            <!-- Cairan Eco Enzyme (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#e5a024] bg-[#fdf5e6] px-3 py-1 rounded-full">Fermentasi Ajaib</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Cairan Multiguna Eco Enzyme</h3>
                    <div class="w-16 h-1 bg-[#e5a024] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Eco Enzyme adalah cairan hasil fermentasi dari sisa buah/sayuran, gula merah, dan air (rasio 3:1:10) yang didiamkan selama 3 bulan. Cairan ini kaya akan enzim dan memiliki aroma asam manis yang khas.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Manfaat:</strong> Sangat ampuh sebagai pembersih lantai alami pembunuh bakteri, pencuci piring, penjernih air selokan, pengusir hama tanaman, hingga pupuk cair organik. Cairan ini benar-benar serbaguna untuk kebutuhan rumah tangga sehari-hari!
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#fdf5e6] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="{{ asset('assets/ecoenzym.jpg') }}" alt="Eco Enzyme" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
            </div>

            <!-- Pupuk Kompos (Image Left, Text Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="relative order-2 lg:order-1" data-aos="fade-right">
                    <div class="absolute inset-0 bg-[#eef5e9] rounded-[2.5rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                    <img src="{{ asset('assets/kompos.jpg') }}" alt="Pupuk Kompos" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-accent bg-[#eef5e9] px-3 py-1 rounded-full">Nutrisi Alam</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Pembuatan Pupuk Kompos</h3>
                    <div class="w-16 h-1 bg-brand-light rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Daun kering, rumput sisa pangkasan, dan sisa makanan dapur (nasi, sayur) dapat dicampur sedikit tanah lalu dimasukkan ke dalam tong komposter atau lubang biopori. Biarkan mikroorganisme mengurainya selama 3-4 minggu.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Manfaat:</strong> Menghasilkan pupuk alami hitam gembur yang kaya unsur hara untuk menyuburkan tanaman hias atau kebun sayur Anda, serta menghemat pengeluaran untuk membeli pupuk kimia.
                    </p>
                </div>
            </div>

            <!-- Budidaya Maggot (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7] bg-[#f0f9ff] px-3 py-1 rounded-full">Pakan Ternak Super</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Budidaya Maggot BSF</h3>
                    <div class="w-16 h-1 bg-[#0284c7] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Lalat Tentara Hitam (*Black Soldier Fly* / BSF) tidak membawa penyakit. Larvanya (Maggot) sangat rakus memakan tumpukan sampah organik. Satu kilogram maggot mampu menghabiskan puluhan kilogram sampah makanan dalam waktu singkat.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Manfaat:</strong> Maggot BSF adalah pakan alternatif untuk unggas (ayam, bebek) dan ikan lele yang sangat padat protein (mencapai 40-50%). Bagi peternak, maggot hidup memiliki nilai jual tinggi dan mampu menekan biaya pakan pabrik secara drastis.
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#e0f2fe] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="{{ asset('assets/magot.jpg') }}" alt="Budidaya Maggot BSF" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
            </div>
        </div>

        <div class="text-center mt-32" data-aos="zoom-in">
            <a href="/#edukasi" class="inline-flex items-center gap-3 px-10 py-4 bg-brand-dark hover:bg-[#16503e] text-white font-bold rounded-full transition-all shadow-lg transform hover:-translate-y-1">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
@endsection
