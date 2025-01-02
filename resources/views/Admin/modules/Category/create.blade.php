@extends('Admin.layouts.main')
@section('title', 'Category Create')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Add Category</h5>
            <div class="card-body">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="form-label">Category {{ __('message.name')}}</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter category name" />
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlReadOnlyInput1" class="form-label">Slug</label>
                                <input class="form-control" type="text" name="slug" id="exampleFormControlReadOnlyInput1"
                                    placeholder="Enter Slug" />
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlSelect1" class="form-label">Select Status</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="status" aria-label="Default select example">
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="col-md-6 mb-6">
                            <label for="select2Basic" class="form-label">Select Parent</label>
                            <select id="select2Basic" class="select2 form-select form-select-lg" name="parent_id" data-allow-clear="true">
                                <option value=""></option>
                                @foreach($categorys as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                    </div> 
                    <button type="submit" title="Save"
                        class="btn btn-primary me-4 waves-effect waves-light">Save
                    </button>
                        
                    <button type="button" onclick="history.back()"
                        class="btn btn-danger me-4 waves-effect waves-light">Cancel
                    </button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
