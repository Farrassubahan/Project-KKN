<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function showForm(Request $request)
    {
        if ($request->has('reset')) {
            session()->forget('verified_email');
            return redirect()->route('password.request');
        }
        $verifiedEmail = session('verified_email');
        return view('auth.forgot-password', compact('verifiedEmail'));
    }

    public function verifyEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $userExists = User::where('email', $request->email)->exists();

        if (!$userExists) {
            return back()->withErrors([
                'email' => 'Email tidak terdaftar di sistem kami.'
            ])->withInput();
        }

        // Simpan email terverifikasi di session
        session(['verified_email' => $request->email]);

        return back()->with('success', 'Email terverifikasi! Silakan masukkan kata sandi baru Anda.');
    }

    public function resetPassword(Request $request)
    {
        $verifiedEmail = session('verified_email');

        if (!$verifiedEmail) {
            return redirect()->route('password.request')->withErrors([
                'email' => 'Silakan verifikasi email Anda terlebih dahulu.'
            ]);
        }

        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('email', $verifiedEmail)->first();
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();

            // Hapus session setelah berhasil
            session()->forget('verified_email');

            return redirect()->route('login')->with('success', 'Kata sandi berhasil diatur ulang! Silakan masuk.');
        }

        return back()->withErrors(['password' => 'Terjadi kesalahan. Silakan coba lagi.']);
    }
}
