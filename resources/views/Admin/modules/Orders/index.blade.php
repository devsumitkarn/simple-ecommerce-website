@extends('Admin.layouts.main')
@section('title', 'Order List')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="row">
                <div class="col-9">
                    <h5 class="card-title mb-0"><strong>Orders Lists</strong></h5>
                </div>
                <div class="col-3">
                    <div class="col text-end">
                        <a href="{{ route('admin.orders.create') }}"
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
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{$order->total_price}}</td>
                            <td>
                                <span
                                    class="badge 
                                    @if ($order->status == 'pendding') bg-label-warning 
                                    @elseif($order->status == 'completed') bg-label-success 
                                    @elseif($order->status == 'canceled') bg-label-danger 
                                    @else bg-label-primary @endif me-1">
                                    @if ($order->status == 'pendding')
                                        pendding
                                    @elseif($order->status == 'completed')
                                        completed
                                    @elseif($order->status == 'canceled')
                                        canceled
                                    @else
                                        {{ $order->status }}
                                    @endif
                                </span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('admin.orders.edit', $order->id)}}"><i class="ti ti-pencil me-1"></i>
                                            Edit
                                        </a>
                                        <form action="{{route('admin.orders.destroy', $order->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item"><i class="ti ti-trash me-1"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p>NO ORDER FOUND</p>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
