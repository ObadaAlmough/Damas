$(document).ready(function () {


    //orders
    $('#show_orders').on('click', function (e) {

        e.preventDefault();
              // $('#loading').css('display', 'flex');
              var search = $("input[name=search]").val();
              var url = $(this).data('url');
              var method = $(this).data('method');

              $.ajax({
                  url: url,
                  method: method,
                  data:{search:search},
                  success: function (data) {
                      // $('#loading').css('display', 'none');
                      $('#table-orders').empty();
                      $('#table-orders').append(data);

                  }
              })





    });//orders




       //add orders in delevery
       $('.add_orders').on('click', function (e) {

        e.preventDefault();

        // $('#loading').css('display', 'flex');
        var url = $(this).data('url');
        var method = $(this).data('method');

        $.ajax({
            url: url,
            method: method,
            success: function (data) {
                // console.log(data)

                // $('#loading').css('display', 'none');
                $('#order-delevery').empty();
                $('#order-delevery').append(data);





            }
        })
        $(this).closest('tr').remove();

    });//end orders in delevery




     //delete orders in delevery
     $('.delete_orders').on('click', function (e) {

        e.preventDefault();

        // $('#loading').css('display', 'flex');
        // var search = $("input[name=search]").val();
        var url = $(this).data('url');
        var method = $(this).data('method');

        $.ajax({
            url: url,
            method: method,
            // data:{search:search},
            success: function (data) {

                // $('#loading').css('display', 'none');
                $('#table-orders').empty();
                $('#table-orders').append(data);

            }

        })

        $(this).closest('tr').remove();


    });//delete orders in delevery



});//end of document ready
