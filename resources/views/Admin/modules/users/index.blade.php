@extends('Admin.layouts.main')
@section('title', 'users List')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title mb-0"><strong>Users Lists</strong></h5>
                </div>
                <div class="col-3">
                    <div class="col text-end">
                        <a href="{{ route('admin.users.create') }}"
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td><span class="badge bg-label-primary me-1">{{$user->email}}</span></td>
                            <td>{{$user->role}}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.users.edit', $user->id)}}"><i class="ti ti-pencil me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{route('admin.users.destroy',$user->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item"><i class="ti ti-trash me-1"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>USERS NOT FOUND</p>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
