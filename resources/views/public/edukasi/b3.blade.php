@extends('layouts.public')

@section('title', 'Edukasi Sampah B3 - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden bg-brand-bg">
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
            Bahan Berbahaya dan Beracun. Membutuhkan penanganan ekstra hati-hati agar tidak menjadi bom waktu bagi kesehatan keluarga dan kelestarian alam.
        </p>
    </div>
</section>

<!-- Konten Edukasi Dasar -->
<section class="pb-16 relative">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="bg-white rounded-[2.5rem] p-8 md:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.03)] mb-20 border border-gray-100" data-aos="fade-up">
            <h2 class="font-serif text-3xl font-bold text-brand-dark mb-6 flex items-center gap-4">
                Apa itu Sampah B3?
            </h2>
            <p class="text-brand-gray text-lg leading-relaxed mb-10">
                Sampah B3 adalah limbah yang mengandung zat kimia berbahaya dan beracun. Sifatnya yang reaktif, mudah terbakar, korosif, atau beracun dapat <strong>mencemarkan lingkungan secara masif</strong> serta membahayakan nyawa manusia jika dibuang sembarangan bersama sampah domestik lainnya.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-[#fbfaf5] p-8 rounded-3xl border border-gray-100">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-list text-[#d94a4a] text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Contoh B3 Rumah Tangga</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-[#d94a4a] mt-0.5">•</span> <strong>Elektronik:</strong> Baterai bekas, lampu neon/TL, kabel, HP rusak</li>
                        <li class="flex items-start gap-2"><span class="text-[#d94a4a] mt-0.5">•</span> <strong>Medis:</strong> Obat kadaluarsa, jarum suntik, termometer merkuri</li>
                        <li class="flex items-start gap-2"><span class="text-[#d94a4a] mt-0.5">•</span> <strong>Kimia:</strong> Botol pestisida, kaleng semprotan serangga (aerosol)</li>
                        <li class="flex items-start gap-2"><span class="text-[#d94a4a] mt-0.5">•</span> <strong>Lainnya:</strong> Minyak jelantah, sisa cat, pembersih lantai keras</li>
                    </ul>
                </div>
                <div class="bg-[#fff5f5] p-8 rounded-3xl border border-[#fee2e2]">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-skull-crossbones text-red-500 text-xl"></i>
                        <h4 class="font-bold text-brand-dark text-lg">Larangan Keras (Aturan Emas)</h4>
                    </div>
                    <ul class="text-brand-gray space-y-3 list-none">
                        <li class="flex items-start gap-2"><span class="text-red-500 mt-0.5"><i class="fas fa-times"></i></span> <strong>JANGAN Dibakar:</strong> Menghasilkan gas dioksin penyebab kanker.</li>
                        <li class="flex items-start gap-2"><span class="text-red-500 mt-0.5"><i class="fas fa-times"></i></span> <strong>JANGAN Dikubur:</strong> Logam berat akan meresap dan meracuni air sumur.</li>
                        <li class="flex items-start gap-2"><span class="text-red-500 mt-0.5"><i class="fas fa-times"></i></span> <strong>JANGAN Dicampur:</strong> Pisahkan tempat sampahnya dari sampah organik & anorganik.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teori Penanganan & Daur Ulang (Alternating Layout) -->
<section class="py-20 bg-white rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.02)]">
    <div class="max-w-[75rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
            <span class="text-xs font-bold uppercase tracking-wider text-[#d94a4a] bg-[#fdeaea] px-4 py-1.5 rounded-full">Solusi Tepat Guna</span>
            <h2 class="font-serif text-3xl md:text-5xl font-bold text-brand-dark mt-6 mb-6">Penanganan Tepat, <span class="italic text-[#d94a4a]">Lingkungan Selamat</span></h2>
            <p class="text-brand-gray text-lg">Sampah B3 tidak selalu berakhir di tempat pembuangan limbah beracun. Beberapa jenis limbah B3 rumah tangga ternyata bisa didaur ulang atau dikelola secara aman.</p>
        </div>

        <div class="space-y-24">
            <!-- Minyak Jelantah (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#e5a024] bg-[#fdf5e6] px-3 py-1 rounded-full">Limbah Dapur Berbahaya</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Mengubah Minyak Jelantah Menjadi Lilin Aromaterapi & Sabun</h3>
                    <div class="w-16 h-1 bg-[#e5a024] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Minyak goreng bekas (jelantah) sering dibuang ke wastafel atau selokan. Padahal 1 liter jelantah dapat mencemari 1.000 liter air bersih dan menyumbat saluran air karena lemak yang membeku.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Solusi & Potensi:</strong> Jelantah yang disaring bersih dapat dipadatkan menggunakan stearin (pengeras lilin) lalu dicampur dengan essential oil menjadi <strong>lilin aromaterapi</strong> yang bernilai jual tinggi. Selain itu, jelantah juga bisa disabunifikasi menggunakan soda api menjadi sabun cuci lap yang sangat ampuh mengangkat noda membandel, atau disetorkan ke Bank Sampah untuk diolah menjadi Biodiesel.
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#fdf5e6] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1628186107765-b1a80c9c4176?auto=format&fit=crop&w=800&q=80" alt="Minyak Jelantah" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
            </div>

            <!-- Limbah Elektronik (Image Left, Text Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="relative order-2 lg:order-1" data-aos="fade-right">
                    <div class="absolute inset-0 bg-[#fdeaea] rounded-[2.5rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1550005973-54089b279a2b?auto=format&fit=crop&w=800&q=80" alt="Limbah Elektronik" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#d94a4a] bg-[#fdeaea] px-3 py-1 rounded-full">E-Waste</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Daur Ulang Limbah Elektronik & Baterai</h3>
                    <div class="w-16 h-1 bg-[#d94a4a] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Baterai bekas dan komponen elektronik mengandung logam berat (merkuri, timbal, kadmium). Jika pelindungnya berkarat, racunnya akan merembes ke tanah dan memicu kanker bagi warga sekitar.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Solusi & Potensi:</strong> Gunakan selotip untuk menutup kutub positif/negatif baterai bekas agar tidak memicu korsleting. Simpan di wadah plastik kering. Setelah terkumpul banyak, serahkan ke kotak sampah elektronik (E-Waste Drop Box). Pihak profesional akan mendaur ulangnya (<em>urban mining</em>) untuk mengekstraksi kembali logam mulia seperti emas, perak, dan tembaga dari komponen sirkuit tersebut.
                    </p>
                </div>
            </div>

            <!-- Obat Kadaluarsa (Text Left, Image Right) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-xs font-bold uppercase tracking-wider text-[#0284c7] bg-[#f0f9ff] px-3 py-1 rounded-full">Limbah Medis Rumah Tangga</span>
                    <h3 class="font-serif text-3xl font-bold text-brand-dark mt-4 mb-4">Tata Cara Pembuangan Obat Kadaluarsa</h3>
                    <div class="w-16 h-1 bg-[#0284c7] rounded-full mb-6"></div>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        Membuang obat obatan secara utuh ke tempat sampah sangat berbahaya karena berpotensi disalahgunakan oleh pihak tak bertanggung jawab atau meracuni hewan liar.
                    </p>
                    <p class="text-brand-gray text-lg leading-relaxed mb-6">
                        <strong>Solusi Tepat:</strong> Keluarkan pil/tablet dari kemasannya lalu hancurkan. Campurkan bubuk obat tersebut dengan tanah atau bubuk kopi bekas agar tidak menarik perhatian hewan peliharaan maupun manusia, lalu masukkan ke kantong tertutup sebelum dibuang. Untuk obat sirup (selain antibiotik), tuang isinya ke wastafel atau kloset bersamaan dengan air mengalir yang deras. Gunting atau rusak kemasan obat sebelum dibuang!
                    </p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[#e0f2fe] rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
                    <img src="https://images.unsplash.com/photo-1584308666744-24d5e4a5d898?auto=format&fit=crop&w=800&q=80" alt="Obat Kadaluarsa" class="rounded-[2.5rem] shadow-xl w-full object-cover aspect-[4/3] border-4 border-white">
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
