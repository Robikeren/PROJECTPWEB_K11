<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm() {
        return view('login');
    }

    // Proses login
    public function login(Request $request) {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cari user berdasarkan username dan password (plain text)
        $user = User::where('username', $request->username)
                    ->where('password', $request->password)
                    ->first();

        if ($user) {
            // Login berhasil, simpan session
            Auth::login($user);
            return redirect('/')->with('success', 'Login berhasil!');
        }

        // Jika gagal login
        return back()->withErrors([
            'username' => 'Username atau password salah!'
        ]);
    }

    // Menampilkan halaman register
    public function showRegisterForm() {
        return view('register');
    }

    // Proses register
    public function register(Request $request) {
        // Validasi input
        $request->validate([
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'no_hp' => 'required',
            'password' => 'required|min:6',
        ]);

        // Simpan user baru ke database
        $user = User::create([
            'role' => 'user', // otomatis role user
            'username' => $request->username,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password, // plain password
        ]);

        // Login otomatis setelah register (opsional)
        Auth::login($user);

        return redirect('/')->with('success', 'Registrasi berhasil!');
    }

    // Logout
    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
