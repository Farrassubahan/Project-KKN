@extends('layouts.public')

@section('title', 'Program KKN - Mulangsari Bersih')

@section('content')
<!-- Hero Section -->
<section class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 overflow-hidden bg-brand-bg">
    <div class="max-w-[80rem] mx-auto px-6 sm:px-10 lg:px-12 relative z-10 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 bg-[#eef5e9] text-brand-dark px-4 py-1.5 rounded-full text-xs font-semibold mb-8 border border-[#d8e6da]">
            <i class="fas fa-tasks text-brand-accent"></i>
            Aksi Nyata Mahasiswa KKN
        </div>
        <h1 class="font-serif text-4xl md:text-5xl lg:text-7xl font-bold leading-[1.1] mb-6 text-brand-dark">
            Program <span class="italic text-brand-accent">Kerja</span> Kami.
        </h1>
        <p class="text-lg md:text-xl text-brand-gray mb-8 leading-relaxed max-w-3xl mx-auto">
            Melangkah bersama warga, mengabdi untuk lingkungan. Berikut adalah potret aksi nyata yang kami jalankan demi mewujudkan Desa Mulangsari yang asri dan bersih.
        </p>
    </div>
</section>

<!-- Content Sections Alternating -->
<section class="pb-24">
    <div class="max-w-[85rem] mx-auto px-6 sm:px-10 lg:px-12 space-y-24">
        
        <!-- Program 1: Image Right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div data-aos="fade-right">
                <div class="w-14 h-14 bg-[#eef5e9] rounded-2xl flex items-center justify-center text-brand-accent text-2xl mb-6 shadow-sm">
                    <i class="fas fa-broom"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Gerakan Jumat Bersih</h2>
                <div class="w-20 h-1 bg-brand-light rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Program rutin mingguan yang melibatkan seluruh lapisan masyarakat, mulai dari perangkat desa, mahasiswa KKN, hingga warga sekitar. Fokus utama kami adalah membersihkan fasilitas umum, menyapu jalan desa, dan mengangkat endapan sampah dari selokan.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Dengan aksi ini, kami tidak hanya mencegah potensi penyumbatan air yang menyebabkan banjir saat musim hujan, namun juga membangun kekompakan dan rasa gotong-royong antar warga.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-brand-accent"></i> Target: Selokan utama dan balai desa
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-brand-accent"></i> Waktu Pelaksanaan: Setiap Jumat Pagi
                    </li>
                </ul>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-brand-light rounded-[3rem] transform translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1594708767771-a7502209ff51?auto=format&fit=crop&w=1000&q=80" alt="Jumat Bersih" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
        </div>

        <!-- Program 2: Image Left -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative order-2 lg:order-1" data-aos="fade-right">
                <div class="absolute inset-0 bg-[#eef5e9] rounded-[3rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=1000&q=80" alt="Edukasi Sekolah" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="w-14 h-14 bg-[#fdf5e6] rounded-2xl flex items-center justify-center text-[#e5a024] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-school"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Edukasi Siswa Sekolah Dasar</h2>
                <div class="w-20 h-1 bg-[#e5a024] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Menanamkan kesadaran menjaga lingkungan tidak bisa instan; ia harus dibiasakan sejak dini. Kami mengadakan kunjungan ke SDN Mulangsari untuk memberikan sosialisasi ceria mengenai pemilahan sampah organik dan anorganik.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Melalui permainan interaktif, alat peraga bergambar, dan praktik langsung membuang sampah pada tong yang tepat, anak-anak diajarkan untuk menjadi "Pahlawan Lingkungan" di rumah dan sekolah mereka.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#e5a024]"></i> Peserta: Siswa/i Kelas 4-6 SD
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#e5a024]"></i> Output: Pembentukan duta kebersihan cilik
                    </li>
                </ul>
            </div>
        </div>

        <!-- Program 3: Image Right -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div data-aos="fade-right">
                <div class="w-14 h-14 bg-[#f0f9ff] rounded-2xl flex items-center justify-center text-[#0284c7] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-store-alt"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Inisiasi Bank Sampah</h2>
                <div class="w-20 h-1 bg-[#0284c7] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Sampah plastik dan kardus bukan sekadar barang buangan, namun material yang memiliki nilai sirkular. Kami membantu aparat desa menginisiasi sistem Bank Sampah warga.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Warga didorong untuk menyetor sampah anorganik terpilah. Sampah tersebut ditimbang, dicatat dalam buku tabungan, lalu disalurkan ke pengepul. Hasil tabungannya dapat dicairkan warga secara berkala, mengubah pola pikir "membuang sampah" menjadi "menabung sampah".
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#0284c7]"></i> Sistem: Penimbangan berkala per RW
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#0284c7]"></i> Dampak: Mengurangi 40% timbunan sampah
                    </li>
                </ul>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-[#e0f2fe] rounded-[3rem] transform translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?auto=format&fit=crop&w=1000&q=80" alt="Bank Sampah" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
        </div>

        <!-- Program 4: Image Left -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative order-2 lg:order-1" data-aos="fade-right">
                <div class="absolute inset-0 bg-[#fdeaea] rounded-[3rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1605600659908-0ef719419d41?auto=format&fit=crop&w=1000&q=80" alt="Pengadaan Tong Sampah" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="w-14 h-14 bg-[#fdeaea] rounded-2xl flex items-center justify-center text-[#d94a4a] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-trash-alt"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Pengadaan Tong Sampah Terpilah</h2>
                <div class="w-20 h-1 bg-[#d94a4a] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Salah satu kendala warga tidak memilah sampah adalah minimnya fasilitas tempat sampah yang memadai di ruang publik. Sebagai solusi, kami memproduksi dan mendistribusikan tong sampah terpilah (Organik, Anorganik, dan B3).
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Tong sampah ini kami tempatkan secara strategis di area balai desa, lapangan, dan persimpangan jalan agar mudah diakses oleh siapapun yang melintas, sembari dilengkapi label yang sangat jelas terbaca.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#d94a4a]"></i> Distribusi: 15 titik ruang publik
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#d94a4a]"></i> Jenis: 3 tong per titik (Organik, Anorganik, B3)
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Back Button -->
    <div class="text-center mt-32" data-aos="zoom-in">
        <a href="/" class="inline-flex items-center gap-3 px-10 py-4 bg-brand-dark hover:bg-[#16503e] text-white font-bold rounded-full transition-all shadow-lg transform hover:-translate-y-1">
            <i class="fas fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>
</section>

@endsection
