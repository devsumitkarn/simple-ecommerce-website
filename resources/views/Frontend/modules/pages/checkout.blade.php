@extends('Frontend.layouts.main') 

@section('content')
<div class="container mt-5 py-5 bg-white shadow-lg rounded">
    <h1 class="text-center text-primary mb-5 font-weight-bold">🛒 Your Shopping Cart</h1>

    @if ($cartItems->isEmpty())
        <div class="alert alert-info text-center p-4">
            <h4 class="mb-3">Your cart is empty! 🛍️</h4>
            <p class="lead">Add some items to your cart and start shopping now!</p>
            <a href="{{ route('products.add_to_cart') }}" class="btn btn-lg btn-primary">Shop Now</a>
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $index => $cartItem)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>
                                <strong>{{ $cartItem->product->name }}</strong><br>
                                <small class="text-muted">{{ $cartItem->product->description }}</small>
                            </td>
                            <td class="text-center">
                                <img src="{{ $cartItem->product->image ? asset('storage/' . $cartItem->product->image) : url('assets/images/header/cart-items/item-placeholder.jpg') }}" alt="{{ $cartItem->product->name }}" class="img-thumbnail" style="height: 70px; width: 70px;">
                            </td>
                            <td class="text-success fw-bold">₹{{ number_format($cartItem->product->price, 2) }}</td>
                            <td>
                                <form action="{{ route('user.cart.update', $cartItem->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="d-flex align-items-center">
                                        <input type="number" name="quantity" value="{{ $cartItem->quantity }}" min="1" class="form-control" style="width: 80px;">
                                        <button type="submit" class="btn btn-sm btn-primary ms-2">Update</button>
                                    </div>
                                </form>
                            </td>
                            <td class="text-success fw-bold">₹{{ number_format($cartItem->quantity * $cartItem->product->price, 2) }}</td>
                            <td class="text-center">
                                <form action="{{ route('user.cart.remove', $cartItem->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-5 p-4 bg-light rounded text-end shadow-sm">
            <h4 class="text-primary fw-bold">Grand Total: ₹{{ number_format($cartItems->sum(fn($item) => $item->quantity * $item->product->price), 2) }}</h4>
            <a href="{{ route('user.checkout') }}" class="btn btn-lg btn-success">Proceed to Checkout</a>
        </div>
    @endif
</div>


@endsection
