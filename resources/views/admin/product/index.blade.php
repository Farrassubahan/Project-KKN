@extends('layouts.admin')

@section('title', 'Manajemen Produk Daur Ulang')
@section('page_title', 'Manajemen Produk Daur Ulang')

@section('breadcrumb')
    <a href="{{ url('/admin/dashboard') }}" class="hover:text-brand-accent transition-colors">Dashboard</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-brand-accent">Manajemen Produk</span>
@endsection

@section('content')

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl text-sm mb-6 flex items-center gap-3 shadow-sm">
            <i class="fas fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl text-sm mb-6 shadow-sm">
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

    {{-- Table Card --}}
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="font-bold text-gray-800 text-lg">Daftar Produk</h2>
                <p class="text-xs text-gray-500 mt-1">Kelola barang hasil daur ulang bernilai jual dari nasabah bank sampah.</p>
            </div>
            <button onclick="openCreateModal()"
                class="bg-brand-dark text-white font-bold px-5 py-2.5 rounded-xl hover:bg-[#16503e] hover:shadow-md transition-all flex items-center gap-2 text-sm">
                <i class="fas fa-plus"></i> Tambah Produk
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 font-medium w-24">Foto</th>
                        <th class="px-6 py-4 font-medium">Nama Produk</th>
                        <th class="px-6 py-4 font-medium">Harga</th>
                        <th class="px-6 py-4 font-medium">Link E-Commerce</th>
                        <th class="px-6 py-4 font-medium text-right w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($products as $product)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                @if($product->foto)
                                    <img src="{{ asset('products/' . $product->foto) }}" alt="Foto Produk"
                                        class="w-16 h-12 rounded-lg object-cover border border-gray-100 shadow-sm">
                                @else
                                    <div class="w-16 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 border border-gray-100">
                                        <i class="fas fa-image text-xs"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800">{{ $product->name }}</div>
                                <div class="text-xs text-gray-400 mt-0.5 line-clamp-1 max-w-xs">{{ $product->deskripsi ?? 'Tidak ada deskripsi' }}</div>
                            </td>
                            <td class="px-6 py-4 text-gray-700 font-semibold">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                @if($product->link_ecommerce)
                                    <a href="{{ $product->link_ecommerce }}" target="_blank"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-orange-50 text-orange-600 hover:bg-orange-100 hover:text-orange-700 rounded-full text-xs font-semibold transition-all">
                                        <i class="fas fa-shopping-cart text-[10px]"></i> Buka Toko
                                    </a>
                                @else
                                    <span class="text-xs text-gray-400">Belum diset</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        onclick="openEditModal(this)"
                                        data-id="{{ $product->id }}"
                                        data-name="{{ $product->name }}"
                                        data-harga="{{ $product->harga }}"
                                        data-link="{{ $product->link_ecommerce }}"
                                        data-deskripsi="{{ $product->deskripsi }}"
                                        data-foto="{{ $product->foto ? asset('products/' . $product->foto) : '' }}"
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-brand-accent hover:text-brand-accent hover:bg-green-50/30 transition-all flex items-center justify-center"
                                        title="Edit">
                                        <i class="fas fa-edit text-xs"></i>
                                    </button>

                                    <form action="{{ url('/admin/products/' . $product->id) }}" method="POST" onsubmit="confirmDelete(event, this);" class="inline">
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
                            <td colspan="5" class="px-6 py-16 text-center text-gray-400">
                                <div class="flex flex-col items-center gap-3">
                                    <i class="fas fa-box-open text-5xl opacity-30"></i>
                                    <span class="font-medium">Belum ada data produk daur ulang.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- Include Popups --}}
    @include('admin.product.popup-create')
    @include('admin.product.popup-edit')

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
        const name = button.getAttribute('data-name');
        const harga = button.getAttribute('data-harga');
        const linkEcommerce = button.getAttribute('data-link');
        const deskripsi = button.getAttribute('data-deskripsi');
        const fotoUrl = button.getAttribute('data-foto');

        const form = document.getElementById('edit-form');
        form.action = `/admin/products/${id}`;
        
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-harga').value = harga;
        document.getElementById('edit-link_ecommerce').value = linkEcommerce || '';
        document.getElementById('edit-deskripsi').value = deskripsi || '';
        
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
</script>
@endsection