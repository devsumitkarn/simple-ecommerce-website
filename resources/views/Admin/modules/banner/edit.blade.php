@extends('Admin.layouts.main')
@section('title', 'Banner Update')
<style>
    .card1 {
  width: 3000px !important; /* Adjust width as needed */
  height: 3% !important ;/* Adjust height as needed */
}
</style>
@section('content')

    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Update Banner</h5>
            <div class="card-body">
                <form action="{{route('admin.banners.update', $banner->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="promotion" class="form-label">Promotion</label>
                                <input type="text" class="form-control" name="promotion" id="promotion" placeholder="Enter Banner promotion" value="{{$banner->promotion}}"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="banner_name" class="form-label">Banner Name</label>
                                <input type="text" class="form-control" name="banner_name" id="banner_name" placeholder="Enter Banner Name"  value="{{$banner->banner_name}}"/>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="price" class="form-label">Price</label>
                                <input class="form-control" type="text" name="price" id="price"
                                    placeholder="Enter Banner Price" value="{{$banner->price}}"/>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="price_saving" class="form-label">Price Saving</label>
                                <input class="form-control" type="text" name="price_saving" id="price_saving"
                                    placeholder="Enter Banner Price Saving" value="{{$banner->price_saving}}"/>
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
                                <label for="status" class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter Descriptions">{{$banner->description}}</textarea>
                            </div>
                        </div>
                        
                    </div>    
                    <button type="submit" title="Update"
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
