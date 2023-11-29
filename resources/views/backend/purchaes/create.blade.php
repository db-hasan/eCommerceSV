@extends('backend/layouts/layout')

@section('content')
<div class="">
    <div class="text-end">
        <a href="{{ route('purchaes.index') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>
    </div>
    <hr>
    
    <form method="post" action="{{ route('purchaes.store') }}" class="row g-3 p-3">
      @csrf

      @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
      @endif
      
      <div class="row">
        <div class="col-12 bg-light pt-3 pb-5">
          <label for="suppliers_name" class="form-label">Suppliers<span class="text-danger">*</span></label>
          <select class="form-select" aria-label="Default select example" id="suppliers_name" name="suppliers_name">
          <option value="" selected>Select One</option>
          @foreach ($indexSupplier as $itemSupplier)
          <option value="{{$itemSupplier->supplier_id}}">{{$itemSupplier->supplier_name}}</option>
          @endforeach
          </select> 
          @error('suppliers')
              <span class="text-danger">{{ $message }}</span>
          @enderror
        </div>
      </div>

      
      <div class="container">
          <div class="pt-3">
              <div class="row item mb-3">
                  <div class="col-4">
                      <select class="form-select" aria-label="Default select example" name="product_name[]">
                          <option value="" selected>Select Product</option>
                          @foreach ($indexProduct as $itemProduct)
                          <option value="{{$itemProduct->product_id}}">{{$itemProduct->product_name}}</option>
                          @endforeach
                      </select>
                      @error('product')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>

                  <div class="col-2">
                      <input type="text" class="form-control" placeholder="Buying price" name="buying_price[]">
                      @error('buying_price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="col-2">
                      <input type="text" class="form-control" placeholder="Selling_price" name="selling_price[]">
                      @error('selling_price')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="col-2">
                      <input type="text" class="form-control" placeholder="Quantity" name="product_quantity[]">
                      @error('product_quantity')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="col-2 icons">
                      <a href="javascript:void(0);" class="btn add-row"><i class="fa-solid fa-circle-plus fa-xl" style="color: #1fe04f;"></i></a>
                      <a href="javascript:void(0);" class="btn remove-row"><i class="fa-solid fa-trash fa-xl" style="color: #da1647;"></i></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    // Event delegation for add-row and remove-row buttons
    $(".container").on("click", ".add-row", function () {
        var newRow = $(".item").first().clone();
        newRow.find("input").val(""); // Clear the input values
        $(this).closest(".item").after(newRow);
    });

    $(".container").on("click", ".remove-row", function () {
        if ($(".item").length > 1) {
            $(this).closest(".item").remove();
        }
    });
});
</script>

@endsection