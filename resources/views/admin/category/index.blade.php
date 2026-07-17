@extends('layouts.admin')

@section('title', 'Kategori Artikel')
@section('page_title', 'Manajemen Kategori')

@section('breadcrumb')
    <a href="{{ url('/admin/dashboard') }}" class="hover:text-brand-accent transition-colors">Dashboard</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-brand-accent">Kategori</span>
@endsection

@section('content')
    
    <!-- Success Alert -->
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-600 px-5 py-4 rounded-2xl text-sm mb-6 flex items-center gap-3 shadow-sm">
            <i class="fas fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Validation Errors -->
    @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-600 px-5 py-4 rounded-2xl text-sm mb-6 shadow-sm">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-exclamation-circle text-lg"></i>
                <span class="font-bold">Terjadi Kesalahan:</span>
            </div>
            <ul class="list-disc pl-6 space-y-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Table Container -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="font-bold text-gray-800 text-lg">Daftar Kategori</h2>
                <p class="text-xs text-gray-500 mt-1">Mengelompokkan konten edukasi dan kegiatan warga.</p>
            </div>
            <button onclick="openCreateModal()" class="bg-brand-dark text-white font-bold px-5 py-2.5 rounded-xl hover:bg-[#16503e] hover:shadow-md transition-all flex items-center gap-2 text-sm">
                <i class="fas fa-plus"></i> Tambah Kategori
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 font-medium w-16">No</th>
                        <th class="px-6 py-4 font-medium">Nama Kategori</th>
                        <th class="px-6 py-4 font-medium">Slug</th>
                        <th class="px-6 py-4 font-medium">Jumlah Artikel</th>
                        <th class="px-6 py-4 font-medium text-right w-36">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($categories as $index => $category)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 font-medium text-gray-500">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-800">{{ $category->nama }}</td>
                            <td class="px-6 py-4 text-gray-500 font-mono text-xs">{{ $category->slug }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full text-xs font-semibold">
                                    {{ $category->blogs_count ?? 0 }} Artikel
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button 
                                        onclick="openEditModal({{ $category->id }}, '{{ addslashes($category->nama) }}')" 
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50/30 transition-all flex items-center justify-center"
                                        title="Edit"
                                    >
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    
                                    <form action="{{ url('/admin/categories/' . $category->id) }}" method="POST" onsubmit="confirmDelete(event, this);" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button 
                                            type="submit" 
                                            class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-red-500 hover:text-red-500 hover:bg-red-50/30 transition-all flex items-center justify-center"
                                            title="Hapus"
                                        >
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-400">
                                <div class="flex flex-col items-center gap-3">
                                    <i class="fas fa-folder-open text-4xl"></i>
                                    <span>Belum ada data kategori.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- CREATE MODAL -->
    <div id="create-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen p-4 text-center">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-gray-900/50 transition-opacity" onclick="closeCreateModal()"></div>

            <!-- Modal Content -->
            <div class="relative bg-white rounded-2xl max-w-md w-full p-8 shadow-2xl border border-white/10 transform transition-all text-left">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Tambah Kategori Baru</h3>
                    <button onclick="closeCreateModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <form action="{{ url('/admin/categories') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>
                        <input type="text" id="nama" name="nama" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none" placeholder="Contoh: Edukasi Lingkungan" required>
                    </div>

                    <div class="flex gap-3 justify-end pt-4">
                        <button type="button" onclick="closeCreateModal()" class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                            Batal
                        </button>
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors">
                            Simpan Kategori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div id="edit-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen p-4 text-center">
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-gray-900/50 transition-opacity" onclick="closeEditModal()"></div>

            <!-- Modal Content -->
            <div class="relative bg-white rounded-2xl max-w-md w-full p-8 shadow-2xl border border-white/10 transform transition-all text-left">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Ubah Kategori</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <form id="edit-form" action="" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="edit-nama" class="block text-sm font-medium text-gray-700 mb-2">Nama Kategori</label>
                        <input type="text" id="edit-nama" name="nama" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none" placeholder="Nama Kategori" required>
                    </div>

                    <div class="flex gap-3 justify-end pt-4">
                        <button type="button" onclick="closeEditModal()" class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                            Batal
                        </button>
                        <button type="submit" class="px-5 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        // Modal Create Functions
        function openCreateModal() {
            document.getElementById('create-modal').classList.remove('hidden');
        }

        function closeCreateModal() {
            document.getElementById('create-modal').classList.add('hidden');
        }

        // Modal Edit Functions
        function openEditModal(id, name) {
            const form = document.getElementById('edit-form');
            form.action = `{{ url('/admin/categories') }}/${id}`;
            document.getElementById('edit-nama').value = name;
            document.getElementById('edit-modal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
        }
    </script>
@endsection
