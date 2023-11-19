<script>
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
</script>