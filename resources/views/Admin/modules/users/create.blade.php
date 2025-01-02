@extends('Admin.layouts.main')
@section('title', 'User Create')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Add Users</h5>
            <div class="card-body">
                <form action="{{route('admin.users.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter user name" />
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email"
                                    placeholder="Enter user email" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Enter user password" />
                            </div>
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


