
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{ route('unit.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th class="ps-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexunit as $itemunit)
                <tr>
                    <td>{{$itemunit->unit_id}}</td> 
                    <td>{{$itemunit->unit_name}}</td> 
                    <td>{{$itemunit->status_name}}</td> 
                    <td class="icons">
                        <a href="{{ route('unit.show', $itemunit->unit_id) }}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('unit.edit', $itemunit->unit_id) }}" type="button" class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('unit.destroy', $itemunit->unit_id) }}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
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