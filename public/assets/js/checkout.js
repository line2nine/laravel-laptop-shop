$(document).ready(function () {
    //Cart
    //Remove
    $('.checkout-cart').on('click', 'a[href="#remove"]', function () {
        let productId = $(this).attr('data-id')
        $.ajax({
            url: 'http://127.0.0.1:8000/' + productId + '/remove-product',
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    $('#product-' + productId).fadeOut('300');
                    $('#cartCount').html(result.totalItem);
                    $('#subTotal').html(result.subTotal);
                    $('#total').html(result.subTotal);
                }
            }
        })
    });
    //Remove

    //Count
    $('.checkout-cart').on('click', '.input-group button[data-action="plus"]', function () {
        let productId = $(this).attr('data-id')
        $.ajax({
            url: 'http://127.0.0.1:8000/' + productId + '/update-productPlus',
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    $('#qtyid-' + productId).val(parseInt($('#qtyid-' + productId).parents('.input-group').find('input').val()) + 1);
                    $('#cartCount').html(result.totalItem);
                    $('#subTotal').html(result.subTotal);
                    $('#total').html(result.subTotal);
                }
            }
        })

    });
    $('.checkout-cart').on('click', '.input-group button[data-action="minus"]', function () {
        let productId = $(this).attr('data-id')
        $.ajax({
            url: 'http://127.0.0.1:8000/' + productId + '/update-productMinus',
            dataType: 'json',
            success: function (result) {
                if (result.status == 'success') {
                    if (parseInt($('#qtyid-' + productId).parents('.input-group').find('input').val()) > 1) {
                        $('#qtyid-' + productId).val(parseInt($('#qtyid-' + productId).parents('.input-group').find('input').val()) - 1);
                        $('#cartCount').html(result.totalItem);
                        $('#subTotal').html(result.subTotal);
                        $('#total').html(result.subTotal);
                    }
                }
            }
        })

    });
    //Count
    //Cart
});
