<!-- Create Activity Modal -->
<div id="create-modal" class="fixed inset-0 z-50 hidden bg-gray-900/50 backdrop-blur-sm overflow-y-auto w-full">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="relative bg-white rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-2xl w-full border border-gray-100">
            <!-- Modal Header -->
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-lg leading-6 font-bold text-gray-800">
                    Tambah Kegiatan Baru
                </h3>
                <button type="button" onclick="closeCreateModal()" class="text-gray-400 hover:text-gray-500 focus:outline-none transition-colors">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <form action="{{ url('/admin/activities') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="px-6 py-5 space-y-5">
                    
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Kegiatan <span class="text-red-500">*</span></label>
                        <input type="text" name="judul" id="judul" required
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm"
                            placeholder="Contoh: Kerja Bakti Desa">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="tipe" class="block text-sm font-medium text-gray-700 mb-1">Pelaksana <span class="text-red-500">*</span></label>
                            <select name="tipe" id="tipe" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23131313%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-no-repeat bg-[length:10px_10px] bg-[right_1rem_center]">
                                <option value="warga">Kegiatan Warga</option>
                                <option value="kkn">Kelompok KKN</option>
                            </select>
                        </div>
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Kategori Kegiatan <span class="text-red-500">*</span></label>
                            <input type="text" name="category" id="category" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm"
                                placeholder="Contoh: Gotong Royong">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kegiatan <span class="text-red-500">*</span></label>
                            <input type="date" name="tanggal" id="tanggal" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm">
                        </div>
                        <div>
                            <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-1">Lokasi <span class="text-red-500">*</span></label>
                            <input type="text" name="lokasi" id="lokasi" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm"
                                placeholder="Contoh: Balai Desa">
                        </div>
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Lengkap <span class="text-red-500">*</span></label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" required
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-brand-accent/20 focus:border-brand-accent transition-all text-sm"
                            placeholder="Jelaskan detail kegiatan..."></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Foto Dokumentasi</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-brand-accent transition-colors group relative overflow-hidden bg-gray-50">
                            
                            <div class="space-y-2 text-center relative z-10">
                                <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center text-brand-accent shadow-sm">
                                    <i class="fas fa-image text-xl"></i>
                                </div>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="foto-create" class="relative cursor-pointer bg-white rounded-md font-medium text-brand-accent hover:text-brand-dark focus-within:outline-none">
                                        <span>Upload foto</span>
                                        <input id="foto-create" name="foto" type="file" class="sr-only" accept="image/*" onchange="previewImage(event, 'preview-create-container', 'preview-create')">
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, WEBP up to 5MB</p>
                            </div>

                            <!-- Preview Container -->
                            <div id="preview-create-container" class="hidden absolute inset-0 z-20 bg-white">
                                <img id="preview-create" src="" alt="Preview" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                    <label for="foto-create" class="cursor-pointer bg-white text-gray-800 px-4 py-2 rounded-lg text-sm font-bold shadow-lg hover:scale-105 transition-transform">
                                        Ganti Foto
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex justify-end gap-3 rounded-b-2xl">
                    <button type="button" onclick="closeCreateModal()" class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-100 hover:text-gray-800 font-medium text-sm transition-colors">
                        Batal
                    </button>
                    <button type="submit" class="px-5 py-2.5 rounded-xl bg-brand-dark text-white hover:bg-[#16503e] hover:-translate-y-0.5 shadow-sm font-medium text-sm transition-all flex items-center gap-2">
                        <i class="fas fa-save"></i>
                        Simpan Kegiatan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>