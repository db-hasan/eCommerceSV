@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('brand.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{ route('brand.store') }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6 pb-3">
        <label for="brand_name" class="form-label">Brand Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{old('bundle_name')}}">
        @error('brand_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>

@endsection