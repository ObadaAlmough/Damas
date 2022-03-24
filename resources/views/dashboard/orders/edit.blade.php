@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{ URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{__('web.Add_orders')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<div class="col-12 row">
    <div class="card  box-shadow-0 col-lg-8 col-xl-8 col-md-12 col-sm-12">
        <div class="card-header">

        </div>
        <div class="card-body pt-0">

            @php
            $landrys = ['Damas','Mkwa','Vip','Other'];
            $maps = ['iron', 'landry', 'other'];

            @endphp

            {{-- //nav permissions --}}
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @foreach ($maps as $index=>$map)

                    <a class="nav-link {{$index == 0 ? 'active' : ''}}" id="{{$map}}-tab" data-toggle="tab" href="#{{$map}}" role="tab" aria-controls="{{$map}}" aria-selected="true">{{$map}}</a>

                    @endforeach

                </div>
            </nav>
            <div class="tab-content m-2 overflow-auto" style="height: 60vh" id="nav-tabContent ">
                @foreach ($maps as $index=>$map)

                <div class="tab-pane fade {{$index == 0 ? 'show active' : ''}}" id="{{$map}}" role="tabpanel" aria-labelledby="{{$map}}-tab">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="m-1 row" style="width: 22%">

                            <button id="product-{{$product->id}}-{{$map}}" class="add-product-btn btn btn-{{$map == 'landry' ? 'dark' : 'primary'}}-gradient btn-block" data-id="{{$product->id}}" data-name_lan="{{$product->name_lan}}" data-map="{{$map}}">{{$product->name}}</button>

                            <select name="price" id="" class="price w-100 btn btn-{{$map == 'landry' ? 'dark' : 'primary'}}-gradient ">
                                {{-- for landry --}}
                                @foreach ($landrys as $landry)
                                <option value="{{$product->price[$map."_".$landry] ?? 0 }}" name="{{$map."_".$landry ?? 0 }}" class="text-dark" {{$landry == $client->landry ? 'selected' :  ''}} {{$product->price[$map."_".$landry]?? 'disabled'}}>
                                    ( {{$product->price[$map."_".$landry] ?? 0 }} )
                                    {{$landry}}
                                </option>
                                @endforeach
                                {{-- //for landry --}}

                            </select>

                            {{-- select landry --}}

                        </div>
                        @endforeach
                        {{-- // end for products --}}

                    </div>

                </div>

                @endforeach
                {{-- // end for maps --}}

            </div>
            {{-- ////nav permissions --}}
        </div>
    </div>
    {{-- right --}}
    <div class="card box-shadow-0 col-lg-4 col-xl-4 col-md-12 col-sm-12">
        <div class="card-header">

        </div>
        <div class="card-body pt-0 overflow-auto" id="print-table">


            {{dd($order->products())}}
            <form id="fatwra" action="{{url("dashboard/order/store")}}" method="post">
                @csrf
                <input type="hidden" name="order" value="{{$order->id}}">

                @foreach ($maps as $map)

                <div class="table table-{{$map}} table-fatwra d-none">

                    <div class="d-flex justify-content-between">
                        <h4>{{$client->name??''}}</h4>
                        <h4>{{$client->Bulding()??''}}</h4>

                    </div>

                    <p class="w-100 text-center">{{$client->condition}}<br>{{$client->work_notes??''}}</p>
                    <p class="var-{{$map}} h1"></p>

                </div>
                {{-- //heder --}}

                <table class="table table-{{$map}} d-none ">
                    <thead>
                        <tr>
                            <th>{{__("web.$map")}}</th>
                        </tr>
                    </thead>
                    <tbody class="order-{{$map}} order-list">
                        @foreach ($order->products as $product)
                        @if ($product->pivot->map == $map)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>
                                <input type="hidden" name="price[]" value="{{$product->pivot->price}}">
                                <input type="hidden" name="products[]" value="{{$product->pivot->product_id}}">
                                <input type="number" name="quantity[]" data-price="${price}" class="form-control input-sm product-quantity" min="1" value="{{$product->pivot->quantity}}"></td>
                            <td class="product-price">{{$product->pivot->price}}</td>
                            <td><button class="btn btn-danger btn-block remove-product-btn" data-id="{{$product->id}}" data-map="{{$map}}"><span class="fa fa-trash"></span></button></td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                @endforeach
            </form>
        </div>
        <button type="submit" name="" id="add-order-form-btn" class="btn btn-warning-gradient disabled my-2" href="#" role="button">
            Print <span class="total-price"></span>Eg
        </button>
    </div>

    {{-- left --}}



</div>
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
<!-- Internal Select2.min js -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{ URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
<!-- Ionicons js -->
<script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
<!--Internal  pickerjs js -->
<script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
<!--Internal  printThis.js -->
<script src="{{ URL::asset('assets/plugins/printThis/printThis.js') }}"></script>


{{-- order  --}}
<script src="{{ URL::asset('assets/js/order.js') }}"></script>
{{-- print --}}
<script>
    $(document).ready(function() {

        //print order
        $(document).on('click', '#add-order-form-btn', function(e) {
            e.preventDefault();

            $(".remove-product-btn").remove();
            $(".product-price").remove();
            $(`#print-table`).printThis({



                afterPrint: function() {
                    $('#fatwra').submit();
                }
            });


        });

    });

</script>
{{-- print --}}


@endsection
