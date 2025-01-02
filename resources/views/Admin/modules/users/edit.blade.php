@extends('Admin.layouts.main')
@section('title', 'Update Create')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Update Users</h5>
            <div class="card-body">
                <form action="{{route('admin.users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter user name" value="{{$user->name}}"/>
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="text" name="email" id="email"
                                    placeholder="Enter user email" value="{{$user->email}}"/>
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



