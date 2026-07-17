@extends('layouts.public')

@section('title', $blog->judul . ' - KKN Desa Mulangsari')

@section('content')
<!-- Detail Article Section -->
<section class="pt-24 pb-16 lg:pt-32 lg:pb-24 bg-brand-bg relative">
    
    <!-- Background Decor -->
    <div class="absolute top-0 left-0 w-full h-96 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-20 right-0 w-64 h-64 bg-brand-light/20 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-[55rem] mx-auto px-6 sm:px-10">
        
        <!-- Breadcrumb -->
        <nav class="flex text-sm text-brand-gray mb-8" aria-label="Breadcrumb" data-aos="fade-up">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="hover:text-brand-accent transition-colors">Beranda</a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-[10px] mx-2"></i>
                        <a href="{{ route('blog.index') }}" class="hover:text-brand-accent transition-colors">Artikel</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center text-brand-dark font-medium">
                        <i class="fas fa-chevron-right text-[10px] mx-2 text-brand-gray"></i>
                        <span class="truncate max-w-[150px] sm:max-w-[300px]">{{ $blog->judul }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Article Header -->
        <header class="mb-10" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
                @if($blog->category)
                    <span class="inline-block bg-brand-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">{{ $blog->category->nama }}</span>
                @endif
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-brand-dark leading-tight mb-6">
                {{ $blog->judul }}
            </h1>
            
            <div class="flex flex-wrap items-center gap-6 text-sm text-brand-gray border-b border-gray-200 pb-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-light/30 flex items-center justify-center text-brand-dark font-bold">
                        AK
                    </div>
                    <div>
                        <p class="font-bold text-brand-dark">Admin KKN</p>
                        <p class="text-xs">Penulis</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <i class="far fa-calendar text-brand-accent"></i>
                    <span>{{ $blog->created_at->translatedFormat('d F Y') }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="far fa-clock text-brand-accent"></i>
                    <span>{{ max(1, ceil(str_word_count(strip_tags($blog->isi)) / 200)) }} Menit Baca</span>
                </div>
            </div>
        </header>

        <!-- Main Image -->
        @if($blog->thumbnail)
        <figure class="mb-12 relative rounded-3xl overflow-hidden shadow-lg group" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('thumbnail/' . $blog->thumbnail) }}" alt="{{ $blog->judul }}" class="w-full h-auto sm:h-[500px] object-cover group-hover:scale-105 transition-transform duration-1000">
            <figcaption class="absolute bottom-0 w-full bg-gradient-to-t from-black/80 to-transparent text-white p-6 text-sm">
                {{ $blog->judul }}
            </figcaption>
        </figure>
        @endif

        <!-- Article Content -->
        <article class="prose prose-lg max-w-none prose-headings:font-serif prose-headings:text-brand-dark prose-p:text-brand-gray prose-p:leading-relaxed prose-a:text-brand-accent hover:prose-a:text-brand-dark" data-aos="fade-up" data-aos-delay="300">
            {!! $blog->isi !!}
        </article>

        <!-- Share & Tags -->
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-6 py-6 border-y border-gray-200" data-aos="fade-up">
            <div class="flex items-center gap-2">
                <span class="text-sm font-bold text-brand-dark">Kategori:</span>
                @if($blog->category)
                    <span class="bg-brand-light/30 text-brand-dark px-3 py-1 rounded-full text-xs font-semibold">{{ $blog->category->nama }}</span>
                @else
                    <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-semibold">Tanpa Kategori</span>
                @endif
            </div>
            
            <div class="flex items-center gap-4">
                <span class="text-sm font-bold text-brand-dark">Bagikan:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-facebook-f text-sm"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($blog->judul) }}" target="_blank" class="w-8 h-8 rounded-full bg-blue-400 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-twitter text-sm"></i>
                </a>
                <a href="https://wa.me/?text={{ urlencode($blog->judul . ' - ' . request()->url()) }}" target="_blank" class="w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center hover:-translate-y-1 transition-transform">
                    <i class="fab fa-whatsapp text-sm"></i>
                </a>
            </div>
        </div>
        
    </div>
</section>

<!-- Related Articles Section -->
@if($related->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <h2 class="text-3xl font-serif font-bold text-brand-dark mb-10 text-center" data-aos="fade-up">Berita Terkait Lainnya</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($related as $item)
            <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 + 100 }}">
                <div class="relative h-48 overflow-hidden">
                    @if($item->thumbnail)
                        <img src="{{ asset('thumbnail/' . $item->thumbnail) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-4xl text-gray-300"></i>
                        </div>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                        <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> {{ $item->created_at->translatedFormat('d M Y') }}</span>
                    </div>
                    <h3 class="text-lg font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                        <a href="{{ route('blog.show', $item->slug) }}" class="before:absolute before:inset-0">{{ $item->judul }}</a>
                    </h3>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
