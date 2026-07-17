{{-- POPUP: Tambah User --}}
<div id="create-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="fixed inset-0 bg-gray-900/50 transition-opacity" onclick="closeCreateModal()"></div>

        <div class="relative bg-white rounded-2xl max-w-lg w-full p-8 shadow-2xl text-left z-10">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Tambah User Baru</h3>
                    <p class="text-xs text-gray-400 mt-1">Isi form berikut untuk membuat akun baru.</p>
                </div>
                <button onclick="closeCreateModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <form action="{{ url('/admin/users') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                        placeholder="Masukkan nama lengkap..." required>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none"
                        placeholder="contoh@email.com" required>
                </div>

                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                    <select id="role" name="role"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none" required>
                        <option value="" disabled selected>-- Pilih Role --</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none pr-10"
                                placeholder="Min. 8 karakter" required>
                            <button type="button" onclick="togglePassword('password', 'eye-create-1')" class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600">
                                <i id="eye-create-1" class="fas fa-eye text-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                        <div class="relative">
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none pr-10"
                                placeholder="Ulangi password" required>
                            <button type="button" onclick="togglePassword('password_confirmation', 'eye-create-2')" class="absolute right-3 top-3.5 text-gray-400 hover:text-gray-600">
                                <i id="eye-create-2" class="fas fa-eye text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex gap-3 justify-end pt-2">
                    <button type="button" onclick="closeCreateModal()"
                        class="px-5 py-2.5 rounded-xl border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-6 py-2.5 rounded-xl bg-brand-dark hover:bg-[#16503e] text-white font-bold text-sm shadow-md transition-colors flex items-center gap-2">
                        <i class="fas fa-user-plus text-xs"></i> Tambah User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
