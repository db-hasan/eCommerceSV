@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>All Data</h4>
                        <div class="text-end">
                            <a href="{{ route('supplier.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-4">
                            <label>ID:</label>
                            <h6>{{$showData->supplier_id}}</h6>
                        </div>
                        <div class="col-md-4">
                            <label>Name:</label>
                            <h6>{{$showData->supplier_name}}</h6>
                        </div>
                        <div class="col-md-4">
                            <label>Phone:</label>
                            <h6>{{$showData->supplier_phone}}</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row ">
                        <div class="col-md-5">
                            <label>Email:</label>
                            <h6>{{$showData->supplier_email}}</h6>
                        </div>
                        <div class="col-md-5">
                            <label>Address:</label>
                            <h6>{{$showData->supplier_address}}</h6>
                        </div>
                        <div class="col-md-2">
                            <label>Status:</label>
                            <h6>{{$showData->supplier_status}}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <a href="{{ route('supplier.index') }}" class="btn btn-sm btn-dark">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection