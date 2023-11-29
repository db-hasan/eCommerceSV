@extends('backend/layouts/layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div class="text">
            <div class="">Purchaes ID: #{{$showData->purchaes_id}}</div>
            <div class="">{{$showData->created_at}}</div>
        </div>
        <div class="text">
            <div class="">{{$showData->supplier_name}}</div>
            <div class="">{{$showData->supplier_phone}}</div>
            <div class="">{{$showData->supplier_email}}</div>
            <div class="">{{$showData->supplier_address}}</div>
        </div>
    </div>
    <hr>
    <!-- Display other product information as needed -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Buying Price</th>
                <th scope="col">Selling Price</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($indexOrder as $order)
            <tr>
                <th scope="row">{{$order->p_order_id}}</th>
                <td>{{$order->product_name}}</td>
                <td>{{$order->buying_price}}</td>
                <td>{{$order->selling_price}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</div>
@endsection