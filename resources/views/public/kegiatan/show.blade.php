@extends('layouts.public')

@section('title', $kegiatan->judul . ' - Desa Mulangsari')

@section('content')

<!-- Detail Article Section -->
<section class="pt-32 pb-16 bg-white relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-light/10 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-4xl mx-auto px-6 sm:px-10">
        
        <!-- Breadcrumb & Tags -->
        <div class="mb-8" data-aos="fade-up">
            <nav class="flex text-sm text-brand-gray mb-6">
                <ol class="flex items-center space-x-2">
                    <li><a href="{{ url('/') }}" class="hover:text-brand-accent transition-colors">Beranda</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><a href="{{ route('kegiatan.index') }}" class="hover:text-brand-accent transition-colors">Kegiatan</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li class="text-brand-dark font-medium line-clamp-1">{{ $kegiatan->judul }}</li>
                </ol>
            </nav>

            <div class="flex items-center gap-3 mb-4">
                <span class="inline-block py-1 px-3 rounded-full bg-brand-dark text-white font-semibold text-xs tracking-wider uppercase">
                    {{ $kegiatan->tipe == 'warga' ? 'Kegiatan Warga' : 'Kelompok KKN' }}
                </span>
                <span class="inline-block py-1 px-3 rounded-full bg-brand-light/30 text-brand-dark font-medium text-xs border border-brand-light/50">
                    {{ $kegiatan->category }}
                </span>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-serif font-bold text-brand-dark mb-6 leading-tight">
                {{ $kegiatan->judul }}
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-sm text-brand-gray border-b border-gray-100 pb-8">
                <div class="flex items-center gap-2">
                    <i class="far fa-calendar-alt text-brand-accent text-lg"></i>
                    <span>{{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('l, d F Y') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-map-marker-alt text-brand-accent text-lg"></i>
                    <span>{{ $kegiatan->lokasi }}</span>
                </div>
            </div>
        </div>

        <!-- Featured Image -->
        @if($kegiatan->foto)
            <div class="rounded-2xl overflow-hidden mb-12 shadow-lg" data-aos="fade-up">
                <img src="{{ asset('activities/' . $kegiatan->foto) }}" alt="{{ $kegiatan->judul }}" class="w-full h-auto max-h-[500px] object-cover">
            </div>
        @else
            <div class="rounded-2xl overflow-hidden mb-12 shadow-inner bg-gray-100 h-64 flex items-center justify-center text-gray-400" data-aos="fade-up">
                <div class="text-center">
                    <i class="fas fa-image text-5xl mb-2 opacity-50"></i>
                    <p class="text-sm">Tidak ada foto dokumentasi</p>
                </div>
            </div>
        @endif

        <!-- Content -->
        <div class="prose prose-lg prose-brand max-w-none mb-16" data-aos="fade-up">
            {!! nl2br(e($kegiatan->deskripsi)) !!}
        </div>

        <!-- Share & Back Actions -->
        <div class="flex flex-col sm:flex-row justify-between items-center py-6 border-t border-b border-gray-100 gap-4" data-aos="fade-up">
            <a href="{{ route('kegiatan.index') }}" class="inline-flex items-center text-brand-dark hover:text-brand-accent font-semibold transition-colors">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Daftar Kegiatan
            </a>
            
            <div class="flex items-center gap-4">
                <span class="text-sm font-medium text-brand-gray">Bagikan:</span>
                <div class="flex gap-2">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" class="w-10 h-10 rounded-full bg-brand-bg flex items-center justify-center text-brand-dark hover:bg-brand-dark hover:text-white transition-all">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($kegiatan->judul) }}" target="_blank" class="w-10 h-10 rounded-full bg-brand-bg flex items-center justify-center text-brand-dark hover:bg-brand-dark hover:text-white transition-all">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://wa.me/?text={{ urlencode($kegiatan->judul . ' - ' . request()->fullUrl()) }}" target="_blank" class="w-10 h-10 rounded-full bg-brand-bg flex items-center justify-center text-brand-dark hover:bg-brand-dark hover:text-white transition-all">
                        <i class="fab fa-whatsapp text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Activities Section -->
@if($recentActivities->count() > 0)
<section class="py-16 bg-[#fbfaf5]">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-serif font-bold text-brand-dark">Kegiatan Lainnya</h2>
            <p class="text-brand-gray mt-2">Lihat juga dokumentasi kegiatan terbaru lainnya.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($recentActivities as $recent)
                <article class="kegiatan-card group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col cursor-pointer" onclick="window.location.href='{{ route('kegiatan.show', $recent->id) }}'">
                    <div class="relative h-48 overflow-hidden">
                        @if($recent->foto)
                            <img src="{{ asset('activities/' . $recent->foto) }}" alt="{{ $recent->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 group-hover:scale-110 transition-transform duration-700">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                            <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">{{ $recent->tipe == 'warga' ? 'Kegiatan Warga' : 'Kelompok KKN' }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-brand-gray mb-2">
                            <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> {{ \Carbon\Carbon::parse($recent->tanggal)->translatedFormat('d M Y') }}</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                            <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt text-brand-accent"></i> {{ $recent->lokasi }}</span>
                        </div>
                        <h3 class="text-lg font-bold font-serif text-brand-dark mb-2 leading-snug group-hover:text-brand-accent transition-colors">{{ $recent->judul }}</h3>
                        <p class="text-sm text-brand-gray line-clamp-2">{{ $recent->deskripsi }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
