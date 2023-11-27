
@extends('backend/layouts/layout')

@section('content')

<div class="">
    <div class="text-end">
        <a href="{{ route('purchaes.create') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> Add Data</a>
    </div>
    <hr>
    <div class="custom-scrollbar-table">
        @if(Session::has('msg'))
            <div class="alert alert-success">
                {{ Session::get('msg') }}
            </div>
        @endif
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th class="ps-5 text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indexpurchaes as $itempurchaes)
                <tr>
                    <td>{{$itempurchaes->purchaes_id}}</td> 
                    <td>{{$itempurchaes->purchaes_name}}</td> 
                    <td>{{$itempurchaes->status_name}}</td> 
                    <td class="icons">
                        <a href="{{ route('purchaes.show', $itempurchaes->purchaes_id) }}" type="button"  class="btn view"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('purchaes.edit', $itempurchaes->purchaes_id) }}" type="button" class="btn edit"><i class="fa-solid fa-pen"></i></a>
                        <a href="{{ route('purchaes.destroy', $itempurchaes->purchaes_id) }}" type="button"  class="btn delete" onclick="return confirm('Are you sure dalete')"><i class="fa-solid fa-trash"></i></a>
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