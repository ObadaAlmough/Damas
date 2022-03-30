@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Sweet-Alert css-->
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
{{-- //model --}}
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
<!--Internal  treeview -->
<link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{__('web.orders')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>
    {{-- //noty --}}
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row opened -->
<div class="row row-sm">

    <!--/div-->

    <!--div-->
    <div class="col-xl-8">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0"> {{$orders->total()}}-STRIPED ROWS</h4>
                    <div class="row">
                        <form method="get" action="{{url('/dashboard/order')}}" class="form-inline my-2 my-lg-0">
                            <input class="form-control  mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0  " type="submit">{{__('web.search')}}</button>
                        </form>
                        <div class="m-2 my-sm-0 ">
                            <a href="{{url('dashboard/order/client')}}" class="  btn btn-primary ">
                                {{__("web.add")}}
                            </a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{__("web.name")}}</th>
                                <th>{{__("web.phone")}}</th>
                                <th>{{__("web.adress")}}</th>
                                <th>{{__("web.condition")}}</th>
                                <th>{{__("web.work_notes")}}</th>
                                <th>{{__("web.states")}}</th>
                                <th>{{__("web.action")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $index=>$order)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$order->client->name}}</td>
                                <td>{{$order->client->phone}}</td>
                                <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->Bulding()}}</td>
                                <td>{{$order->client->condition}}</td>
                                <td style="width: 10rem" class="d-inline-block text-truncate">{{$order->client->work_notes}}</td>
                                <td class="text-center">
                                @if($order->states == null)
                                <i class="fas fa-exclamation-circle text-danger fa-3x"></i>

                                @endif

                                @if($order->states == 'equip')
                                <a class="btn states-order"
                                data-method="get"
                                href="{{url("dashboard/orders/states/$order->id")}}">
                                <i class="far fa-clock text-warning fa-3x"></i>
                                 </a>
                                @endif

                                @if($order->states == "complete")
                                <a class="btn states-order"
                                data-method="get"
                                href="{{url("dashboard/orders/states/$order->id")}}">
                                <i class="far fa-check-circle text-success fa-3x"></i>
                                </a>
                                @endif

                                @if($order->states == 'delevery')
                                <i class="fas fa-motorcycle text-info fa-3x"></i>

                                @endif



                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{url("dashboard/order/edit/$order->client_id/$order->id")}}" role="button">{{__('web.edit')}}</a>
                                    <a class="btn btn-danger btn-sm swal-warning" href="javascript:void(0)" data-id="{{$order->id}}" role="button">{{__('web.delete')}}</a>
                                    <a class="btn btn-danger btn-sm order-products" data-method="get" data-url="{{url("dashboard/order/{$order->client->id}/{$order->id}")}}" role="button">{{__('web.show')}}</a>

                                    <a data-address="{{$order->client->Bulding()}}" data-name="{{$order->client->name}}" data-phone="{{$order->phone}}" class="btn btn-success btn-sm swal-basic" role="button">{{__('web.Show')}}</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    {{-- end of table --}}
                </div><!-- bd -->
                <div class="my-2 w-100 ">
                    {{$orders->links()}}
                </div>

            </div><!-- bd -->
        </div><!-- bd -->
    </div>
    <!--/div-->
    <!--div-->
    <div class="col-xl-4 d-none" id="card-print-fatwra">
        <div class="card">

            <div class="text-center m-5 mg-b-20 " style="display: none" id="table-print-loding">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            {{-- loading --}}
            <div class="card-header pb-0">

            </div>
            <div class="card-body">
                <div id="order-product-list">

                </div>

            </div><!-- bd -->
        </div><!-- bd -->
        <button type="button" class="btn btn-primary btn-lg btn-block d-none" id="btn-print-fatwra"> Print </button>
    </div>
    <!--/div-->




</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
{{-- order  --}}
<script src="{{ URL::asset('assets/js/order.js') }}"></script>
<!-- Sweet-alert js  -->
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
{{-- <script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script> --}}
<script>
    $(function(e) {

        /* show */
        $('.swal-basic').on('click', function() {
            var name = $(this).data('name');
            var address = $(this).data('address');
            var phone = $(this).data('phone');

            swal({
                title: name
                , text: address,
            })

        });


        var id = "";
        //Warning Message
        $('.swal-warning').click(function() {
            var id_delete = $(this).data('id');

            swal({
                    title: "Are you sure?"
                    , text: "Your will not be able to recover this imaginary file!"
                    , type: "warning"
                    , showCancelButton: true
                    , confirmButtonClass: "btn btn-danger"
                    , confirmButtonText: "Yes, delete it!"
                    , closeOnConfirm: false
                }
                , function() {
                    id = id_delete
                    location.href = "{{url("dashboard/order/delete/")}}" + '/' + id;
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });
        });





    });

</script>
{{-- //model --}}

<!-- Internal Treeview js -->
<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>
<!--Internal  Notify js -->
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
{{-- <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script> --}}
<script>
    @if(session('success')) {


        function not14() {
            notif({
                type: "success"
                , msg: "{{session('success')}}"
                , position: "right"
                , fade: true
            });
        }
        not14()
    }
    @endif

</script>
{{-- //NOTY --}}



<!--Internal  printThis.js -->
<script src="{{ URL::asset('assets/plugins/printThis/printThis.js') }}"></script>

<script>
    $(document).ready(function() {

        //print order
        $(document).on('click', '#btn-print-fatwra', function(e) {
            e.preventDefault();


            $(`#order-product-list`).printThis({
                header: "<h1 style='font-size:24px;text-align:center;'><b>Damas Dry Clean</b></h1>" +
                    "<h1 style='font-size:24px;text-align:center;'><b>مغسلة دمشق</b></h1>"
                , footer: "<p>Please rote and review your order </p>" +
                    "<p>Thank You</p>"

            });


        });
    });

</script>
@endsection
