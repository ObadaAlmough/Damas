<thead>
    <tr>
        <th>ID</th>
        <th>{{__("web.name")}}</th>
        <th>{{__("web.adress")}}</th>
        <th>{{__("web.phone")}}</th>
        <th>{{__("web.work_notes")}}</th>
        <th>{{__("web.action")}}</th>
    </tr>
</thead>
<tbody>
    @foreach ($orders_Delevery as $index=>$order)
    <tr class="tr">
        <th scope="row">{{$index+1}}</th>
        <td>{{$order->client->name}}</td>
        <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->Bulding()}}</td>
        <td>{{$order->client->phone}}</td>
        <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->work_notes}}</td>
        <td>

            <button class="btn btn-danger btn-sm delete_orders" data-method="get"
            data-url="{{url("dashboard/orders/delevery/delete/{$delevery->id}/{$order->id}")}}">{{__('web.delete')}}</button>
        </td>


    </tr>

    @endforeach

</tbody>


{{-- order  --}}
<script>
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

</script>
