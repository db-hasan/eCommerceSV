@extends('frontend/layouts/layout')

@section('content')

  <!-- Cart button -->
  <button class="btn btn-primary mt-3" id="cartButton">Open Cart</button>

  <!-- Cart template -->
  <div class="cart-container " id="cartContainer">
    <div class="d-flex justify-content-between mb-3">
      <a class="btn">
        <i class="fa-solid fa-cart-arrow-down fa-xl"></i> Cart (1)
      </a>
      <button class="btn" id="closeCart">
        <i class="fa-solid fa-xmark fa-xl" style="color: #f3124a;"></i>
      </button>
    </div> 
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-3">
          <img src="https://www.ryanscomputers.com/storage/products/small/asus-vp247hae-236-inch-fhd-hdmi-vga-eye-care-11663820310.webp"
            class="img-fluid rounded-3" alt="Cotton T-shirt">
          </div>
          <div class="col-7">
            <p class="">Monitor</p>
            <p>Size: 22"</p>
          </div>
          <div class="col-1 text-end">
            <a href="#!" class="text-danger remove-item">
              <i class="fas fa-trash fa-lg"></i>
            </a>
          </div>
      </div>
    <hr>
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-3">
          <img src="https://www.ryanscomputers.com/storage/products/small/asus-vp247hae-236-inch-fhd-hdmi-vga-eye-care-11663820310.webp"
            class="img-fluid rounded-3" alt="Cotton T-shirt">
          </div>
          <div class="col-7">
            <p class="">Monitor</p>
            <p>Size: 22"</p>
          </div>
          <div class="col-1 text-end">
            <a href="#!" class="text-danger remove-item">
              <i class="fas fa-trash fa-lg"></i>
            </a>
          </div>
      </div>
    <hr>
    <button type="button" class="btn btn-outline-success w-100 mb-2">Continue Shopping</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        // jQuery to toggle cart visibility
        $('#cartButton').click(function() {
          $('#cartContainer').css('display', 'block');
        });

        $('#closeCart').click(function() {
          $('#cartContainer').css('display', 'none');
        });

        // Remove item functionality using jQuery
        $('.remove-item').click(function(event) {
          event.preventDefault();
          const itemId = $(this).data('item-id');
          // Assuming you want to remove the entire row when the trash icon is clicked
          const itemRow = $(this).closest('.row');
          if (itemRow) {
            itemRow.remove();
            // Perform additional actions like updating the total price, if needed
          }
        });
      });
    </script>
</body>
</html>

@endsection