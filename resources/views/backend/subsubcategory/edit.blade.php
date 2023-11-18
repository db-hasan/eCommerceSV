@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('subsubcategory.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('subsubcategory.update', $indexData->subcategory_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6">
        <label for="subcategory_name" class="form-label">SubCategory</label>
        <select class="form-select" aria-label="Default select example" name="subcategory_name">
          @foreach ($indexsubcategory as $itemsubcategory)
          <option value="{{$itemsubcategory->subcategory_id}}"{{ $indexData->subcategory_id == $itemsubcategory->subcategory_id ? 'selected' : '' }}>{{$itemsubcategory->subcategory_name}}</option>
          @endforeach
        </select>
        @error('subcategory_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 ">
        <label for="subsubcategory_name" class="form-label">SubSubCatagory<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="subsubcategory_name" name="subsubcategory_name" value="{{$indexData->subsubcategory_name}}">
        @error('subsubcategory_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          @foreach ($indexStatus as $itemStatus)
          <option value="{{$itemStatus->id}}" {{ $indexData->subsubcategory_status == $itemStatus->id ? 'selected' : '' }} >{{$itemStatus->status_name}}</option>
          @endforeach
        </select>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection