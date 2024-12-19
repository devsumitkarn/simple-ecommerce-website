@extends('Admin.layouts.main')
@section('title', 'Category Update')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Update Category</h5>
            <div class="card-body">
                <form action="{{route('admin.categories.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name" value="{{$category->name}}" />
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="slug" class="form-label">Slug</label>
                                <input class="form-control" type="text" name="slug" id="slug"
                                    placeholder="Enter Slug" value="{{$category->slug}}"/>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="status" class="form-label">Select Status</label>
                                <select class="form-select" id="status" name="status" aria-label="Default select example">
                                    <option value="1" {{$category->status == 'active' ? 'selected' : ''}}>Active</option>
                                    <option value="2" {{$category->status == 'inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                        </div>
                       
                        
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

