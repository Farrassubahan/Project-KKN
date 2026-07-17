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
                <h3 class="text-3xl font-bold text-gray-800">24</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="far fa-newspaper"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Kategori</p>
                <h3 class="text-3xl font-bold text-gray-800">8</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-green-50 text-green-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-tags"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Pengunjung Hari Ini</p>
                <h3 class="text-3xl font-bold text-gray-800">142</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                <i class="fas fa-chart-line"></i>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex items-center justify-between group hover:shadow-md transition-shadow">
            <div>
                <p class="text-sm font-medium text-gray-500 mb-1">Admin Aktif</p>
                <h3 class="text-3xl font-bold text-gray-800">3</h3>
            </div>
            <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
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
                <a href="#" class="text-sm text-brand-accent hover:text-brand-dark font-medium">Lihat Semua</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-medium">Judul</th>
                            <th class="px-6 py-4 font-medium">Kategori</th>
                            <th class="px-6 py-4 font-medium">Tanggal</th>
                            <th class="px-6 py-4 font-medium text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100">
                        <!-- Dummy Row 1 -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=100&q=80" class="w-10 h-10 rounded-lg object-cover" alt="Thumb">
                                    <span class="font-medium text-gray-800 truncate max-w-[200px]">Sosialisasi Pemilahan Sampah Sukses Digelar...</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">Kegiatan</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500">17 Jul 2026</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-gray-400 hover:text-blue-500 mx-1"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-400 hover:text-red-500 mx-1"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Dummy Row 2 -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-gray-200 flex items-center justify-center text-gray-400"><i class="fas fa-image"></i></div>
                                    <span class="font-medium text-gray-800 truncate max-w-[200px]">Cara Membuat Kompos dari Daun Kering</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-green-50 text-green-600 rounded-full text-xs font-medium">Edukasi</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500">15 Jul 2026</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-gray-400 hover:text-blue-500 mx-1"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-400 hover:text-red-500 mx-1"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <!-- Dummy Row 3 -->
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=100&q=80" class="w-10 h-10 rounded-lg object-cover" alt="Thumb">
                                    <span class="font-medium text-gray-800 truncate max-w-[200px]">Bahaya Membakar Sampah Plastik</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 bg-red-50 text-red-600 rounded-full text-xs font-medium">Peringatan</span>
                            </td>
                            <td class="px-6 py-4 text-gray-500">10 Jul 2026</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-gray-400 hover:text-blue-500 mx-1"><i class="fas fa-edit"></i></button>
                                <button class="text-gray-400 hover:text-red-500 mx-1"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
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
                    <button class="flex flex-col items-center justify-center p-4 bg-brand-light/20 hover:bg-brand-light/40 text-brand-dark rounded-xl transition-colors border border-brand-light/30">
                        <i class="fas fa-plus-circle text-2xl mb-2 text-brand-accent"></i>
                        <span class="text-xs font-semibold">Tulis Artikel</span>
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 text-blue-800 rounded-xl transition-colors border border-blue-100">
                        <i class="fas fa-folder-plus text-2xl mb-2 text-blue-500"></i>
                        <span class="text-xs font-semibold">Kategori Baru</span>
                    </button>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                <h2 class="font-bold text-gray-800 text-lg mb-4">Aktivitas Terkini</h2>
                <div class="space-y-5">
                    <div class="flex gap-4">
                        <div class="mt-1 w-2 h-2 rounded-full bg-green-500 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800"><span class="font-semibold">Admin Utama</span> menerbitkan artikel baru.</p>
                            <span class="text-xs text-gray-400">2 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="mt-1 w-2 h-2 rounded-full bg-blue-500 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800"><span class="font-semibold">Admin Dua</span> memperbarui kategori edukasi.</p>
                            <span class="text-xs text-gray-400">5 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="mt-1 w-2 h-2 rounded-full bg-yellow-500 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-gray-800"><span class="font-semibold">Sistem</span> melakukan backup database mingguan.</p>
                            <span class="text-xs text-gray-400">1 hari yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
