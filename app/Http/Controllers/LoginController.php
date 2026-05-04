<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return redirect()->intended(
                Auth::user()->role === 'admin'
                    ? route('admin.dashboard')
                    : route('dashboard')
            );
        }

        return back()->with('error', 'Email atau password salah');
    }

    // ─── Google OAuth ────────────────────────────────────────────────────────────

    /**
     * Redirect ke halaman login Google.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle callback dari Google setelah user login.
     */
    public function handleGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect()->route('login')
                ->with('error', 'Gagal login dengan Google. Silakan coba lagi.');
        }

        // Cari atau buat user berdasarkan google_id atau email
        $user = User::where('google_id', $googleUser->getId())->first();

        if (!$user) {
            // Cek apakah email sudah terdaftar (akun manual)
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Hubungkan akun yang sudah ada dengan Google
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'avatar'    => $googleUser->getAvatar(),
                ]);
            } else {
                // Buat akun baru
                $user = User::create([
                    'name'      => $googleUser->getName(),
                    'email'     => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar'    => $googleUser->getAvatar(),
                    'password'  => bcrypt(Str::random(24)), // password acak
                    'role'      => 'user', // default role
                ]);
            }
        }

        Auth::login($user, remember: true);
        $request->session()->regenerate();

        return redirect()->intended(
            $user->role === 'admin'
                ? route('admin.dashboard')
                : route('dashboard')
        );
    }

    // ─── Logout ──────────────────────────────────────────────────────────────────

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
