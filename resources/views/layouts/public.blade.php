<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kebersihan Lingkungan Desa Mulangsari')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/logo-mulangsari.png') }}" type="image/x-icon">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            bg: '#fbfaf5', // cream background
                            dark: '#0f3c2e', // dark green text/button
                            light: '#bce474', // light green button/accent
                            accent: '#189a61', // bright green for italic text
                            gray: '#5b6b64', // muted text
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #fbfaf5;
            color: #0f3c2e;
        }

        /* Soft green gradient background for the right side of the screen */
        .bg-gradient-soft {
            background: radial-gradient(circle at 100% 20%, rgba(188, 228, 116, 0.15) 0%, rgba(251, 250, 245, 0) 50%);
        }
    </style>
</head>

<body class="font-sans antialiased flex flex-col min-h-screen relative bg-gradient-soft overflow-x-hidden">

    @if (!View::hasSection('hide_navbar'))
        <!-- Navigation Bar -->
        <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
            <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
                <div class="flex justify-between items-center h-24">

                    <!-- Logo -->
                    <a href="/" class="flex items-center gap-3 group">
                        <img src="{{ asset('assets/logo-mulangsari.png') }}" alt="Logo KKN Mulangsari"
                            class="h-12 w-auto object-contain drop-shadow-sm group-hover:scale-105 transition-transform">
                        <div class="flex flex-col leading-tight hidden sm:flex">
                            <span class="font-bold text-sm tracking-wider text-brand-dark">MULANGSARI</span>
                            <span class="font-bold text-xs tracking-widest text-brand-accent">BERSIH</span>
                        </div>
                    </a>

                    <!-- Desktop Menu (Centered) -->
                    <div
                        class="hidden lg:flex items-center space-x-2 bg-white/50 backdrop-blur-md px-2 py-1.5 rounded-full border border-white/40 shadow-sm">
                        <a href="{{ url('/') }}" data-target="hero"
                            class="nav-link text-sm font-medium px-5 py-2 rounded-full transition-all duration-300 {{ request()->is('/') ? 'text-white bg-brand-dark' : 'text-brand-dark hover:bg-white/80' }}">Beranda</a>
                        {{-- <a href="{{ url('/#tentang') }}" data-target="tentang"
                            class="nav-link text-sm font-medium px-5 py-2 rounded-full text-brand-dark hover:bg-white/80 transition-all duration-300">Tentang
                            Kami</a> --}}
                        <a href="{{ url('/#edukasi') }}" data-target="edukasi"
                            class="nav-link text-sm font-medium px-5 py-2 rounded-full text-brand-dark hover:bg-white/80 transition-all duration-300">Edukasi
                            Sampah</a>
                        <a href="{{ url('/program') }}"
                            class="text-sm font-medium px-5 py-2 rounded-full transition-all duration-300 {{ request()->is('program') ? 'text-white bg-brand-dark' : 'text-brand-dark hover:bg-white/80' }}">Program
                            Kerja</a>
                        <a href="{{ url('/blog') }}"
                            class="text-sm font-medium px-5 py-2 rounded-full transition-all duration-300 {{ request()->is('blog*') ? 'text-white bg-brand-dark' : 'text-brand-dark hover:bg-white/80' }}">Artikel</a>
                        <a href="{{ route('produk.index') }}"
                            class="text-sm font-medium px-5 py-2 rounded-full transition-all duration-300 {{ request()->is('produk*') ? 'text-white bg-brand-dark' : 'text-brand-dark hover:bg-white/80' }}">Produk</a>
                    </div>

                    <!-- Right CTA -->
                    <div class="hidden lg:flex items-center gap-4">
                        <a href="#edukasi"
                            class="text-brand-dark text-sm font-bold px-4 py-2 hover:text-brand-accent transition-colors">
                            Mulai Pilah
                        </a>

                        <a href="{{ route('login') }}"
                            class="text-brand-dark text-sm font-bold px-4 py-2 hover:text-brand-accent transition-colors">
                            Login
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="lg:hidden flex items-center">
                        <button id="mobile-menu-btn"
                            class="text-brand-dark hover:text-brand-accent focus:outline-none p-2">
                            <i class="fas fa-bars text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Dropdown Menu -->
            <div id="mobile-menu"
                class="lg:hidden hidden bg-[#fbfaf5]/95 backdrop-blur-xl absolute top-24 left-0 w-full shadow-lg border-t border-gray-200">
                <div class="px-6 py-6 flex flex-col space-y-5">
                    <a href="{{ url('/') }}"
                        class="mobile-nav-link {{ request()->is('/') ? 'text-brand-accent font-bold' : 'text-brand-dark font-medium hover:text-brand-accent' }} transition-colors">Beranda</a>
                    {{-- <a href="{{ url('/#tentang') }}"
                        class="mobile-nav-link text-brand-dark font-medium hover:text-brand-accent transition-colors">Tentang
                        Kami</a> --}}
                    <a href="{{ url('/#edukasi') }}"
                        class="mobile-nav-link text-brand-dark font-medium hover:text-brand-accent transition-colors">Edukasi
                        Sampah</a>
                    <a href="{{ url('/program') }}"
                        class="mobile-nav-link {{ request()->is('program') ? 'text-brand-accent font-bold' : 'text-brand-dark font-medium hover:text-brand-accent' }} transition-colors">Program
                        Kerja</a>
                    <a href="{{ url('/blog') }}"
                        class="mobile-nav-link {{ request()->is('blog*') ? 'text-brand-accent font-bold' : 'text-brand-dark font-medium hover:text-brand-accent' }} transition-colors">Artikel</a>
                    <a href="{{ route('produk.index') }}"
                        class="mobile-nav-link {{ request()->is('produk*') ? 'text-brand-accent font-bold' : 'text-brand-dark font-medium hover:text-brand-accent' }} transition-colors">Produk</a>
                    <hr class="border-gray-200">
                    <a href="{{ url('/#edukasi') }}"
                        class="mobile-nav-link bg-brand-light text-brand-dark text-center font-bold px-6 py-3.5 rounded-full hover:bg-[#a8d360] transition-colors shadow-sm">
                        Mulai Pilah
                    </a>
                    <a href="{{ route('login') }}"
                        class="mobile-nav-link bg-brand-light text-brand-dark text-center font-bold px-6 py-3.5 rounded-full hover:bg-[#a8d360] transition-colors shadow-sm">
                        Login
                    </a>
                </div>
            </div>
        </nav>
    @endif

    <!-- Main Content Area -->
    <main class="flex-grow pt-24 relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white pt-16 pb-8 mt-20">
        <div class="max-w-[90rem] mx-auto px-6 sm:px-10 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="bg-white/10 p-2 rounded-xl backdrop-blur-sm">
                            <img src="{{ asset('assets/logo-mulangsari.png') }}" alt="Logo KKN Mulangsari"
                                class="h-12 w-auto object-contain drop-shadow-md">
                        </div>
                        <div class="flex flex-col leading-tight">
                            <span class="font-bold text-sm tracking-wider text-white">MULANGSARI</span>
                            <span class="font-bold text-xs tracking-widest text-brand-light">BERSIH</span>
                        </div>
                    </div>
                    <p class="text-[#8eaba0] text-sm leading-relaxed max-w-sm">
                        Inisiatif mahasiswa KKN bersama warga Desa Mulangsari, Kecamatan Pangkalan untuk mewujudkan
                        lingkungan yang bersih, sehat, dan bebas sampah.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-bold mb-5 uppercase tracking-wider text-brand-light">Navigasi</h3>
                    <ul class="space-y-3 text-sm text-[#8eaba0]">
                        <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                        {{-- <li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li> --}}
                        <li><a href="#edukasi" class="hover:text-white transition">Edukasi Sampah</a></li>
                        <li><a href="/program" class="hover:text-white transition">Program Kerja</a></li>
                        <li><a href="/blog" class="hover:text-white transition">Artikel & Berita</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-bold mb-5 uppercase tracking-wider text-brand-light">Kontak</h3>
                    <ul class="space-y-4 text-sm text-[#8eaba0]">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-brand-accent"></i>
                            <span>Desa Mulangsari, Kec. Pangkalan,<br>Kab. Karawang, Jawa Barat</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-brand-accent"></i>
                            <span>kkn.mulangsari@example.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-[#1a4a3a] mt-12 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-[#6a8a7c]">
                <p>&copy; {{ date('Y') }} KKN Desa Mulangsari. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition"><i
                            class="fab fa-instagram text-lg"></i></a>
                    <a href="#" class="hover:text-white transition"><i class="fab fa-youtube text-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 50,
        });

        // Navbar blur on scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 20) {
                nav.classList.add('bg-[#fbfaf5]/90', 'backdrop-blur-xl', 'shadow-sm');
            } else {
                nav.classList.remove('bg-[#fbfaf5]/90', 'backdrop-blur-xl', 'shadow-sm');
            }
        });

        // Mobile Menu Toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        if (mobileBtn && mobileMenu) {
            mobileBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                // Change icon
                const icon = mobileBtn.querySelector('i');
                if (mobileMenu.classList.contains('hidden')) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                }
            });

            mobileNavLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });
            });
        }

        // Scrollspy Nav Active State
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            function onScroll() {
                // Hanya jalankan scrollspy di halaman home
                if (window.location.pathname !== '/') return;

                let scrollPos = window.scrollY || document.documentElement.scrollTop;
                let offset = 250;

                sections.forEach(section => {
                    if (section.offsetTop - offset <= scrollPos && (section.offsetTop + section
                            .offsetHeight - offset) > scrollPos) {
                        navLinks.forEach(a => {
                            // Reset classes
                            a.classList.remove('text-white', 'bg-brand-dark');
                            a.classList.add('text-brand-dark');

                            // Set active class
                            if (a.getAttribute('data-target') === section.id) {
                                a.classList.add('text-white', 'bg-brand-dark');
                                a.classList.remove('text-brand-dark');
                            }
                        });
                    }
                });
            }

            window.addEventListener('scroll', onScroll);
            onScroll();
        });
    </script>
</body>

</html>
