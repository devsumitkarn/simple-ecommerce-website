<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('Admin.Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Login successful.');
            }
            Auth::logout();
            return redirect()->route('admin.login.page')->withErrors(['email' => 'Access denied. Admins only.']);
        }
    
        return redirect()->route('admin.login.page')->withErrors(['email' => 'Invalid credentials. Please try again.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.page');
    }
}
