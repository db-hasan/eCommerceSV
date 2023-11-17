@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('subsubcategory.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{ route('subsubcategory.store') }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6">
        <label for="subcategory_name" class="form-label">SubCategory Name</label>
        <select class="form-select" aria-label="Default select example" name="subcategory_name">
          <option value="">Sclect One</option>
          @foreach ($indexsubcategory as $itemsubcategory)
          <option value="{{$itemsubcategory->subcategory_id}}">{{$itemsubcategory->subcategory_name}}</option>
          @endforeach
        </select>
        @error('category_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 pb-3">
        <label for="subsubcategory_name" class="form-label">SubSubcategory Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="subsubcategory_name" name="subsubcategory_name" value="{{old('bundle_name')}}">
        @error('subsubcategory_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>

@endsection