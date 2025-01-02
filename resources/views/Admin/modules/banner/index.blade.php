@extends('Admin.layouts.main')
@section('title', 'Banner List')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title mb-0"><strong>Banner Lists</strong></h5>
                </div>
                <div class="col-3">
                    <div class="col text-end">
                        <a href="{{ route('admin.banners.create') }}"
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
                        <th>Promotion</th>
                        <th>Banner Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Saving Price</th>
                        
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($banners as $banner)
                        <tr>
                            <td>{{$banner->promotion}}</td>
                            <td>{{$banner->banner_name}}</td>
                            <td>
                                @if ($banner->image)
                                    <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->banner_name }}" width="150">
                                @else
                                    <p>No Image</p>
                                @endif
                            </td>
                            <td>{{$banner->price}}</td>
                            <td>{{$banner->price_saving}}%</td>
                            
                            
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.banners.edit', $banner->id)}}"><i class="ti ti-pencil me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{route('admin.banners.destroy', $banner->id)}}" method="POST">
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

