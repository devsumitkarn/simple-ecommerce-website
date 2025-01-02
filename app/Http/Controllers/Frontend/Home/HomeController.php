<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $banners  = Banner::get();
        return view('Frontend.modules.pages.home', compact('products', 'banners'));
    }

    public function shop()
    {
        return view('Frontend.modules.pages.shop');
    }

    public function proceedCheckout()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();
            $cartCount = $cartItems->count();
        return view('Frontend.modules.pages.proceed-checkout', compact('cartItems'));
    }

    public function faq()
    {
        return view('Frontend.modules.pages.faq');
    }


    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Product::find($productId);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found!'
            ], 404);
        }

        $userId = Auth::id();   

        $existingCartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($existingCartItem) {
            return response()->json([
                'success' => false,
                'message' => 'Product is already in your cart!'
            ], 409);
        }

        $cartItem = new Cart();
        $cartItem->user_id = $userId;
        $cartItem->product_id = $productId;
        $cartItem->quantity = 1;
        $cartItem->save();

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cart_item' => $cartItem
        ]);
    }
}
