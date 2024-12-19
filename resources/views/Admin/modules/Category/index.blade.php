@extends('Admin.layouts.main')
@section('title', 'Category List')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title mb-0"><strong>Category Lists</strong></h5>
                </div>
                <div class="col-3">
                    <div class="col text-end">
                        <a href="{{ route('admin.categories.create') }}"
                            class="btn btn-secondary add-new btn-primary waves-effect waves-light">
                            <span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                                <span class="d-none d-sm-inline-block">Add</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>{{ __('message.name')}}</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($categorys as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <span
                                    class="badge 
                                    @if ($category->status == 'active') bg-label-success 
                                    @elseif($category->status == 'inactive') bg-label-danger 
                                    @else bg-label-primary @endif me-1">
                                    @if ($category->status == 'active')
                                        Active
                                    @elseif($category->status == 'inactive')
                                        Inactive
                                    @else
                                        {{ $category->status }}
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('admin.categories.edit', $category->id) }}"><i
                                                class="ti ti-pencil me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item"><i class="ti ti-trash me-1"></i>Delete</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>No data found</p>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
