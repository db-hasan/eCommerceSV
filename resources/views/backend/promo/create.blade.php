@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('promo.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{ route('promo.store') }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6 pb-3">
        <label for="promo_name" class="form-label">Promo Name<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_name" name="promo_name" value="{{old('promo_name')}}">
        @error('promo_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="promo_code" class="form-label">Promo Code<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_code" name="promo_code" value="{{old('promo_code')}}">
        @error('promo_code')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="promo_amount" class="form-label">Promo Amount<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_amount" name="promo_amount" value="{{old('promo_amount')}}">
        @error('promo_amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>

@endsection