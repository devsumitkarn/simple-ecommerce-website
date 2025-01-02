@extends('Admin.layouts.main')
@section('title', 'Product Update')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Update Products</h5>
            <div class="card-body">
                <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" placeholder="Enter Product name" />
                            </div>
                        </div>
    
                        <div class="col-md-6 mb-6">
                            <label for="select2Basic" class="form-label">Select Category</label>
                            <select id="select2Basic" class="select2 form-select form-select-lg" name="category_id" data-allow-clear="true">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="price" class="form-label">Price</label>
                                <input class="form-control" type="text" name="price" id="price" value="{{$product->price}}" placeholder="Enter Product Price" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="discount" class="form-label">Discount</label>
                                <input class="form-control" type="text" name="discount" id="discount" value="{{$product->discount}}" placeholder="Enter Product Price" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" name="image" id="image"
                                    placeholder="Enter product image" />
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" aria-label="Default select example">
                                    <option value="">select Status</option>
                                    <option value="1" {{$product->status == 'in-stock' ? 'selected' : ''}}>In Stock</option>
                                    <option value="2" {{$product->status == 'out-of-stock' ? 'selected' : ''}}>Out Of Stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="status" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter Descriptions">{{$product->description}}</textarea>
                            </div>
                        </div>

                        {{-- <div class="card1">
                            <div class="col-md-12">
                                <p>Description</p>
                                <div class="card ">
                                    <div class="card-body">
                                        <div id="full-editor">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    </div>    
                    <button type="submit" title="Save"
                        class="btn btn-primary me-4 waves-effect waves-light">Update
                    </button>
                            
                    <button type="button" onclick="history.back()"
                        class="btn btn-danger me-4 waves-effect waves-light">Cancel
                    </button>    
                </form>
                
            </div>
        </div>
    </div>
@endsection

