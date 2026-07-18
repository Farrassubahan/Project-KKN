@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Ringkasan Dashboard')

@section('breadcrumb')
    <span class="text-brand-accent">Dashboard</span>
@endsection

@section('content')

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Total Artikel</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $totalBlogs }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="far fa-newspaper"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Kategori</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $totalCategories }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-green-50 text-green-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-tags"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Produk Daur Ulang</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $totalProducts }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-box"></i>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Manajemen User</p>
                <h3 class="text-3xl font-bold text-gray-800">{{ $totalUsers }}</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-users"></i>
            </div>
        </div>

     </div>

    <!-- Main Content Area (Split Grid) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left: Recent Articles Table -->
        <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <h2 class="font-bold text-gray-800 text-lg">Artikel Terbaru</h2>
                <a href="{{ url('/admin/blogs') }}" class="text-sm text-brand-accent hover:text-brand-dark font-medium">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-medium">Judul</th>
                            <th class="px-6 py-4 font-medium">Kategori</th>
                            <th class="px-6 py-4 font-medium">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        @forelse($recentBlogs as $blog)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    @if($blog->thumbnail)
                                        <img src="{{ asset('thumbnail/' . $blog->thumbnail) }}" class="w-10 h-10 rounded-lg object-cover" alt="{{ $blog->judul }}">
                                    @else
                                        <div class="w-10 h-10 rounded-lg bg-gray-200 flex items-center justify-center text-gray-400"><i class="fas fa-image"></i></div>
                                    @endif
                                    <span class="font-medium text-gray-800 truncate max-w-[200px]">{{ $blog->judul }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if($blog->category)
                                    <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">{{ $blog->category->nama }}</span>
                                @else
                                    <span class="px-3 py-1 bg-gray-50 text-gray-500 rounded-full text-xs font-medium">Tanpa Kategori</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $blog->created_at->format('d M Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-8 text-center text-gray-400">
                                Belum ada artikel yang diterbitkan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right: Quick Actions & Log -->
        <div class="space-y-6">
            
            <!-- Quick Actions -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <h2 class="font-bold text-gray-800 text-lg mb-4">Aksi Cepat</h2>
                <div class="grid grid-cols-2 gap-4">
                    <a href="{{ url('/admin/blogs') }}" class="flex flex-col items-center justify-center p-4 bg-brand-light/20 hover:bg-brand-light/40 text-brand-dark rounded-xl transition-colors border border-brand-light/30 text-center">
                        <i class="fas fa-newspaper text-2xl mb-2 text-brand-accent"></i>
                        <span class="text-xs font-semibold">Tulis Artikel</span>
                    </a>
                    <a href="{{ url('/admin/categories') }}" class="flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 text-blue-800 rounded-xl transition-colors border border-blue-100 text-center">
                        <i class="fas fa-tags text-2xl mb-2 text-blue-500"></i>
                        <span class="text-xs font-semibold">Kategori Baru</span>
                    </a>
                    <a href="{{ url('/admin/products') }}" class="flex flex-col items-center justify-center p-4 bg-amber-50 hover:bg-amber-100 text-amber-800 rounded-xl transition-colors border border-amber-100 text-center">
                        <i class="fas fa-box text-2xl mb-2 text-amber-500"></i>
                        <span class="text-xs font-semibold">Tambah Produk</span>
                    </a>
                    <a href="{{ url('/admin/users') }}" class="flex flex-col items-center justify-center p-4 bg-purple-50 hover:bg-purple-100 text-purple-800 rounded-xl transition-colors border border-purple-100 text-center">
                        <i class="fas fa-users-cog text-2xl mb-2 text-purple-500"></i>
                        <span class="text-xs font-semibold">Kelola User</span>
                    </a>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <h2 class="font-bold text-gray-800 text-lg mb-4">Aktivitas Terkini</h2>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="mt-1 w-2 h-2 rounded-full bg-green-500 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800"><span class="font-semibold">Sistem</span> aktif dan berjalan normal.</p>
                            <span class="text-xs text-gray-400">Baru saja</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
