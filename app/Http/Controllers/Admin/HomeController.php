<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('Admin.modules.pages.home');
    }

    public function profile()
    {
        return view('Admin.modules.pages.profile');
    }

    public function profileUpdate(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $admin = auth()->user();

        $admin->name = $data['name'];
        $admin->save();

        return response()->json(['success' => true, 'name' => $admin->name]);
    }

    
}
