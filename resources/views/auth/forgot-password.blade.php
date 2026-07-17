<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Kata Sandi - KKN Desa Mulangsari</title>
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

    <div class="w-full max-w-md bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl border border-white/40 overflow-hidden p-8 sm:p-10">
        
        <div class="mb-8 text-center">
            <div class="inline-flex items-center gap-3 mb-6">
                <img src="{{ asset('assets/logo-mulangsari.png') }}" alt="Logo" class="h-10 w-auto">
                <div class="flex flex-col leading-tight text-left">
                    <span class="font-bold text-sm tracking-wider text-brand-dark">MULANGSARI</span>
                    <span class="font-bold text-xs tracking-widest text-brand-accent">BERSIH</span>
                </div>
            </div>
            <h1 class="text-2xl font-bold text-brand-dark mb-2">Atur Ulang Sandi</h1>
            <p class="text-gray-500 text-sm">
                @if(!$verifiedEmail)
                    Masukkan email Anda untuk memverifikasi akun.
                @else
                    Silakan buat kata sandi baru untuk akun Anda.
                @endif
            </p>
        </div>

        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-600 px-4 py-3 rounded-xl text-sm mb-6 flex items-center gap-2">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(!$verifiedEmail)
            <!-- STATE 1: Verifikasi Email -->
            <form action="{{ route('password.verify') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Alamat Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="far fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full pl-11 pr-4 py-3 bg-gray-50/50 border @error('email') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-200 focus:ring-brand-accent focus:border-brand-accent @enderror rounded-xl focus:ring-2 transition-all text-sm outline-none" placeholder="admin@mulangsari.desa.id" required autofocus>
                    </div>
                    @error('email')
                        <p class="text-xs text-red-500 mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-3.5 rounded-xl hover:bg-[#16503e] hover:shadow-lg transition-all duration-300 transform active:scale-[0.98]">
                    Verifikasi Email
                </button>
            </form>
        @else
            <!-- STATE 2: Reset Password (Tampilkan Form Password) -->
            <form action="{{ route('password.reset_simple') }}" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-medium text-gray-700">Alamat Email</label>
                        <a href="{{ route('password.request', ['reset' => 1]) }}" class="text-xs text-brand-accent hover:underline font-semibold">Ganti Email</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="far fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" value="{{ $verifiedEmail }}" class="w-full pl-11 pr-4 py-3 bg-gray-100 border border-gray-200 rounded-xl text-sm text-gray-500 outline-none cursor-not-allowed" readonly>
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Kata Sandi Baru</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password" name="password" class="w-full pl-11 pr-4 py-3 bg-gray-50/50 border @error('password') border-red-500 focus:ring-red-500 focus:border-red-500 @else border-gray-200 focus:ring-brand-accent focus:border-brand-accent @enderror rounded-xl focus:ring-2 transition-all text-sm outline-none" placeholder="Minimal 8 karakter" required autofocus>
                    </div>
                    @error('password')
                        <p class="text-xs text-red-500 mt-1.5 ml-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Kata Sandi Baru</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full pl-11 pr-4 py-3 bg-gray-50/50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-accent focus:border-brand-accent transition-all text-sm outline-none" placeholder="Ulangi kata sandi baru" required>
                    </div>
                </div>

                <button type="submit" class="w-full bg-brand-dark text-white font-bold py-3.5 rounded-xl hover:bg-[#16503e] hover:shadow-lg transition-all duration-300 transform active:scale-[0.98]">
                    Atur Ulang Kata Sandi
                </button>
            </form>
        @endif

        <div class="mt-8 text-center">
            <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-sm text-brand-accent hover:text-brand-dark font-medium transition-colors">
                <i class="fas fa-arrow-left text-xs"></i> Kembali ke Halaman Login
            </a>
        </div>
        
    </div>

</body>
</html>
