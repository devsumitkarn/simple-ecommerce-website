<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function registerPage()
    {
        return view('Frontend.Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed',
        ]);

        $data = $request->all();
        $data['role'] = 'user';
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        User::create($data);
        return to_route('user.login.page');
    }

    public function loginPage()
    {
        return view('Frontend.Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('user.home')->with('success', 'Login successful.');
        }

        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials. Please try again.']);
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login');
    }
}
