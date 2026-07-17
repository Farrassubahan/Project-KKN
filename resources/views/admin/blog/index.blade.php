@extends('layouts.admin')

@section('title', 'Artikel & Berita')
@section('page_title', 'Manajemen Artikel')

@section('breadcrumb')
    <a href="{{ url('/admin/dashboard') }}" class="hover:text-brand-accent transition-colors">Dashboard</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-brand-accent">Artikel</span>
@endsection

@section('content')

    <!-- Success Alert -->
    @if (session('success'))
        <div
            class="bg-green-50 border border-green-200 text-green-600 px-5 py-4 rounded-2xl text-sm mb-6 flex items-center gap-3 shadow-sm">
            <i class="fas fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-600 px-5 py-4 rounded-2xl text-sm mb-6 shadow-sm">
            <div class="flex items-center gap-3 mb-2">
                <i class="fas fa-exclamation-circle text-lg"></i>
                <span class="font-bold">Terjadi Kesalahan:</span>
            </div>
            <ul class="list-disc pl-6 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Table Container -->
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div
            class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="font-bold text-gray-800 text-lg">Daftar Artikel</h2>
                <p class="text-xs text-gray-500 mt-1">Kelola publikasi berita, edukasi, dan dokumentasi KKN.</p>
            </div>
            <button onclick="openCreateModal()"
                class="bg-brand-dark text-white font-bold px-5 py-2.5 rounded-xl hover:bg-[#16503e] hover:shadow-md transition-all flex items-center gap-2 text-sm">
                <i class="fas fa-plus"></i> Tulis Artikel
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 font-medium w-24">Thumbnail</th>
                        <th class="px-6 py-4 font-medium">Judul</th>
                        <th class="px-6 py-4 font-medium">Kategori</th>
                        <th class="px-6 py-4 font-medium">Tanggal</th>
                        <th class="px-6 py-4 font-medium text-right w-36">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($blogs as $blog)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4">
                                @if ($blog->thumbnail)
                                    <img src="{{ asset('thumbnail/' . $blog->thumbnail) }}" alt="Thumb"
                                        class="w-14 h-10 rounded-lg object-cover border border-gray-100 shadow-sm">
                                @else
                                    <div
                                        class="w-14 h-10 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 border border-gray-100">
                                        <i class="fas fa-image text-xs"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="font-semibold text-gray-800 truncate max-w-[280px]" title="{{ $blog->judul }}">
                                    {{ $blog->judul }}
                                </div>
                                <div class="text-xs text-gray-400 font-mono mt-0.5 truncate max-w-[280px]">
                                    {{ $blog->slug }}</div>
                            </td>
                            <td class="px-6 py-4">
                                @if ($blog->category)
                                    <span
                                        class="px-2.5 py-1 bg-brand-light/30 text-brand-dark rounded-full text-xs font-semibold">
                                        {{ $blog->category->nama }}
                                    </span>
                                @else
                                    <span class="px-2.5 py-1 bg-gray-100 text-gray-400 rounded-full text-xs">Tanpa
                                        Kategori</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $blog->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        onclick="openEditModal({{ $blog->id }}, '{{ addslashes($blog->judul) }}', {{ $blog->category_id }}, '{{ addslashes($blog->isi) }}')"
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50/30 transition-all flex items-center justify-center"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button"
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-blue-500 hover:text-blue-500 hover:bg-blue-50/30 transition-all flex items-center justify-center"
                                        title="Lihat" onclick="openDetailModal(this)" data-title="{{ $blog->judul }}"
                                        data-thumbnail="{{ $blog->thumbnail ? asset('thumbnail/' . $blog->thumbnail) : '' }}"
                                        data-content="{{ addslashes($blog->isi) }}"
                                        data-category="{{ $blog->category ? $blog->category->nama : 'Tanpa Kategori' }}">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <form action="{{ url('/admin/blogs/' . $blog->id) }}" method="POST"
                                        onsubmit="confirmDelete(event, this);" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-red-500 hover:text-red-500 hover:bg-red-50/30 transition-all flex items-center justify-center"
                                            title="Hapus">
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
                                    <i class="fas fa-newspaper text-4xl"></i>
                                    <span>Belum ada artikel yang diterbitkan.</span>
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
            <div
                class="relative bg-white rounded-2xl max-w-lg w-full p-8 shadow-2xl border border-white/10 transform transition-all text-left">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Tulis Artikel Baru</h3>
                    <button onclick="closeCreateModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <form action="{{ url('/admin/blogs') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Artikel</label>
                        <input type="text" id="judul" name="judul"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                            placeholder="Masukkan judul menarik..." required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="category_id" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                            <select id="category_id" name="category_id"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                                required>
                                <option value="" disabled selected>Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Foto
                                Thumbnail</label>
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/*"
                                class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                                required onchange="previewThumbnail(event, 'thumbnail-preview-create')">
                            <div class="mt-2" id="thumbnail-preview-create" style="display:none;">
                                <img src="" alt="Preview"
                                    class="max-w-full h-32 object-cover rounded-md border border-gray-200" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="isi" class="block text-sm font-medium text-gray-700 mb-2">Isi Artikel</label>
                        {{-- <textarea id="isi" name="isi" rows="6" class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none resize-none" placeholder="Tuliskan detail berita/artikel di sini..." required></textarea> --}}
                        <textarea id="isi" name="isi" rows="12"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none resize-y"
                            placeholder="Tuliskan detail berita/artikel di sini..." required></textarea>
                    </div>

                    <div class="flex gap-3 justify-end pt-4">
                        <button type="button" onclick="closeCreateModal()"
                            class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-5 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors">
                            Terbitkan Artikel
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
            <div
                class="relative bg-white rounded-2xl max-w-lg w-full p-8 shadow-2xl border border-white/10 transform transition-all text-left">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-bold text-gray-800">Ubah Artikel</h3>
                    <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <form id="edit-form" action="" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="edit-judul" class="block text-sm font-medium text-gray-700 mb-2">Judul Artikel</label>
                        <input type="text" id="edit-judul" name="judul"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                            required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="edit-category_id"
                                class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                            <select id="edit-category_id" name="category_id"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                                required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="edit-thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Foto
                                Thumbnail <span class="text-xs text-gray-400">(Opsional)</span></label>
                            <input type="file" id="edit-thumbnail" name="thumbnail" accept="image/*"
                                class="w-full px-3 py-2 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                                onchange="previewThumbnail(event, 'thumbnail-preview-edit')">
                            <div class="mt-2" id="thumbnail-preview-edit" style="display:none;">
                                <img src="" alt="Preview"
                                    class="max-w-full h-32 object-cover rounded-md border border-gray-200" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="edit-isi" class="block text-sm font-medium text-gray-700 mb-2">Isi Artikel</label>
                        <textarea id="edit-isi" name="isi" rows="12"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none resize-y"
                            placeholder="Edit konten artikel..." required></textarea>
                    </div>

                    <div class="flex gap-3 justify-end pt-4">
                        <button type="button" onclick="closeEditModal()"
                            class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                            Batal
                        </button>
                        <button type="submit"
                            class="px-5 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DETAIL MODAL -->
    <div id="detail-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen p-4 text-center">
            <div class="fixed inset-0 bg-gray-900/50 transition-opacity" onclick="closeDetailModal()"></div>
            <div
                class="relative bg-white rounded-2xl max-w-2xl w-full p-8 shadow-2xl border border-white/10 transform transition-all text-left">
                <div class="flex justify-between items-center mb-6">
                    <h3 id="detail-title" class="text-2xl font-bold text-gray-800"></h3>
                    <button onclick="closeDetailModal()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>
                <div id="detail-thumbnail" class="mb-4 text-center"></div>
                <div id="detail-category" class="mb-2 text-sm text-gray-600"></div>
                <div id="detail-content" class="prose max-w-none"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@section('scripts')
    <script>
        function previewThumbnail(event, previewId) {
            const file = event.target.files[0];
            if (!file) return;

            const preview = document.getElementById(previewId);
            const img = preview.querySelector('img');

            img.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }

        function openCreateModal() {
            document.getElementById('create-modal').classList.remove('hidden');
        }

        function closeCreateModal() {
            document.getElementById('create-modal').classList.add('hidden');
        }

        function openDetailModal(btn) {
            document.getElementById('detail-title').textContent = btn.dataset.title;
            document.getElementById('detail-category').textContent = 'Kategori: ' + btn.dataset.category;

            const thumb = document.getElementById('detail-thumbnail');

            if (btn.dataset.thumbnail) {
                thumb.innerHTML = `<img src="${btn.dataset.thumbnail}" class="max-w-full h-48 object-cover rounded-md">`;
            } else {
                thumb.innerHTML = '';
            }

            document.getElementById('detail-content').innerHTML = btn.dataset.content;
            document.getElementById('detail-modal').classList.remove('hidden');
        }

        function closeDetailModal() {
            document.getElementById('detail-modal').classList.add('hidden');
        }

        function openEditModal(id, judul, categoryId, isi) {

            document.getElementById('edit-form').action =
                `{{ url('/admin/blogs') }}/${id}`;

            document.getElementById('edit-judul').value = judul;
            document.getElementById('edit-category_id').value = categoryId;
            document.getElementById('edit-isi').value = isi;

            document.getElementById('edit-modal').classList.remove('hidden');
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
        }
    </script>
@endsection

@endsection
