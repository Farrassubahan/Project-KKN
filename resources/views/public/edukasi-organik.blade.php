@extends('layouts.public')

@section('hide_navbar', true)

@section('title', 'Edukasi Sampah Organik - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#eef5e9] text-brand-accent rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm">
            <i class="fas fa-leaf text-3xl animate-bounce"></i>
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-brand-dark">
            Mengenal Sampah <span class="italic text-brand-accent">Organik</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-2xl mx-auto">
            Sampah yang bersahabat dengan alam karena mudah terurai. Mari pelajari bagaimana mengolahnya menjadi berkah bagi lingkungan.
        </p>
    </div>
</section>

<!-- Konten Edukasi -->
<section class="pb-24 relative">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-16 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah Organik?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah organik adalah barang atau sisa-sisa yang berasal dari makhluk hidup (tumbuhan maupun hewan) yang sifatnya <strong>mudah membusuk dan terurai</strong> secara alami oleh mikroorganisme tanah.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-check-circle text-brand-accent text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Contoh Organik</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Sisa makanan (nasi, lauk pauk)</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Kulit buah dan sisa sayuran</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Daun-daun kering dan ranting</li>
                        <li class="flex items-start gap-2"><span class="text-brand-accent mt-0.5">•</span> Tulang ikan atau ayam</li>
                    </ul>
                </div>
                <div class="bg-[#fff5f5] p-8 rounded-3xl border border-[#fee2e2]">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-times-circle text-red-500 text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Yang BUKAN Organik</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Bungkus plastik makanan</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Karet gelang</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Kertas berlapis plastik</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Sterofoam makanan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mb-16" data-aos="fade-up">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-10 text-center">Cara Mengolahnya</h2>
            
            <div class="space-y-6 max-w-4xl mx-auto">
                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#eef5e9] rounded-2xl flex-shrink-0 flex items-center justify-center text-brand-accent font-serif font-bold text-2xl">1</div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Pisahkan Sejak dari Dapur</h4>
                        <p class="text-brand-gray">Sediakan wadah khusus atau tong sampah tertutup di dapur yang hanya diisi oleh sisa-sisa bahan masakan atau makanan.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#eef5e9] rounded-2xl flex-shrink-0 flex items-center justify-center text-brand-accent font-serif font-bold text-2xl">2</div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Buat Lubang Biopori / Komposter</h4>
                        <p class="text-brand-gray">Buatlah lubang di pekarangan rumah atau gunakan tong komposter. Masukkan sampah organik ke dalamnya secara rutin.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#eef5e9] rounded-2xl flex-shrink-0 flex items-center justify-center text-brand-accent font-serif font-bold text-2xl">3</div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Panen Pupuk Kompos</h4>
                        <p class="text-brand-gray">Setelah beberapa minggu, sampah organik akan membusuk dan berubah menjadi pupuk kompos yang sangat baik untuk menyuburkan tanaman pekarangan atau sawah.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-20" data-aos="zoom-in">
            <a href="/#edukasi" class="inline-flex items-center gap-3 px-8 py-4 bg-brand-dark hover:bg-[#16503e] text-white font-semibold rounded-full transition-colors shadow-lg">
                <i class="fas fa-arrow-left"></i> Kembali ke Beranda
            </a>
        </div>

    </div>
</section>
@endsection
