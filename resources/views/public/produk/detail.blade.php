@extends('layouts.public')

@section('title', $product->name . ' - Produk Daur Ulang KKN Desa Mulangsari')

@section('content')
{{-- Detail Section --}}
<section class="pt-24 pb-16 lg:pt-32 lg:pb-24 bg-brand-bg relative">
    <div class="absolute top-0 left-0 w-full h-96 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-20 right-0 w-64 h-64 bg-brand-light/20 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-[80rem] mx-auto px-6 sm:px-10 lg:px-12">

        {{-- Breadcrumb --}}
        <nav class="flex text-sm text-brand-gray mb-10" data-aos="fade-up">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li><a href="{{ url('/') }}" class="hover:text-brand-accent transition-colors">Beranda</a></li>
                <li><div class="flex items-center"><i class="fas fa-chevron-right text-[10px] mx-2"></i><a href="{{ route('produk.index') }}" class="hover:text-brand-accent transition-colors">Produk</a></div></li>
                <li><div class="flex items-center text-brand-dark font-medium"><i class="fas fa-chevron-right text-[10px] mx-2 text-brand-gray"></i><span class="truncate max-w-[180px] sm:max-w-xs">{{ $product->name }}</span></div></li>
            </ol>
        </nav>

        {{-- Main Detail Card --}}
        <div class="bg-white rounded-3xl shadow-sm border border-black/5 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- Left: Photo --}}
                <div class="relative bg-gray-100 min-h-[360px] lg:min-h-[500px] overflow-hidden group">
                    @if($product->foto)
                        <img src="{{ asset('products/' . $product->foto) }}" alt="{{ $product->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 absolute inset-0">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center bg-gradient-to-br from-brand-light/30 to-brand-accent/10">
                            <i class="fas fa-box text-8xl text-brand-light/50"></i>
                        </div>
                    @endif
                    {{-- Eco Badge --}}
                    <div class="absolute top-6 left-6 z-10">
                        <span class="inline-flex items-center gap-1.5 bg-white/90 backdrop-blur text-brand-dark text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                            <i class="fas fa-leaf text-brand-accent"></i> Produk Daur Ulang
                        </span>
                    </div>
                </div>

                {{-- Right: Info --}}
                <div class="p-8 lg:p-12 flex flex-col justify-between">
                    <div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-serif font-bold text-brand-dark leading-tight mb-4">
                            {{ $product->name }}
                        </h1>

                        {{-- Price Badge --}}
                        <div class="inline-flex items-center gap-2 mb-6 bg-brand-dark/5 rounded-2xl px-5 py-3">
                            <i class="fas fa-tag text-brand-accent"></i>
                            <span class="text-2xl font-extrabold text-brand-dark">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                        </div>

                        @if($product->deskripsi)
                        <div class="mb-8">
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-3">Deskripsi Produk</h3>
                            <p class="text-brand-gray leading-relaxed text-base">{{ $product->deskripsi }}</p>
                        </div>
                        @endif

                        {{-- Info Badges --}}
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 px-3 py-1.5 rounded-full text-xs font-semibold">
                                <i class="fas fa-recycle text-[10px]"></i> Ramah Lingkungan
                            </span>
                            <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 px-3 py-1.5 rounded-full text-xs font-semibold">
                                <i class="fas fa-hands text-[10px]"></i> Handmade
                            </span>
                            <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 px-3 py-1.5 rounded-full text-xs font-semibold">
                                <i class="fas fa-map-marker-alt text-[10px]"></i> Produk Lokal Desa
                            </span>
                        </div>
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="space-y-3">
                        @if($product->link_ecommerce)
                            <a href="{{ $product->link_ecommerce }}" target="_blank" rel="noopener noreferrer"
                               class="flex items-center justify-center gap-3 w-full bg-brand-dark text-white font-bold px-6 py-4 rounded-2xl hover:bg-[#16503e] hover:-translate-y-0.5 hover:shadow-xl transition-all duration-300 text-base">
                                <i class="fas fa-shopping-cart"></i>
                                Beli di E-Commerce
                                <i class="fas fa-external-link-alt text-sm opacity-70"></i>
                            </a>
                        @else
                            <div class="flex items-center justify-center gap-3 w-full bg-gray-100 text-gray-400 font-bold px-6 py-4 rounded-2xl text-base cursor-not-allowed">
                                <i class="fas fa-shopping-cart"></i>
                                Link E-Commerce Belum Tersedia
                            </div>
                        @endif
                        <a href="{{ route('produk.index') }}"
                           class="flex items-center justify-center gap-2 w-full border border-brand-dark/20 text-brand-dark font-semibold px-6 py-3.5 rounded-2xl hover:bg-brand-dark hover:text-white hover:border-brand-dark transition-all duration-300 text-sm">
                            <i class="fas fa-arrow-left text-xs"></i>
                            Lihat Semua Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Related Products --}}
@if($related->count() > 0)
<section class="py-16 bg-white">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <h2 class="text-2xl sm:text-3xl font-serif font-bold text-brand-dark mb-10 text-center" data-aos="fade-up">
            Produk <span class="text-brand-accent">Lainnya</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($related as $index => $item)
            <a href="{{ route('produk.show', $item->id) }}"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl border border-gray-100 hover:border-brand-light/50 transition-all duration-400 flex flex-col"
               data-aos="fade-up" data-aos-delay="{{ $index * 75 }}">
                <div class="relative h-44 overflow-hidden bg-gray-100">
                    @if($item->foto)
                        <img src="{{ asset('products/' . $item->foto) }}" alt="{{ $item->name }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    @else
                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-brand-light/20 to-brand-accent/10">
                            <i class="fas fa-box text-4xl text-brand-light"></i>
                        </div>
                    @endif
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="font-bold text-brand-dark text-sm leading-snug mb-1 group-hover:text-brand-accent transition-colors line-clamp-2">
                        {{ $item->name }}
                    </h3>
                    <div class="mt-auto pt-3 border-t border-gray-100">
                        <span class="text-brand-dark font-extrabold">Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
