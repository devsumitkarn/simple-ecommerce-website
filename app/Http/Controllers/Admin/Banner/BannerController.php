<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->get();
        return view('Admin.modules.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.modules.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner();

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imagePath = $request->file('image')->store('uploads/banners', 'public');
            $banner->image = $imagePath;
        }
        $banner->promotion        = $request->promotion;
        $banner->banner_name      = $request->banner_name;
        $banner->price            = $request->price;
        $banner->price_saving     = $request->price_saving;
        $banner->description     = $request->description;
        // dd($banner);
        $banner->save();
        return to_route('admin.banners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        return view('Admin.modules.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $banner->promotion        = $request->promotion;
        $banner->banner_name      = $request->banner_name;
        $banner->price            = $request->price;
        $banner->price_saving     = $request->price_saving;
        $banner->description      = $request->description;
        $banner->save();
        return to_route('admin.banners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return to_route('admin.banners.index');
    }
}
