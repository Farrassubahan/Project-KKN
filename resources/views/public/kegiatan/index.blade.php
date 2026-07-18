@extends('layouts.public')

@section('title', 'Kegiatan Warga & KKN - Desa Mulangsari')

@section('content')
<!-- Hero Section -->
<section class="relative pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-brand-dark/5 -z-10"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-light/20 rounded-full blur-3xl -z-10 translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-accent/10 rounded-full blur-3xl -z-10 -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12 text-center" data-aos="fade-up">
        <span class="inline-block py-1.5 px-4 rounded-full bg-brand-light/30 text-brand-dark font-semibold text-sm mb-6 border border-brand-light/50 backdrop-blur-sm">
            Aksi & Kolaborasi
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-brand-dark mb-6 leading-tight">
            Kegiatan <span class="text-brand-accent italic">Warga & Kelompok</span> KKN
        </h1>
        <p class="text-brand-gray text-lg max-w-2xl mx-auto leading-relaxed">
            Dokumentasi dan catatan kegiatan kolaboratif yang diselenggarakan oleh kelompok KKN bersama seluruh masyarakat Desa Mulangsari dalam membangun lingkungan berkelanjutan.
        </p>
    </div>
</section>

<!-- Kegiatan Grid Section -->
<section class="py-16 bg-white">
    <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12" data-aos="fade-up">
            <button onclick="filterKegiatan('all')" id="btn-all" class="filter-btn px-6 py-2.5 rounded-full bg-brand-dark text-white text-sm font-medium shadow-md transition-all">Semua Kegiatan</button>
            <button onclick="filterKegiatan('warga')" id="btn-warga" class="filter-btn px-6 py-2.5 rounded-full bg-brand-bg text-brand-dark hover:bg-brand-light/30 text-sm font-medium transition-all">Kegiatan Warga</button>
            <button onclick="filterKegiatan('kkn')" id="btn-kkn" class="filter-btn px-6 py-2.5 rounded-full bg-brand-bg text-brand-dark hover:bg-brand-light/30 text-sm font-medium transition-all">Kelompok KKN</button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @forelse($activities as $kegiatan)
                <article class="kegiatan-card group bg-[#fbfaf5] rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-black/5 flex flex-col cursor-pointer" data-category="{{ $kegiatan->tipe }}" data-aos="fade-up" data-aos-delay="100" onclick="window.location.href='{{ route('kegiatan.show', $kegiatan->id) }}'">
                    <div class="relative h-56 overflow-hidden">
                        @if($kegiatan->foto)
                            <img src="{{ asset('activities/' . $kegiatan->foto) }}" alt="{{ $kegiatan->judul }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400 group-hover:scale-110 transition-transform duration-700">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur px-3 py-1 rounded-full shadow-sm flex items-center gap-2">
                            <span class="text-xs font-bold text-brand-dark uppercase tracking-wider">{{ $kegiatan->tipe == 'warga' ? 'Kegiatan Warga' : 'Kelompok KKN' }}</span>
                        </div>
                        <div class="absolute top-4 right-4 bg-brand-accent/90 text-white backdrop-blur px-3 py-1 rounded-full shadow-sm">
                            <span class="text-xs font-medium">{{ $kegiatan->category }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs text-brand-gray mb-3">
                            <span class="flex items-center gap-1"><i class="far fa-calendar text-brand-accent"></i> {{ \Carbon\Carbon::parse($kegiatan->tanggal)->translatedFormat('d M Y') }}</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                            <span class="flex items-center gap-1"><i class="fas fa-map-marker-alt text-brand-accent"></i> {{ $kegiatan->lokasi }}</span>
                        </div>
                        <h3 class="text-xl font-bold font-serif text-brand-dark mb-3 leading-snug group-hover:text-brand-accent transition-colors">{{ $kegiatan->judul }}</h3>
                        <p class="text-sm text-brand-gray mb-5 line-clamp-3">
                            {{ $kegiatan->deskripsi }}
                        </p>
                        <div class="mt-auto">
                            <span class="inline-flex items-center text-sm font-semibold text-brand-accent group-hover:text-brand-dark transition-colors">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full text-center py-20 text-brand-gray">
                    <i class="fas fa-folder-open text-5xl mb-4 opacity-30"></i>
                    <p class="text-lg">Belum ada data kegiatan yang dipublikasikan.</p>
                </div>
            @endforelse

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    function filterKegiatan(category) {
        // Toggle buttons active state
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.remove('bg-brand-dark', 'text-white', 'shadow-md');
            btn.classList.add('bg-brand-bg', 'text-brand-dark', 'hover:bg-brand-light/30');
        });
        
        const activeBtn = document.getElementById('btn-' + category);
        if(activeBtn) {
            activeBtn.classList.remove('bg-brand-bg', 'text-brand-dark', 'hover:bg-brand-light/30');
            activeBtn.classList.add('bg-brand-dark', 'text-white', 'shadow-md');
        }

        // Filter cards
        document.querySelectorAll('.kegiatan-card').forEach(card => {
            if (category === 'all' || card.getAttribute('data-category') === category) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endsection