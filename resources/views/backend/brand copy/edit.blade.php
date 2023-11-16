@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action=""class="row g-3 p-3">
      @csrf

      <div class="col-md-4 ">
        <label for="brand_name" class="form-label">Bundle Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{old('bundle_name')}}">
        @error('brand_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>

@endsection