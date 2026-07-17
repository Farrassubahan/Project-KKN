<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - KKN Desa Mulangsari</title>
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
                            dark: '#0f3c2e',
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-[#fbfaf5] text-gray-800 min-h-screen flex items-center justify-center p-6 relative overflow-hidden">
    
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] bg-brand-light/30 rounded-full blur-[120px]"></div>
        <div class="absolute top-[60%] -right-[10%] w-[40%] h-[60%] bg-brand-accent/20 rounded-full blur-[100px]"></div>
    </div>

    <div class="w-full max-w-5xl bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/40 overflow-hidden flex flex-col md:flex-row">
        
        <!-- Left Side - Form -->
        <div class="w-full md:w-1/2 p-10 sm:p-14 lg:p-16 flex flex-col justify-center">
            <div class="mb-10 flex items-center gap-3">
                <img src="{{ asset('assets/logo-mulangsari.png') }}" alt="Logo" class="h-10 w-auto">
                <div class="flex flex-col leading-tight">
                    <span class="font-bold text-sm tracking-wider text-brand-dark">MULANGSARI</span>
                    <span class="font-bold text-xs tracking-widest text-brand-accent">BERSIH</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold text-brand-dark mb-2">Selamat Datang</h1>
            <p class="text-gray-500 text-sm mb-6">Masuk ke panel admin untuk mengelola konten website desa.</p>

            @if(session('error'))
                <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                    <i class="fas fa-check-circle"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-5">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="far fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full pl-11 pr-4 py-3 bg-gray-50/50 border @error('email') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-200 focus:ring-brand-accent focus:border-brand-accent @enderror rounded-xl focus:ring-2 transition-all text-sm outline-none" placeholder="admin@mulangsari.desa.id" required>
                    </div>
                    @error('email')
                        <p class="text-xs text-red-500 mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                        <a href="{{ route('password.request') }}" class="text-xs text-brand-accent hover:text-brand-dark font-medium transition-colors">Lupa sandi?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password" name="password" class="w-full pl-11 pr-4 py-3 bg-gray-50/50 border @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-200 focus:ring-brand-accent focus:border-brand-accent @enderror rounded-xl focus:ring-2 transition-all text-sm outline-none" placeholder="••••••••" required>
                    </div>
                    @error('password')
                        <p class="text-xs text-red-500 mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-brand-accent border-gray-300 rounded focus:ring-brand-accent">
                    <label for="remember" class="ml-2 block text-sm text-gray-600">Ingat saya</label>
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-3.5 rounded-xl hover:bg-[#16503e] hover:shadow-lg transition-all duration-300 transform active:scale-[0.98]">
                    Masuk ke Dasbor
                </button>
            </form>

            <div class="mt-8 text-center text-xs text-gray-400">
                &copy; {{ date('Y') }} KKN Desa Mulangsari.
            </div>
        </div>

        <!-- Right Side - Image/Branding -->
        <div class="w-full md:w-1/2 bg-brand-dark hidden md:block relative overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=1613&auto=format&fit=crop" alt="Desa Mulangsari" class="absolute inset-0 w-full h-full object-cover opacity-40 group-hover:scale-105 group-hover:opacity-50 transition-all duration-1000">
            <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/50 to-transparent"></div>
            
            <div class="absolute inset-0 p-12 flex flex-col justify-end">
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                    <div class="w-12 h-12 bg-brand-light rounded-full flex items-center justify-center text-brand-dark text-xl mb-6 shadow-md">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-3">Bersama Wujudkan Desa Hijau</h2>
                    <p class="text-gray-200 text-sm leading-relaxed">
                        Kelola seluruh informasi, artikel edukasi, dan dokumentasi program kerja dengan mudah melalui panel manajemen ini.
                    </p>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>
