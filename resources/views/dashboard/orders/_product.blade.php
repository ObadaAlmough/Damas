<div style="padding-left:10px;padding-right:10px;">
    <div style="padding:10px 5px;">
        <div class="d-flex justify-content-between">
            <span><u>{{$client->name}}</u></span>
            <div class="col-md-5" style="display:inline; font-size:14px;">
                {{$client->created_at}}
            </div>
        </div>
        <span>{{$client->phone}}</span>
        <br><br>
    </div>
    <div class="row">
        <div class="col-md-7" style="display:inline; font-size:14px;">
            <span>{{__("web.order")}}</span><b>#{{$order->id}}</b>
        </div>
    </div>
    @php
    $maps = ['iron', 'landry', 'other'];

    @endphp


    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">

        <tbody class="mcnTextBlockOuter">

            <tr>
                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">

                    <table align="left" border="0" cellpadding="0" cellspacing="0"
                        style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    </table>
                @foreach ($maps as $map)

                    <table style="max-width:100%; min-width:100%;" width="90%">
                        <thead>
                            <tr>
                                <th>{{__("web.$map")}}</th>
                            </tr>
                        </thead>
                            <tbody class="order-{{$map}} order-list border-bottom border-top border-dark">
                                @foreach ($order->products as $product)
                          {{--       <tr>
                                    <td>{{$product->name}}</td>
                                    <td>
                                        <input type="hidden" name="price[]" value="{{$product->pivot->price}}">
                                        <input type="hidden" name="products[]" value="{{$product->pivot->product_id}}">
                                        <input type="number" name="quantity[]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="{{$product->pivot->quantity}}"></td>
                                    <td class="product-price">{{$product->pivot->price}}</td>
                                    <td><button class="btn btn-danger btn-block remove-product-btn" data-id="{{$product->id}}" data-map="{{$map}}"><span class="fa fa-trash"></span></button></td>
                                </tr> --}}
                                <tr>
                                    <td>{{$product->pivot->quantity}} X {{$product->name}}
                                        <!--</td-->
                                    </td>
                                    <td>{{$product->pivot->price*$product->pivot->quantity}} EGP</td>
                                </tr>
                                @endforeach



                        </tbody>

                    </table>
                    <br>
                    @endforeach



                </td>
            </tr>
        </tbody>
    </table>


    <table class="border-top border-dark" style="max-width:100%; min-width:100%;" width="90%">
        <tbody>
            <tr>
                <th>{{__("web.Sublotal")}}</th>
                <th>{{$order->total_price}} EGP</th>

            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>Delivery Fee</td>
                <td>25 EGP</td>
            </tr>
            <tr>
                <td>Total Due</td>
                <td>1010 EGP</td>
            </tr>

        </tbody>

    </table>
</div>
