@extends('frontend/layouts/layout')

@section('content')



{{-- <script>
    $(document).ready(function () {
        // Listen for changes in quantity inputs
        $('.quantity-input').on('input', function () {
            const $input = $(this);
            const $item = $input.closest('.item');
            const quantity = parseInt($input.val()) || 0;
            const price = parseInt($item.find('.price').text().replace('$', ''));
            const total = price * quantity;
            $item.find('.total').text('$' + total);

            calculateTotal();
        });

        $('.decrease-quantity').click(function () {
            const $input = $(this).next('.quantity-input');
            let quantity = parseInt($input.val()) || 0;
            quantity = Math.max(0, quantity - 1);
            $input.val(quantity).trigger('input');
        });

        $('.increase-quantity').click(function () {
            const $input = $(this).prev('.quantity-input');
            let quantity = parseInt($input.val()) || 0;
            quantity += 1;
            $input.val(quantity).trigger('input');
        });

        $('.remove-item').click(function (e) {
            e.preventDefault();
            $(this).closest('.item').remove();
            calculateTotal();
        });
    });

    function calculateTotal() {
        let total = 0;
        $('.total').each(function () {
            total += parseInt($(this).text().replace('$', ''));
        });
        $('#grandTotal').text('$' + total);
    }
</script> --}}




<section class="content" style="background-color: #eee;">
    <div class="row py-3">
        <div class="col-8">
            <div class="d-flex justify-content-between align-items-center py-3 ">
                <h5 class="fw-normal mb-0 text-black">Shopping Cart</h5>
                <div>
                    <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                    class="fas fa-angle-down mt-1"></i></a>
                    </p>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center item">
                <div class="card rounded-3 mb-2">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-2">
                                <img src="https://www.ryanscomputers.com/storage/products/small/asus-vp247hae-236-inch-fhd-hdmi-vga-eye-care-11663820310.webp"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-3">
                                <p class="lead fw-normal mb-2">Monitor</p>
                                <p><span class="text-muted">Size: </span>22" <span class="text-muted">Color: </span>Black</p>
                            </div>

                            <div class="col-2">
                                <h5 class="mb-0 price">$100</h5>
                            </div>
                            <div class="col-2 d-flex">
                                <button class="btn btn-link decrease-quantity">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input min="0" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm quantity-input"/>
                                <button class="btn btn-link increase-quantity px-2">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <h5 class="mb-0 total">$100</h5>
                            </div>
                            <div class="col text-end">
                                <a href="#!" class="text-danger remove-item">
                                    <i class="fas fa-trash fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center item">
                <div class="card rounded-3 mb-2">
                    <div class="card-body">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-2">
                                <img src="https://www.ryanscomputers.com/storage/products/small/asus-vp247hae-236-inch-fhd-hdmi-vga-eye-care-11663820310.webp"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-3">
                                <p class="lead fw-normal mb-2">Monitor</p>
                                <p><span class="text-muted">Size: </span>22" <span class="text-muted">Color: </span>Black</p>
                            </div>

                            <div class="col-2">
                                <h5 class="mb-0 price">$100</h5>
                            </div>
                            <div class="col-2 d-flex">
                                <button class="btn btn-link decrease-quantity">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input min="0" name="quantity" value="1" type="number"
                                    class="form-control form-control-sm quantity-input"/>
                                <button class="btn btn-link increase-quantity px-2">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-2">
                                <h5 class="mb-0 total">$100</h5>
                            </div>
                            <div class="col text-end">
                                <a href="#!" class="text-danger remove-item">
                                    <i class="fas fa-trash fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        

        <div class="col-4">
            <div class="p-1 bg-light">
                <h5 class="fw-normal mb-0 text-black bg-dark-subtle px-3 py-3 ">Price Details</h5>
                <div class="px-4 mb-3">
                    <div class="d-flex justify-content-between pb-3 pt-3">
                        <p>Sub Total</p>
                        <p id="grandTotal">$0</p>
                    </div>
                    <div class="d-flex justify-content-between pb-3">
                        <p>Discount</p>
                        <p>$0</p>
                    </div>
                    <div class="d-flex justify-content-between pb-2">
                        <p>Grand Total</p>
                        <p>$0</p>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary w-100 mb-2">Continue Shopping</button>
                <button type="button" class="btn btn-outline-success w-100 mb-2">Regular Checkout</button>
                <button type="button" class="btn btn-outline-secondary w-100 mb-2">Express Checkout </button>
            </div>
        </div>
    </div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Listen for changes in quantity inputs
        $('.quantity-input').on('input', function () {
            const $input = $(this);
            const $item = $input.closest('.item');
            const quantity = parseInt($input.val()) || 0;
            const price = parseInt($item.find('.price').text().replace('$', ''));
            const total = price * quantity;
            $item.find('.total').text('$' + total);

            calculateTotal();
        });

        $('.decrease-quantity').click(function () {
            const $input = $(this).next('.quantity-input');
            let quantity = parseInt($input.val()) || 0;
            quantity = Math.max(0, quantity - 1);
            $input.val(quantity).trigger('input');
        });

        $('.increase-quantity').click(function () {
            const $input = $(this).prev('.quantity-input');
            let quantity = parseInt($input.val()) || 0;
            quantity += 1;
            $input.val(quantity).trigger('input');
        });

        $('.remove-item').click(function (e) {
            e.preventDefault();
            $(this).closest('.item').remove();
            calculateTotal();
        });
    });

    function calculateTotal() {
        let total = 0;
        $('.total').each(function () {
            total += parseInt($(this).text().replace('$', ''));
        });
        $('#grandTotal').text('$' + total);
    }
</script>
{{-- <script>
    $(document).ready(function() {
        function updateTotal() {
            var price = parseFloat($('#price').text().replace('$', ''));
            var quantity = parseInt($('.quantity-input').val());
            var total = price * quantity;

            $('#total').text('$' + total.toFixed(2));
        }


        $('.increase-quantity').on('click', function() {
            var input = $(this).siblings('.quantity-input');
            input.val(parseInt(input.val()) + 1);
            updateTotal();
        });

        $('.decrease-quantity').on('click', function() {
            var input = $(this).siblings('.quantity-input');
            var value = parseInt(input.val());
            if (value > 1) {
                input.val(value - 1);
                updateTotal();
            }
        });

        $('.quantity-input').on('input', function() {
            var value = parseInt($(this).val());
            if (value >= 0) {
                updateTotal();
            }
        });

        $('.remove-item').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.card').remove();
        });
    });
</script> --}}

{{-- <script>
    $(document).ready(function() {
        // Function to update total price
        function updateTotalPrice() {
            var total = 0;

            $('.card').each(function() {
                var price = parseFloat($(this).find('#price').text().replace('$', ''));
                var quantity = parseInt($(this).find('.quantity-input').val());
                var itemTotal = price * quantity;

                $(this).find('#total').text('$' + itemTotal.toFixed(2));
                total += itemTotal;
            });

            $('#total-price').text('$' + total.toFixed(2));
        }

        // Calculate initial total price
        updateTotalPrice();

        // Listen for changes in quantity inputs
        $('.quantity-input').on('input', function() {
            updateTotalPrice();
        });
    });
</script> --}}



@endsection