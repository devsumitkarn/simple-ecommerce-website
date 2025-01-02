<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function showCart()
    {
        $cartItems = Cart::with('product') // Eager load related product details
            ->where('user_id', auth()->id())
            ->get();
            $cartCount = $cartItems->count();
        return view('Frontend.modules.pages.checkout', compact('cartItems', 'cartCount'));
    }

    public function updateCart(Request $request, Cart $cart)
    {
        $cart->update(['quantity' => $request->input('quantity')]);

        return redirect()->route('user.cart.show')->with('success', 'Cart updated successfully!');
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('user.cart.show')->with('success', 'Item removed from cart!');
    }
}
