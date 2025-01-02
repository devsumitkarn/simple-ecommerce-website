@extends('Admin.layouts.main')
@section('title', 'Products List')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title mb-0"><strong>Products Lists</strong></h5>
                </div>
                <div class="col-3">
                    <div class="col text-end">
                        <a href="{{ route('admin.products.create') }}"
                            class="btn btn-secondary add-new btn-primary waves-effect waves-light">
                            <span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Add</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table datatable">
                <thead class="table-dark">
                    <tr>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount}}%</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="150">
                                @else
                                    <p>No Image</p>
                                @endif
                            </td>
                            <td>
                                <span
                                    class="badge 
                                    @if($product->status == 'in-stoct') bg-label-success 
                                    @elseif($product->status == 'out-of-stock') bg-label-danger 
                                    @else bg-label-success @endif me-1">
                                    @if ($product->status == 'in-stock')
                                        In Stock
                                    @elseif($product->status == 'out-of-stock')
                                        Out Of Stock
                                    @else
                                        {{ $product->status }}
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.products.edit', $product->id)}}"><i class="ti ti-pencil me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item"><i class="ti ti-trash me-1"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
