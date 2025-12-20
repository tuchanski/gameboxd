<?php

namespace App\Http\Controllers;

use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            ToastMagic::success("Logged in successfully!");
            return redirect()->intended('/');
        }

        return back()->withErrors([
            ToastMagic::error("Invalid credentials!"),
        ])->onlyInput('email');
    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        ToastMagic::success("Logged out successfully!");
        return redirect('/');
    }
}
