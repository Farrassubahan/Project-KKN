@extends('layouts.public')

@section('title', 'Artikel & Berita - KKN Desa Mulangsari')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-light/20 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-accent/10 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12 text-center" data-aos="fade-up">
        <span class="inline-block py-1.5 px-4 rounded-full bg-brand-light/30 text-brand-dark font-semibold text-sm mb-6 border border-brand-light/50 backdrop-blur-sm">
            Kabar Desa
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-brand-dark mb-6 leading-tight">
            Media Informasi & <span class="text-brand-accent italic">Berita Terbaru</span>
        </h1>
        <p class="text-brand-gray text-lg max-w-2xl mx-auto leading-relaxed">
            Dapatkan informasi terkini seputar kegiatan, edukasi lingkungan, dan berita penting lainnya dari Desa Mulangsari.
        </p>
    </div>
</section>

<!-- Blog List Section -->
<section class="py-16 bg-white relative">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <!-- Filter / Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('blog.index') }}"
               class="px-6 py-2.5 rounded-full text-sm font-medium shadow-sm transition-all {{ !request('category') ? 'bg-brand-dark text-white shadow-md' : 'bg-brand-bg text-brand-dark hover:bg-brand-light/30' }}">
                Semua Kabar
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('blog.index', ['category' => $cat->id]) }}"
                   class="px-6 py-2.5 rounded-full text-sm font-medium shadow-sm transition-all {{ request('category') == $cat->id ? 'bg-brand-dark text-white shadow-md' : 'bg-brand-bg text-brand-dark hover:bg-brand-light/30' }}">
                    {{ $cat->nama }} ({{ $cat->blogs_count }})
                </a>
            @endforeach
        </div>

        <!-- Featured / Headline Post -->
        @if($featured && !request('category'))
        <div class="mb-16" data-aos="fade-up" data-aos-delay="200">
            <div class="group relative flex flex-col lg:flex-row bg-[#fbfaf5] rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5">
                <div class="w-full lg:w-1/2 relative overflow-hidden h-72 lg:h-auto">
                    @if($featured->thumbnail)
                        <img src="{{ asset('thumbnail/' . $featured->thumbnail) }}" alt="{{ $featured->judul }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @else
                        <div class="absolute inset-0 w-full h-full bg-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-6xl text-gray-300"></i>
                        </div>
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent lg:bg-gradient-to-r"></div>
                    <div class="absolute bottom-6 left-6 lg:bottom-auto lg:top-6 lg:left-6">
                        <span class="bg-brand-accent text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Terbaru</span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-8 lg:p-12 flex flex-col justify-center relative">
                    <div class="flex items-center gap-4 text-sm text-brand-gray mb-4">
                        <span class="flex items-center gap-1.5"><i class="far fa-calendar text-brand-accent"></i> {{ $featured->created_at->translatedFormat('d M Y') }}</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                        @if($featured->category)
                            <span class="flex items-center gap-1.5"><i class="far fa-folder text-brand-accent"></i> {{ $featured->category->nama }}</span>
                        @endif
                    </div>
                    <h2 class="text-2xl lg:text-3xl font-serif font-bold text-brand-dark mb-4 group-hover:text-brand-accent transition-colors">
                        <a href="{{ route('blog.show', $featured->slug) }}" class="before:absolute before:inset-0">
                            {{ $featured->judul }}
                        </a>
                    </h2>
                    <p class="text-brand-gray leading-relaxed mb-8 line-clamp-3">
                        {{ Str::limit(strip_tags($featured->isi), 200) }}
                    </p>
                    <div class="mt-auto flex items-center text-brand-accent font-semibold group-hover:translate-x-2 transition-transform">
                        <span>Baca Selengkapnya</span>
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Grid Posts -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($blogs as $index => $blog)
                {{-- Skip featured post from grid if on first page without filter --}}
                @if(!request('category') && $blogs->currentPage() === 1 && $featured && $blog->id === $featured->id)
                    @continue
                @endif
                <article class="group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 + 100 }}">
                    <div class="relative h-56 overflow-hidden">
                        @if($blog->thumbnail)
                            <img src="{{ asset('thumbnail/' . $blog->thumbnail) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-4xl text-gray-300"></i>
                            </div>
                        @endif
                        @if($blog->category)
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full shadow-sm">
                                <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">{{ $blog->category->nama }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                            <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> {{ $blog->created_at->translatedFormat('d M Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">
                            <a href="{{ route('blog.show', $blog->slug) }}" class="before:absolute before:inset-0">{{ $blog->judul }}</a>
                        </h3>
                        <p class="text-sm text-brand-gray line-clamp-3 mb-5">
                            {{ Str::limit(strip_tags($blog->isi), 120) }}
                        </p>
                        <div class="mt-auto flex items-center text-sm font-semibold text-brand-accent group-hover:gap-2 transition-all">
                            Baca Artikel <i class="fas fa-chevron-right text-[10px] ml-1"></i>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-20">
                    <i class="fas fa-newspaper text-6xl text-gray-200 mb-4"></i>
                    <p class="text-brand-gray text-lg">Belum ada artikel yang diterbitkan.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
        <div class="mt-16 flex justify-center" data-aos="fade-up">
            {{ $blogs->links('vendor.pagination.tailwind') }}
        </div>
        @endif

    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-aos="zoom-in">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-6">Punya Informasi Menarik Seputar Lingkungan?</h2>
        <p class="text-[#8eaba0] mb-8 text-lg">Mari berkontribusi membangun wawasan desa dengan berbagi artikel atau berita kegiatan warga.</p>
        <button class="bg-brand-light text-brand-dark font-bold px-8 py-3.5 rounded-full hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg">
            Kirim Tulisan Anda
        </button>
    </div>
</section>
@endsection
