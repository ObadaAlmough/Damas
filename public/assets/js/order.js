$(document).ready(function () {

    //add product btn
    $('.add-product-btn').on('click', function (e) {

        e.preventDefault();
        var name_lan = $(this).data('name_lan');
        var map = $(this).data('map');
        var id = $(this).data('id');
        var price = $(this).closest('div').find('.price').val();

        $(this).removeClass('btn-dark').addClass('btn-default ').attr('disabled', true);
        $(this).closest('div').find('.price').attr('disabled', 'true');
        var html =
            `<tr>
                <td>${name_lan}</td>
                <td><input type="number" name="products[${id}][quantity]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="1"></td>
                <td class="product-price">${price}</td>
                <td><button class="btn btn-danger btn-block remove-product-btn" data-id="${id}" data-map="${map}"><span class="fa fa-trash"></span></button></td>
            </tr>`;

        $(`.order-${map}`).append(html);


        //to calculate total price
        calculateTotal();
        $(`.table-${map}`).removeClass('d-none');
    });

    //disabled btn
    $('body').on('click', '.disabled', function (e) {

        e.preventDefault();

    });//end of disabled

    //remove product btn
    $('body').on('click', '.remove-product-btn', function (e) {

        e.preventDefault();
        var id = $(this).data('id');
        var map = $(this).data('map');

        $(this).closest('tr').remove();
        $('#product-' + id + '-' + map).removeClass('btn-default').removeAttr("disabled", false).addClass('btn-dark');
        $('#product-' + id + '-' + map).closest('div').find('.price').removeAttr('disabled', false);

        //to calculate total price
        calculateTotal();

    });//end of remove product btn

    //change product quantity
    $('body').on('keyup change', '.product-quantity', function () {

        var quantity = Number($(this).val()); //2
        var unitPrice = parseFloat($(this).data('price')); //150
        console.log(unitPrice);
        $(this).closest('tr').find('.product-price').html(quantity * unitPrice);
        calculateTotal();

    });//end of product quantity change

    //list all order products
    $('.order-products').on('click', function (e) {

        e.preventDefault();

        $('#loading').css('display', 'flex');

        var url = $(this).data('url');
        var method = $(this).data('method');
        $.ajax({
            url: url,
            method: method,
            success: function (data) {

                $('#loading').css('display', 'none');
                $('#order-product-list').empty();
                $('#order-product-list').append(data);

            }
        })

    });//end of order products click



});//end of document ready

//calculate the total
function calculateTotal() {

    var price = 0;

    $('.order-list .product-price').each(function (index) {

        price += parseFloat($(this).html().replace(/,/g, ''));

    });//end of product price

    $('.total-price').html(price);

    //check if price > 0
    if (price > 0) {

        $('#add-order-form-btn').removeClass('disabled')

    } else {

        $('#add-order-form-btn').addClass('disabled')

    }//end of else

}//end of calculate total


