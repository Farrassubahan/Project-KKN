@extends('layouts.admin')

@section('title', 'Manajemen User')
@section('page_title', 'Manajemen User')

@section('breadcrumb')
    <a href="{{ url('/admin/dashboard') }}" class="hover:text-brand-accent transition-colors">Dashboard</a>
    <span class="mx-2 text-gray-400">/</span>
    <span class="text-brand-accent">Manajemen User</span>
@endsection

@section('content')

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-2xl text-sm mb-6 flex items-center gap-3 shadow-sm">
            <i class="fas fa-check-circle text-lg"></i>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-50 border border-red-200 text-red-700 px-5 py-4 rounded-2xl text-sm mb-6 flex items-center gap-3 shadow-sm">
            <i class="fas fa-exclamation-circle text-lg"></i>
            <span class="font-medium">{{ session('error') }}</span>
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
                <h2 class="font-bold text-gray-800 text-lg">Daftar Pengguna</h2>
                <p class="text-xs text-gray-500 mt-1">Kelola akun pengguna dan hak akses sistem.</p>
            </div>
            <button onclick="openCreateModal()"
                class="bg-brand-dark text-white font-bold px-5 py-2.5 rounded-xl hover:bg-[#16503e] hover:shadow-md transition-all flex items-center gap-2 text-sm">
                <i class="fas fa-user-plus"></i> Tambah User
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                        <th class="px-6 py-4 font-medium w-12">#</th>
                        <th class="px-6 py-4 font-medium">Nama</th>
                        <th class="px-6 py-4 font-medium">Email</th>
                        <th class="px-6 py-4 font-medium">Role</th>
                        <th class="px-6 py-4 font-medium">Dibuat</th>
                        <th class="px-6 py-4 font-medium text-right w-32">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">
                    @forelse($users as $index => $user)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-6 py-4 text-gray-400 font-mono text-xs">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-brand-accent/20 flex items-center justify-center text-brand-dark font-bold text-sm flex-shrink-0">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <span class="font-semibold text-gray-800">{{ $user->name }}</span>
                                    @if(auth()->id() === $user->id)
                                        <span class="px-2 py-0.5 bg-blue-100 text-blue-600 text-xs rounded-full font-medium">Anda</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                            <td class="px-6 py-4">
                                @if($user->role === 'admin')
                                    <span class="px-2.5 py-1 bg-brand-light/40 text-brand-dark rounded-full text-xs font-bold">
                                        <i class="fas fa-shield-alt mr-1 text-[10px]"></i>Admin
                                    </span>
                                @else
                                    <span class="px-2.5 py-1 bg-gray-100 text-gray-600 rounded-full text-xs font-semibold">
                                        <i class="fas fa-user mr-1 text-[10px]"></i>User
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-gray-500">{{ $user->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button
                                        onclick="openEditModal({{ $user->id }}, '{{ addslashes($user->name) }}', '{{ $user->email }}', '{{ $user->role }}')"
                                        class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-brand-accent hover:text-brand-accent hover:bg-green-50/30 transition-all flex items-center justify-center"
                                        title="Edit">
                                        <i class="fas fa-edit text-xs"></i>
                                    </button>

                                    @if(auth()->id() !== $user->id)
                                        <form action="{{ url('/admin/users/' . $user->id) }}" method="POST" onsubmit="confirmDelete(event, this);" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="w-9 h-9 rounded-lg border border-gray-200 text-gray-500 hover:border-red-500 hover:text-red-500 hover:bg-red-50/30 transition-all flex items-center justify-center"
                                                title="Hapus">
                                                <i class="fas fa-trash-alt text-xs"></i>
                                            </button>
                                        </form>
                                    @else
                                        <div class="w-9 h-9 rounded-lg border border-dashed border-gray-200 flex items-center justify-center text-gray-200" title="Tidak dapat menghapus akun sendiri">
                                            <i class="fas fa-lock text-xs"></i>
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-16 text-center text-gray-400">
                                <div class="flex flex-col items-center gap-3">
                                    <i class="fas fa-users text-5xl opacity-30"></i>
                                    <span class="font-medium">Belum ada data pengguna.</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($users->count() > 0)
            <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50 text-xs text-gray-400 flex items-center justify-between">
                <span>Total: <strong class="text-gray-600">{{ $users->count() }}</strong> pengguna</span>
                <span>Sistem hanya menampilkan pengguna aktif.</span>
            </div>
        @endif
    </div>

    {{-- Include Popups --}}
    @include('admin.user.popup-create')
    @include('admin.user.popup-edit')

@endsection

@section('scripts')
<script>
    function togglePassword(fieldId, iconId) {
        const field = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);
        if (field.type === 'password') {
            field.type = 'text';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            field.type = 'password';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }

    function openCreateModal() {
        document.getElementById('create-modal').classList.remove('hidden');
    }
    function closeCreateModal() {
        document.getElementById('create-modal').classList.add('hidden');
    }

    function openEditModal(id, name, email, role) {
        const form = document.getElementById('edit-form');
        form.action = '/admin/users/' + id;
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-role').value = role;
        document.getElementById('edit-password').value = '';
        document.getElementById('edit-password_confirmation').value = '';
        document.getElementById('edit-modal').classList.remove('hidden');
    }
    function closeEditModal() {
        document.getElementById('edit-modal').classList.add('hidden');
    }

    @if($errors->any())
        openCreateModal();
    @endif
</script>
@endsection
