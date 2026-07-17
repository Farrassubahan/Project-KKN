<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - KKN Mulangsari</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/logo-mulangsari.png') }}" type="image/x-icon">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: '#f3f4f6', // light gray background for admin
                            dark: '#0f3c2e', // dark green sidebar
                            light: '#bce474',
                            accent: '#189a61',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 h-screen flex overflow-hidden">

    <!-- Mobile sidebar backdrop -->
    <div id="sidebar-backdrop" class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden hidden transition-opacity" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-brand-dark text-white flex flex-col transition-transform duration-300 transform -translate-x-full lg:translate-x-0 lg:static lg:flex-shrink-0 shadow-2xl lg:shadow-none">
        
        <!-- Sidebar Header -->
        <div class="h-20 flex items-center justify-between px-6 border-b border-white/10">
            <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-3">
                <div class="bg-white p-1 rounded-lg">
                    <img src="{{ asset('assets/logo-mulangsari.png') }}" alt="Logo" class="h-8 w-auto">
                </div>
                <div class="flex flex-col leading-tight">
                    <span class="font-bold text-sm tracking-wider text-white">MULANGSARI</span>
                    <span class="font-bold text-xs tracking-widest text-brand-light">ADMIN</span>
                </div>
            </a>
            <!-- Close mobile sidebar -->
            <button class="lg:hidden text-gray-400 hover:text-white" onclick="toggleSidebar()">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <!-- User Profile (Sidebar) -->
        <div class="p-6 border-b border-white/5 bg-black/10">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-brand-accent flex items-center justify-center text-xl font-bold shadow-inner">
                    A
                </div>
                <div class="flex flex-col">
                    <span class="text-sm font-bold">Admin Utama</span>
                    <span class="text-xs text-gray-400 flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-brand-light"></span> Online</span>
                </div>
            </div>
        </div>

        <!-- Sidebar Navigation -->
        <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-1">
            <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Menu Utama</p>
            
            <a href="{{ url('/admin/dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/dashboard') ? 'bg-brand-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <i class="fas fa-home w-5 text-center"></i>
                <span class="text-sm font-medium">Dashboard</span>
            </a>

            <a href="{{ url('/admin/categories') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/categories*') ? 'bg-brand-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <i class="fas fa-tags w-5 text-center"></i>
                <span class="text-sm font-medium">Kategori Blog</span>
            </a>

            <a href="{{ url('/admin/blogs') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/blogs*') ? 'bg-brand-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <i class="fas fa-newspaper w-5 text-center"></i>
                <span class="text-sm font-medium">Artikel / Berita</span>
            </a>

            <a href="{{ url('/admin/products') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/products*') ? 'bg-brand-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <i class="fas fa-box w-5 text-center"></i>
                <span class="text-sm font-medium">Produk Daur Ulang</span>
            </a>

            <p class="px-4 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 mt-6">Pengaturan</p>

            <a href="{{ url('/admin/users') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all {{ request()->is('admin/users*') ? 'bg-brand-accent text-white shadow-md' : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                <i class="fas fa-users w-5 text-center"></i>
                <span class="text-sm font-medium">Manajemen User</span>
            </a>
        </nav>


        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-white/10">
            <a href="{{ url('/') }}" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all text-gray-300 hover:bg-white/10 hover:text-white mb-2">
                <i class="fas fa-globe w-5 text-center"></i>
                <span class="text-sm font-medium">Lihat Website</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all text-red-400 hover:bg-red-500/20 hover:text-red-300">
                <i class="fas fa-sign-out-alt w-5 text-center"></i>
                <span class="text-sm font-medium">Logout</span>
            </a>
        </div>
    </aside>

    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col min-w-0 h-screen overflow-hidden">
        
        <!-- Top Navbar -->
        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-6 z-10 flex-shrink-0">
            <!-- Mobile Menu Button -->
            <button class="lg:hidden text-gray-500 hover:text-brand-dark focus:outline-none p-2 rounded-lg hover:bg-gray-100 transition-colors" onclick="toggleSidebar()">
                <i class="fas fa-bars text-xl"></i>
            </button>

            <!-- Search bar (Desktop) -->
            <div class="hidden md:flex items-center bg-gray-100 rounded-full px-4 py-2 w-96 border border-transparent focus-within:bg-white focus-within:border-brand-accent focus-within:shadow-sm transition-all">
                <i class="fas fa-search text-gray-400"></i>
                <input type="text" placeholder="Cari data..." class="bg-transparent border-none outline-none pl-3 w-full text-sm text-gray-700 placeholder-gray-400">
            </div>

            <!-- Right Navbar Items -->
            <div class="flex items-center gap-4 ml-auto">
                <button class="relative p-2 text-gray-400 hover:text-brand-dark transition-colors">
                    <i class="far fa-bell text-xl"></i>
                    <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
                </button>
                
                <div class="h-8 w-px bg-gray-200 mx-2"></div>
                
                <div class="flex items-center gap-3 cursor-pointer group">
                    <img src="https://ui-avatars.com/api/?name=Admin+Utama&background=bce474&color=0f3c2e" alt="Avatar" class="w-10 h-10 rounded-full shadow-sm">
                    <div class="hidden md:flex flex-col text-right">
                        <span class="text-sm font-bold text-gray-800 group-hover:text-brand-accent transition-colors">Admin Utama</span>
                        <span class="text-xs text-gray-500">Administrator</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs text-gray-400 ml-1"></i>
                </div>
            </div>
        </header>

        <!-- Main Content Scrollable Area -->
        <main class="flex-1 overflow-y-auto bg-[#f8f9fa] p-6 lg:p-10 relative">
            
            <!-- Breadcrumbs / Page Title -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-800">@yield('page_title', 'Dashboard')</h1>
                @if(View::hasSection('breadcrumb'))
                    <nav class="flex text-sm text-gray-500 mt-2">
                        @yield('breadcrumb')
                    </nav>
                @endif
            </div>

            <!-- Yield Content -->
            @yield('content')

            <!-- Footer -->
            <footer class="mt-12 text-center text-sm text-gray-400 pb-4">
                &copy; {{ date('Y') }} KKN Desa Mulangsari. Dibuat dengan <i class="fas fa-heart text-red-400 text-xs mx-1"></i> untuk lingkungan yang lebih baik.
            </footer>
        </main>
    </div>

    <!-- Script for Sidebar -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        let isSidebarOpen = false;

        function toggleSidebar() {
            isSidebarOpen = !isSidebarOpen;
            if(isSidebarOpen) {
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.remove('hidden');
                // Small delay to allow display:block to apply before animating opacity
                setTimeout(() => {
                    backdrop.classList.add('opacity-100');
                    backdrop.classList.remove('opacity-0');
                }, 10);
            } else {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                }, 300);
            }
        }

        // Global SweetAlert2 delete confirmation
        function confirmDelete(event, form) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0f3c2e',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                borderRadius: '1rem',
                customClass: {
                    popup: 'rounded-3xl',
                    confirmButton: 'rounded-xl font-bold px-5 py-2.5',
                    cancelButton: 'rounded-xl font-bold px-5 py-2.5'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>
    
    @yield('scripts')
</body>
</html>
