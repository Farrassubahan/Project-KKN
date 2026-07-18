@extends('layouts.admin')

@section('title', 'Manajemen Kegiatan')
@section('page_title', 'Kegiatan Warga & KKN')

@section('breadcrumb')
    <a href="{{ url('/admin/dashboard') }}" class="hover:text-brand-accent transition-colors">Dashboard</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-brand-accent">Kegiatan</span>
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
                <h2 class="text-lg font-bold text-gray-800">Daftar Kegiatan</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola data dokumentasi kegiatan desa dan KKN.</p>
            </div>
            <button onclick="openCreateModal()" class="inline-flex items-center gap-2 bg-brand-dark text-white px-5 py-2.5 rounded-xl text-sm font-semibold hover:bg-[#16503e] hover:-translate-y-0.5 transition-all shadow-sm">
                <i class="fas fa-plus"></i>
                Tambah Kegiatan
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 font-medium">Kegiatan</th>
                        <th class="px-6 py-4 font-medium">Kategori & Tipe</th>
                        <th class="px-6 py-4 font-medium">Tanggal & Lokasi</th>
                        <th class="px-6 py-4 font-medium text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($activities as $item)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-xl bg-gray-100 flex-shrink-0 overflow-hidden border border-gray-200">
                                        @if($item->foto)
                                            <img src="{{ asset('activities/' . $item->foto) }}" class="w-full h-full object-cover" alt="Thumb">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-gray-400">
                                                <i class="fas fa-image text-xl"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800 text-base mb-1 line-clamp-1">{{ $item->judul }}</p>
                                        <p class="text-xs text-gray-500 line-clamp-1 max-w-[250px]">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-2 items-start">
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-600 border border-blue-100">
                                        {{ $item->category }}
                                    </span>
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium {{ $item->tipe === 'warga' ? 'bg-amber-50 text-amber-600 border-amber-100' : 'bg-green-50 text-green-600 border-green-100' }}">
                                        {{ $item->tipe === 'warga' ? 'Kegiatan Warga' : 'Kelompok KKN' }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-1">
                                    <span class="text-gray-800 font-medium whitespace-nowrap"><i class="far fa-calendar-alt text-brand-accent mr-1.5 w-3 text-center"></i> {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>
                                    <span class="text-gray-500 text-xs"><i class="fas fa-map-marker-alt text-gray-400 mr-1.5 w-3 text-center"></i> {{ $item->lokasi }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        onclick="openEditModal(this)"
                                        data-id="{{ $item->id }}"
                                        data-judul="{{ $item->judul }}"
                                        data-tipe="{{ $item->tipe }}"
                                        data-category="{{ $item->category }}"
                                        data-tanggal="{{ $item->tanggal }}"
                                        data-lokasi="{{ $item->lokasi }}"
                                        data-deskripsi="{{ $item->deskripsi }}"
                                        data-foto="{{ $item->foto ? asset('activities/' . $item->foto) : '' }}"
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-brand-accent hover:text-brand-accent hover:bg-green-50/30 transition-all flex items-center justify-center"
                                        title="Edit">
                                        <i class="fas fa-edit text-xs"></i>
                                    </button>

                                    <form action="{{ url('/admin/activities/' . $item->id) }}" method="POST" onsubmit="confirmDelete(event, this);" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-red-500 hover:text-red-500 hover:bg-red-50/30 transition-all flex items-center justify-center"
                                            title="Hapus">
                                            <i class="fas fa-trash-alt text-xs"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-16 text-center text-gray-400">
                                <div class="flex flex-col items-center gap-3">
                                    <i class="fas fa-folder-open text-5xl opacity-30"></i>
                                    <span class="font-medium">Belum ada data kegiatan.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Include Popups --}}
    @include('admin.activity.popup-create')
    @include('admin.activity.popup-edit')

@endsection

@section('scripts')
<script>
    // Preview image before uploading
    function previewImage(event, containerId, imgId) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById(imgId);
                img.src = e.target.result;
                document.getElementById(containerId).classList.remove('hidden');
                document.getElementById(containerId).classList.add('block');
            };
            reader.readAsDataURL(file);
        }
    }

    // Modal Create Functions
    function openCreateModal() {
        document.getElementById('create-modal').classList.remove('hidden');
    }
    function closeCreateModal() {
        document.getElementById('create-modal').classList.add('hidden');
    }

    // Modal Edit Functions
    function openEditModal(button) {
        const id = button.getAttribute('data-id');
        const judul = button.getAttribute('data-judul');
        const tipe = button.getAttribute('data-tipe');
        const category = button.getAttribute('data-category');
        const tanggal = button.getAttribute('data-tanggal');
        const lokasi = button.getAttribute('data-lokasi');
        const deskripsi = button.getAttribute('data-deskripsi');
        const fotoUrl = button.getAttribute('data-foto');

        const form = document.getElementById('edit-form');
        form.action = `/admin/activities/${id}`;
        
        document.getElementById('edit-judul').value = judul;
        document.getElementById('edit-tipe').value = tipe;
        document.getElementById('edit-category').value = category;
        document.getElementById('edit-tanggal').value = tanggal;
        document.getElementById('edit-lokasi').value = lokasi;
        document.getElementById('edit-deskripsi').value = deskripsi;
        
        const previewImg = document.getElementById('preview-edit');
        if (fotoUrl) {
            previewImg.src = fotoUrl;
            document.getElementById('preview-edit-container').classList.remove('hidden');
            document.getElementById('preview-edit-container').classList.add('block');
        } else {
            previewImg.src = '';
            document.getElementById('preview-edit-container').classList.add('hidden');
        }
        
        document.getElementById('edit-modal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('edit-modal').classList.add('hidden');
    }

    // Delete Confirmation
    function confirmDelete(event, form) {
        event.preventDefault();
        Swal.fire({
            title: 'Hapus Kegiatan?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            shape: 'rounded-2xl'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
</script>
@endsection