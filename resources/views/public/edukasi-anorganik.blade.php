@extends('layouts.public')

@section('hide_navbar', true)

@section('title', 'Edukasi Sampah Anorganik - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="w-20 h-20 bg-[#fdf5e6] text-[#e5a024] rounded-full flex items-center justify-center mx-auto mb-8 shadow-sm">
            <i class="fas fa-box text-3xl animate-bounce"></i>
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 text-brand-dark">
            Mengenal Sampah <span class="italic text-[#e5a024]">Anorganik</span>
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-2xl mx-auto">
            Sampah yang sulit terurai namun memiliki nilai ekonomi tinggi jika didaur ulang dengan benar.
        </p>
    </div>
</section>

<!-- Konten Edukasi -->
<section class="pb-24 relative">
    <div class="max-w-[70rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-16 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah Anorganik?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah anorganik adalah sampah yang dihasilkan dari bahan-bahan non-hayati (baik sintetik maupun hasil proses teknologi) yang <strong>sangat sulit atau bahkan tidak bisa terurai</strong> oleh alam dalam waktu singkat.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-check-circle text-[#e5a024] text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Contoh Anorganik</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Botol dan kantong plastik</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Kertas dan kardus bekas</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Kaleng minuman / logam</li>
                        <li class="flex items-start gap-2"><span class="text-[#e5a024] mt-0.5">•</span> Kaca dan beling</li>
                    </ul>
                </div>
                <div class="bg-[#fff5f5] p-8 rounded-3xl border border-[#fee2e2]">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-exclamation-triangle text-red-500 text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Bahaya Jika Dibiarkan</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Menyumbat saluran air (banjir)</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Mencemari tanah hingga ratusan tahun</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Meracuni biota laut</li>
                        <li class="flex items-start gap-2"><span class="text-red-400 mt-0.5">•</span> Menghasilkan polusi udara jika dibakar</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mb-16" data-aos="fade-up">
            <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-10 text-center">Konsep 3R dalam Penanganan</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Reduce -->
                <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl transition duration-300 text-center">
                    <div class="w-16 h-16 bg-[#eef5e9] rounded-2xl flex items-center justify-center mx-auto mb-6 text-brand-accent text-2xl">
                        <i class="fas fa-minus"></i>
                    </div>
                    <h3 class="font-serif font-bold text-2xl text-brand-dark mb-3">Reduce</h3>
                    <p class="text-brand-gray">Kurangi penggunaan barang sekali pakai. Contoh: Membawa tas belanja sendiri ke pasar atau minimarket.</p>
                </div>
                <!-- Reuse -->
                <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl transition duration-300 text-center">
                    <div class="w-16 h-16 bg-[#fdf5e6] rounded-2xl flex items-center justify-center mx-auto mb-6 text-[#e5a024] text-2xl">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="font-serif font-bold text-2xl text-brand-dark mb-3">Reuse</h3>
                    <p class="text-brand-gray">Gunakan kembali barang yang masih bisa dipakai. Contoh: Menggunakan botol kaca bekas untuk pot tanaman.</p>
                </div>
                <!-- Recycle -->
                <div class="bg-white border border-gray-100 p-8 rounded-3xl shadow-sm hover:shadow-xl transition duration-300 text-center">
                    <div class="w-16 h-16 bg-[#f0f9ff] rounded-2xl flex items-center justify-center mx-auto mb-6 text-[#0284c7] text-2xl">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3 class="font-serif font-bold text-2xl text-brand-dark mb-3">Recycle</h3>
                    <p class="text-brand-gray">Daur ulang sampah menjadi barang baru yang bernilai ekonomi. Kumpulkan di <strong>Bank Sampah</strong>.</p>
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
