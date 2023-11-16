@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('promo.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('promo.update', $indexData->promo_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6 ">
        <label for="promo_name" class="form-label">promo<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_name" name="promo_name" value="{{$indexData->promo_name}}">
        @error('promo_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-6 pb-3">
        <label for="promo_code" class="form-label">Promo Code<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_code" name="promo_code" value="{{$indexData->promo_code}}">
        @error('promo_code')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="promo_amount" class="form-label">Promo Amount<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="promo_amount" name="promo_amount" value="{{$indexData->promo_amount}}">
        @error('promo_amount')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          @foreach ($indexStatus as $itemStatus)
          <option value="{{$itemStatus->id}}" {{ $indexData->promo_status == $itemStatus->id ? 'selected' : '' }} >{{$itemStatus->status_name}}</option>
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