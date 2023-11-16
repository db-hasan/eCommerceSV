@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('subcategory.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('subcategory.update', $indexData->subcategory_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6">
        <label for="category_name" class="form-label">Category Name</label>
        <select class="form-select" aria-label="Default select example" name="category_name">
          @foreach ($indexcategory as $itemcategory)
          <option value="{{$itemcategory->category_id}}"{{ $indexData->category_id == $itemcategory->category_id ? 'selected' : '' }}>{{$itemcategory->category_name}}</option>
          @endforeach
        </select>
        @error('category_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 ">
        <label for="subcategory_name" class="form-label">Bundle Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" value="{{$indexData->subcategory_name}}">
        @error('subcategory_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          @foreach ($indexStatus as $itemStatus)
          <option value="{{$itemStatus->id}}" {{ $indexData->subcategory_status == $itemStatus->id ? 'selected' : '' }} >{{$itemStatus->status_name}}</option>
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