
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{ route('brand.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
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
                <tr>
                    <td>ID</td> 
                    <td>Name</td> 
                    <td>Status</td> 
                    <td class="icons">
                        <a href="" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="" type="button"  class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>
</div>

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>
@endsection