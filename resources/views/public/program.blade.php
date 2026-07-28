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
                {{-- <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-brand-accent"></i> Target: Selokan utama dan balai desa
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-brand-accent"></i> Waktu Pelaksanaan: Setiap Jumat Pagi
                    </li>
                </ul> --}}
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-brand-light rounded-[3rem] transform translate-x-4 translate-y-4 -z-10"></div>
                <img src="{{ asset('assets/jumsih.JPG') }}" alt="Jumat Bersih" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
        </div>

        <!-- Program 2: Image Left -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative order-2 lg:order-1" data-aos="fade-right">
                <div class="absolute inset-0 bg-[#eef5e9] rounded-[3rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                <img src="{{ asset('assets/edukasi sekolah.jpeg') }}" alt="Edukasi Sekolah" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="w-14 h-14 bg-[#fdf5e6] rounded-2xl flex items-center justify-center text-[#e5a024] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-school"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Edukasi Siswa Sekolah Dasar</h2>
                <div class="w-20 h-1 bg-[#e5a024] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Menanamkan kesadaran menjaga lingkungan tidak bisa instan ia harus dibiasakan sejak dini. Kami mengadakan kunjungan ke SDN Mulangsari untuk memberikan sosialisasi ceria mengenai pemilahan sampah organik dan anorganik.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Melalui permainan interaktif, alat peraga bergambar, dan praktik langsung membuang sampah pada tong yang tepat, anak-anak diajarkan untuk menjadi "Pahlawan Lingkungan" di rumah dan sekolah mereka.
                </p>
                {{-- <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#e5a024]"></i> Peserta: Siswa/i Kelas 4-6 SD
                    </li>
                    <li class="flex items-center gap-3 text-brand-dark font-medium">
                        <i class="fas fa-check-circle text-[#e5a024]"></i> Output: Pembentukan duta kebersihan cilik
                    </li>
                </ul> --}}
            </div>
        </div>

        <!-- Program 3: Image Right (Ecoenzym) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div data-aos="fade-right">
                <div class="w-14 h-14 bg-[#f0f9ff] rounded-2xl flex items-center justify-center text-[#0284c7] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-flask"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Pembuatan Ecoenzym</h2>
                <div class="w-20 h-1 bg-[#0284c7] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Sampah organik dapur seperti kulit buah dan sisa sayuran yang belum membusuk dapat dimanfaatkan kembali. Kami mengedukasi warga tentang proses fermentasi limbah organik tersebut menjadi cairan serbaguna yang dikenal sebagai ecoenzym.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Cairan alami ini sangat kaya manfaat bagi kehidupan sehari-hari, mulai dari cairan pembersih lantai ramah lingkungan, pupuk cair organik pencegah hama tanaman, hingga cairan penjernih air selokan.
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-[#e0f2fe] rounded-[3rem] transform translate-x-4 translate-y-4 -z-10"></div>
                <img src="{{ asset('assets/ecoenzym.jpg') }}" alt="Pembuatan Ecoenzym" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
        </div>

        <!-- Program 4: Image Left (Produk Kreatif) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative order-2 lg:order-1" data-aos="fade-right">
                <div class="absolute inset-0 bg-[#fdeaea] rounded-[3rem] transform -translate-x-4 translate-y-4 -z-10"></div>
                <img src="{{ asset('assets/ganci1.jpeg') }}" alt="Produk Kreatif Anorganik" class="rounded-[3rem] shadow-2xl w-full object-cover aspect-[4/3] border-4 border-white">
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="w-14 h-14 bg-[#fdeaea] rounded-2xl flex items-center justify-center text-[#d94a4a] text-2xl mb-6 shadow-sm">
                    <i class="fas fa-recycle"></i>
                </div>
                <h2 class="font-serif text-3xl md:text-4xl font-bold text-brand-dark mb-4">Pemanfaatan Sampah Anorganik Menjadi Produk Kreatif</h2>
                <div class="w-20 h-1 bg-[#d94a4a] rounded-full mb-6"></div>
                <p class="text-brand-gray text-lg leading-relaxed mb-6">
                    Sampah yang sulit terurai seperti botol plastik, bungkus kemasan, dan kardus dapat disulap menjadi barang yang memiliki nilai fungsi dan nilai jual tinggi di tangan orang-orang yang kreatif.
                </p>
                <p class="text-brand-gray text-lg leading-relaxed mb-8">
                    Kami mengadakan lokakarya (*workshop*) bagi warga, khususnya ibu-ibu rumah tangga dan pemuda desa, untuk belajar mengolah limbah anorganik menjadi berbagai produk menarik seperti tas modis, vas bunga estetis, hingga paving block yang ramah lingkungan.
                </p>
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
