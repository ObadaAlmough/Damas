$(document).ready(function () {


    //orders
    $('#btn-search-orders').on('click', function (e) {

        e.preventDefault();

        $('#table-orders-loading').css('display', 'flex');
        var search = $("input[name=search]").val();
        var url = $(this).data('url');
        var method = $(this).data('method');

        $.ajax({
            url: url,
            method: method,
            data: { search: search },
            success: function (data) {

                $('#table-orders-loading').css('display', 'none');
                $('#table-orders').empty();
                $('#table-orders').append(data);

            }
        })





    });//orders




    //add orders in delevery
    $('.add_orders').on('click', function (e) {

        e.preventDefault();

        $('#table-delevery-order-loading').css('display', 'flex');
        var url = $(this).data('url');
        var method = $(this).data('method');

        $.ajax({
            url: url,
            method: method,
            success: function (data) {
                $('#table-delevery-order-loading').css('display', 'none');
                $('#table-delevery-order').empty();
                $('#table-delevery-order').append(data);

            }
        })
        $(this).closest('tr').remove();

    });//end orders in delevery



    //delete orders in delevery
    $('.delete_orders').on('click', function(e) {

        e.preventDefault();

        $('#table-orders-loading').css('display', 'flex');

        var url = $(this).data('url');
        var method = $(this).data('method');

        $.ajax({
            url: url ,
            method: method ,

            success: function(data) {


                $('#table-orders-loading').css('display', 'none');
                $('#table-orders').html(data);
            }
        });
        $(this).closest('tr').remove();



    }); //delete orders in delevery




});//end of document ready
