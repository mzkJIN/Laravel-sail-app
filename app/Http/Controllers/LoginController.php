<?php

declare(strict_types=1);

namespace App\Http\Controllers;

/**
 * [NOTE]
 *  In Laravel 11 and later versions, the RouteServiceProvider class no longer exists
 */

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
            // return redirect()->intended('/home');
        }
        return back()->withErrors([
            'message' => 'Incorrect email address or password.'
        ]);
    }
    
    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->intended(RouteServiceProvider::HOME);
        // return redirect()->intended('/home');
    }
}
