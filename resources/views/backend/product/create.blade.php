@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('product.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{ route('product.store') }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6">
        <label for="category_name" class="form-label">Category</label>
        <select class="form-select" aria-label="Default select example" name="category_name">
          <option value="">Sclect One</option>
          @foreach ($indexcategory as $itemcategory)
          <option value="{{$itemcategory->category_id}}">{{$itemcategory->category_name}}</option>
          @endforeach
        </select>
        @error('category_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6">
        <label for="subcategory_name" class="form-label">SubCategory</label>
        <select class="form-select" aria-label="Default select example" name="subcategory_name">
          <option value="">Sclect One</option>
          @foreach ($indexsubcategory as $itemsubcategory)
          <option value="{{$itemsubcategory->subcategory_id}}">{{$itemsubcategory->subcategory_name}}</option>
          @endforeach
        </select>
        @error('subcategory_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="brand_name" class="form-label">Brand</label>
        <select class="form-select" aria-label="Default select example" id="brand_name" name="brand_name">
          <option value="">Sclect One</option>
          @foreach ($indexbrand as $itembrand)
          <option value="{{$itembrand->brand_id}}">{{$itembrand->brand_name}}</option>
          @endforeach
        </select>
        @error('brand_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-4">
        <label for="unit_name" class="form-label">Unit</label>
        <select class="form-select" aria-label="Default select example" id="unit_name" name="unit_name">
          <option value="">Sclect One</option>
          @foreach ($indexunit as $itemunit)
          <option value="{{$itemunit->unit_id}}">{{$itemunit->unit_name}}</option>
          @endforeach
        </select>
        @error('unit_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-4">
        <label for="color_name" class="form-label">Color</label>
        <select class="form-select" aria-label="Default select example" id="color_name" name="color_name">
          <option value="">Sclect One</option>
          @foreach ($indexcolor as $itemcolor)
          <option value="{{$itemcolor->color_id}}">{{$itemcolor->color_name}}</option>
          @endforeach
        </select>
        @error('color_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 pb-3">
        <label for="product_name" class="form-label">Product Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="product_name" name="product_name" value="{{old('product_name')}}">
        @error('product_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="product_des" class="form-label">Product Description<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="product_des" name="product_des" value="{{old('product_des')}}">
        @error('product_des')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="product_sku" class="form-label">Product SKU<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="product_sku" name="product_sku" value="{{old('product_sku')}}">
        @error('product_sku')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>

@endsection