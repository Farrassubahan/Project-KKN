{{-- POPUP: Edit Produk --}}
<div id="edit-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="fixed inset-0 bg-gray-900/50 transition-opacity" onclick="closeEditModal()"></div>

        <div class="relative bg-white rounded-2xl max-w-lg w-full p-8 shadow-2xl text-left z-10">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Edit Produk</h3>
                    <p class="text-xs text-gray-400 mt-1">Ubah spesifikasi atau detail produk daur ulang</p>
                </div>
                <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <form id="edit-form" action="" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')

                <div>
                    <label for="edit-name" class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
                    <input type="text" id="edit-name" name="name"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                        required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="edit-harga" class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp)</label>
                        <input type="number" id="edit-harga" name="harga" min="0"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                            required>
                    </div>
                    <div>
                        <label for="edit-foto" class="block text-sm font-medium text-gray-700 mb-2">Ganti Foto <span class="text-xs text-gray-400">(Opsional)</span></label>
                        <input type="file" id="edit-foto" name="foto" accept="image/*"
                            class="w-full px-3 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                            onchange="previewImage(event, 'preview-edit-container', 'preview-edit')">
                    </div>
                </div>

                <div id="preview-edit-container" class="block">
                    <p class="text-xs text-gray-400 mb-2">Foto Saat Ini / Baru:</p>
                    <img id="preview-edit" src="" alt="Preview" class="w-full h-40 object-cover rounded-xl border border-gray-100">
                </div>

                <div>
                    <label for="edit-link_ecommerce" class="block text-sm font-medium text-gray-700 mb-2">Link E-Commerce (Shopee/Tokopedia dll)</label>
                    <input type="url" id="edit-link_ecommerce" name="link_ecommerce"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                        placeholder="https://shopee.co.id/product-link">
                </div>

                <div>
                    <label for="edit-deskripsi" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Produk</label>
                    <textarea id="edit-deskripsi" name="deskripsi" rows="4"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none resize-none"></textarea>
                </div>

                <div class="flex gap-3 justify-end pt-2">
                    <button type="button" onclick="closeEditModal()"
                        class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-6 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors flex items-center gap-2">
                        <i class="fas fa-save text-xs"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>