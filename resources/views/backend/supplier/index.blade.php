
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{ route('supplier.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th class="ps-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexsupplier as $itemsupplier)
                <tr>
                    <td>{{$itemsupplier->supplier_id}}</td> 
                    <td>{{$itemsupplier->supplier_name}}</td> 
                    <td>{{$itemsupplier->supplier_phone}}</td> 
                    <td>{{$itemsupplier->supplier_email}}</td> 
                    <td>{{$itemsupplier->supplier_address}}</td> 
                    <td>{{$itemsupplier->status_name}}</td> 
                    <td class="icons">
                        <a href="{{ route('supplier.show', $itemsupplier->supplier_id) }}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('supplier.edit', $itemsupplier->supplier_id) }}" type="button" class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('supplier.destroy', $itemsupplier->supplier_id) }}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection