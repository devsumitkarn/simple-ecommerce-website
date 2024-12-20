@extends('Admin.layouts.main')
@section('title', 'Order Update')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header">Update Order</h5>
            <div class="card-body">
                <form action="{{route('admin.orders.update', $order->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="total_price" class="form-label">Total Price</label>
                                <input type="text" class="form-control" name="total_price" id="total_price" value="{{$order->total_price}}" placeholder="Enter category name" />
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="mb-4">
                                <label for="exampleFormControlSelect1" class="form-label">Select Status</label>
                                <select class="form-select" id="exampleFormControlSelect1" name="status" aria-label="Default select example">
                                    <option value="">select Status</option>
                                    <option value="1" {{$order->status == 'pendding' ? 'selected' : ''}}>Pendding</option>
                                    <option value="2" {{$order->status == 'completed' ? 'selected' : ''}}>Completed</option>
                                    <option value="3" {{$order->status == 'canceled' ? 'selected' : ''}}>Canceled</option>
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