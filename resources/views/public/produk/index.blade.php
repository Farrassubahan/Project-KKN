@extends('layouts.public')

@section('title', 'Produk Daur Ulang - KKN Desa Mulangsari')

@section('content')
{{-- Hero Section --}}
<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-20 overflow-hidden">
    <div class="absolute inset-0 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-0 right-0 w-[28rem] h-[28rem] bg-brand-light/20 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-accent/10 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12 text-center" data-aos="fade-up">
        <span class="inline-block py-1.5 px-4 rounded-full bg-brand-light/30 text-brand-dark font-semibold text-sm mb-6 border border-brand-light/50 backdrop-blur-sm">
            <i class="fas fa-recycle mr-1.5 text-brand-accent"></i> Bank Sampah Desa
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-brand-dark mb-6 leading-tight">
            Produk <span class="text-brand-accent italic">Daur Ulang</span> Kami
        </h1>
        <p class="text-brand-gray text-lg max-w-2xl mx-auto leading-relaxed">
            Sampah bukan akhir — ini adalah awal dari sesuatu yang bernilai. Temukan produk-produk hasil kreativitas warga Desa Mulangsari yang bisa Anda miliki.
        </p>
    </div>
</section>

{{-- Stats Strip --}}
<div class="bg-brand-dark py-8" data-aos="fade-up">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        <div class="flex flex-wrap justify-center gap-12 text-center">
            <div>
                <div class="text-3xl font-bold text-brand-light">{{ $products->total() }}+</div>
                <div class="text-sm text-[#8eaba0] mt-1">Produk Tersedia</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-brand-light">100%</div>
                <div class="text-sm text-[#8eaba0] mt-1">Ramah Lingkungan</div>
            </div>
            <div>
                <div class="text-3xl font-bold text-brand-light">Desa</div>
                <div class="text-sm text-[#8eaba0] mt-1">Mulangsari</div>
            </div>
        </div>
    </div>
</div>

{{-- Product Grid --}}
<section class="py-20 bg-white">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">

        @if($products->isEmpty())
            <div class="text-center py-24" data-aos="fade-up">
                <div class="w-24 h-24 mx-auto mb-6 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fas fa-box-open text-4xl text-gray-300"></i>
                </div>
                <h3 class="text-xl font-bold text-brand-dark mb-2">Belum Ada Produk</h3>
                <p class="text-brand-gray">Produk daur ulang sedang dalam persiapan. Pantau terus ya!</p>
            </div>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-7">
                @foreach($products as $index => $product)
                <a href="{{ route('produk.show', $product->id) }}"
                   class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl border border-gray-100 hover:border-brand-light/50 transition-all duration-400 flex flex-col"
                   data-aos="fade-up" data-aos-delay="{{ ($index % 4) * 75 }}">

                    {{-- Card Image --}}
                    <div class="relative h-56 overflow-hidden bg-gray-100">
                        @if($product->foto)
                            <img src="{{ asset('products/' . $product->foto) }}"
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-brand-light/20 to-brand-accent/10">
                                <i class="fas fa-box text-5xl text-brand-light"></i>
                            </div>
                        @endif
                        {{-- Eco Badge --}}
                        <div class="absolute top-3 left-3">
                            <span class="inline-flex items-center gap-1 bg-white/90 backdrop-blur text-brand-dark text-xs font-bold px-2.5 py-1 rounded-full shadow-sm">
                                <i class="fas fa-leaf text-brand-accent text-[10px]"></i> Daur Ulang
                            </span>
                        </div>
                    </div>

                    {{-- Card Body --}}
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="font-bold text-brand-dark text-base leading-snug mb-2 group-hover:text-brand-accent transition-colors line-clamp-2">
                            {{ $product->name }}
                        </h3>
                        @if($product->deskripsi)
                            <p class="text-xs text-brand-gray line-clamp-2 mb-4 leading-relaxed">{{ $product->deskripsi }}</p>
                        @endif
                        <div class="mt-auto flex items-center justify-between pt-3 border-t border-gray-100">
                            <div>
                                <span class="text-xs text-gray-400 block">Harga</span>
                                <span class="text-brand-dark font-extrabold text-lg">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                            </div>
                            <span class="w-9 h-9 rounded-xl bg-brand-dark/5 group-hover:bg-brand-dark flex items-center justify-center transition-all">
                                <i class="fas fa-arrow-right text-xs text-brand-dark group-hover:text-white transition-colors"></i>
                            </span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($products->hasPages())
            <div class="mt-16 flex justify-center" data-aos="fade-up">
                {{ $products->links('vendor.pagination.tailwind') }}
            </div>
            @endif
        @endif
    </div>
</section>

{{-- CTA Banner --}}
<section class="py-16 bg-brand-dark relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-aos="zoom-in">
        <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-brand-accent/20 flex items-center justify-center">
            <i class="fas fa-recycle text-2xl text-brand-light"></i>
        </div>
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-white mb-4">Ingin Menjadi Nasabah Bank Sampah?</h2>
        <p class="text-[#8eaba0] mb-8 text-lg max-w-xl mx-auto">Setorkan sampah pilah Anda dan dapatkan manfaat ekonomi langsung dari program Bank Sampah Desa Mulangsari.</p>
        <a href="{{ url('/program') }}" class="inline-block bg-brand-light text-brand-dark font-bold px-8 py-3.5 rounded-full hover:bg-white hover:-translate-y-1 transition-all duration-300 shadow-lg">
            Lihat Program Kerja
        </a>
    </div>
</section>
@endsection
