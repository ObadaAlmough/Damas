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
    @foreach ($orders as $index=>$order)
    <tr>
        <th scope="row">{{$index+1}}</th>
        <td>{{$order->client->name}}</td>
        <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->Bulding()}}</td>
        <td>{{$order->client->phone}}</td>
        <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->work_notes}}</td>
        <td>
            <button class="btn btn-danger btn-sm add_orders" data-method="get"
            data-url="{{url("dashboard/orders/delevery/add_order/{$delevery->id}/{$order->id}")}}"
                 role="button">{{__('web.add')}}</button>
        </td>


    </tr>

    @endforeach

</tbody>
