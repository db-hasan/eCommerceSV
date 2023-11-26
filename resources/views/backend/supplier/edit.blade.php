@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('supplier.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
   <form method="post" action="{{ route('supplier.update', $indexData->supplier_id) }}"class="row g-3 p-3">
      @csrf

      <div class="col-md-6 ">
        <label for="supplier_name" class="form-label">Supplier<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{$indexData->supplier_name}}">
        @error('supplier_name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

        <div class="col-md-6 pb-3">
          <label for="supplier_phone" class="form-label">Phone<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="supplier_phone" name="supplier_phone" value="{{$indexData->supplier_phone}}">
        @error('supplier_phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="supplier_email" class="form-label">Supplier Email<span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="supplier_email" name="supplier_email" value="{{$indexData->supplier_email}}">
        @error('supplier_email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="col-md-6 pb-3">
        <label for="supplier_address" class="form-label">Supplier Address<span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="supplier_address" name="supplier_address" value="{{$indexData->supplier_address}}">
        @error('supplier_address')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <div class="col-md-2">
        <label for="inputPassword4" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example" name="status">
          @foreach ($indexStatus as $itemStatus)
          <option value="{{$itemStatus->id}}" {{ $indexData->supplier_status == $itemStatus->id ? 'selected' : '' }} >{{$itemStatus->status_name}}</option>
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