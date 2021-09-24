<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $key = 'login.' . $request->ip();
        return view('Auth.Login', [
            'key' => $key,
            'retries' => RateLimiter::retriesLeft($key, 5),
            'seconds' => RateLimiter::availableIn($key)
        ]);
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(route('dashboard.index'));
        }

        return back()->with('status', 'User tidak ditemukan');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
