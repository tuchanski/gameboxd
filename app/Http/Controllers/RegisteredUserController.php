<?php

namespace App\Http\Controllers;

use App\Models\User;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{

    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password'])
        ]);

        ToastMagic::success("Account has been created!");
        return redirect("/login");
    }
}
