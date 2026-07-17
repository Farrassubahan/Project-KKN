@extends('layouts.public')

@section('hide_navbar', true)

@section('title', 'Edukasi Sampah B3 - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#fdeaea] text-[#d94a4a] rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm relative">
            <i class="fas fa-biohazard text-3xl animate-pulse"></i>
            <!-- Warning badge -->
            <div class="absolute -top-1 -right-1 bg-[#e5a024] text-white rounded-full w-6 h-6 flex items-center justify-center font-bold text-xs shadow-md border-2 border-white">!</div>
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-brand-dark">
            Mengenal Sampah <span class="italic text-[#d94a4a]">B3</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-2xl mx-auto">
            Bahan Berbahaya dan Beracun. Membutuhkan penanganan khusus agar tidak mencemari lingkungan dan kesehatan manusia.
        </p>
    </div>
</section>

<!-- Konten Edukasi -->
<section class="pb-24 relative">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-16 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah B3?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah B3 adalah limbah yang mengandung Bahan Berbahaya dan Beracun yang karena sifat, konsentrasi, atau jumlahnya dapat <strong>mencemarkan dan merusak lingkungan hidup</strong> serta membahayakan kesehatan masyarakat.
            </p>
            
            <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100 mt-8">
                <h4 class="font-bold text-brand-dark text-xl mb-6 flex items-center gap-3">
                    <i class="fas fa-list text-[#d94a4a]"></i> Contoh Sampah B3 Rumah Tangga:
                </h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="fas fa-battery-empty"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Baterai bekas</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="far fa-lightbulb"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Lampu TL / Neon</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="fas fa-pills"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Obat kadaluarsa</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="fas fa-spray-can"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Kaleng aerosol</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="fas fa-pump-soap"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Botol pestisida</span>
                    </div>
                    <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm">
                        <div class="w-10 h-10 bg-[#fbfaf5] rounded-full flex items-center justify-center text-brand-gray">
                            <i class="fas fa-tv"></i>
                        </div>
                        <span class="text-brand-dark font-medium">Limbah elektronik</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-16" data-aos="fade-up">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-10 text-center">Aturan Emas Penanganan B3</h2>
            
            <div class="space-y-6 max-w-4xl mx-auto">
                <!-- Aturan 1 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#fdeaea] rounded-2xl flex-shrink-0 flex items-center justify-center text-[#d94a4a] text-2xl">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">JANGAN Dicampur</h4>
                        <p class="text-brand-gray">Pisahkan sampah B3 dari sampah organik dan anorganik biasa. Simpan di tempat tertutup yang aman dan jauh dari jangkauan anak-anak.</p>
                    </div>
                </div>
                <!-- Aturan 2 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#fdeaea] rounded-2xl flex-shrink-0 flex items-center justify-center text-[#d94a4a] text-2xl">
                        <i class="fas fa-fire-alt"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">JANGAN Dibakar</h4>
                        <p class="text-brand-gray">Membakar sampah B3 (seperti plastik, karet, baterai, pestisida) akan melepaskan gas beracun ke udara yang sangat berbahaya jika terhirup.</p>
                    </div>
                </div>
                <!-- Aturan 3 -->
                <div class="flex flex-col md:flex-row gap-6 items-center bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-[#eef5e9] rounded-2xl flex-shrink-0 flex items-center justify-center text-brand-accent text-2xl">
                        <i class="fas fa-trash-restore"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-brand-dark mb-2">Serahkan ke Pihak Khusus</h4>
                        <p class="text-brand-gray">Kumpulkan dan serahkan kepada puskesmas terdekat (untuk obat-obatan) atau pihak pengepul limbah khusus (untuk elektronik dan baterai).</p>
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
