@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Sweet-Alert css-->
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
{{-- model --}}
<!--Internal  Font Awesome -->
<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
<!--Internal  treeview -->
<link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />
{{-- //moty --}}
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{__('web.deleverys')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row opened -->
<div class="row row-sm">

    <!--/div-->

    <!--div-->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">STRIPED ROWS</h4>
                    <div class="row">

                        <div class="m-2 my-sm-0 ">
                            <a href="{{url('dashboard/delevery/create')}}" class="form-control btn btn-outline-primary ">
                                {{__("web.add")}}
                            </a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-body">
                		<!-- row opened -->
				<div class="row row-sm">
                    @foreach ($deleverys as $index=>$delevery)
                    <div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card text-center">
							<div class="card-body py-3">
								<h4 class="card-title mb-3">{{$delevery->name}}</h4>
								<div class="card-text">
                                    <a class="btn btn-sm btn-primary" href="{{url("dashboard/delevery/edit/$delevery->id")}}" role="button">{{__('web.edit')}}</a>
                                    <a class="btn btn-danger btn-sm swal-warning" href="javascript:void(0)" data-id="{{$delevery->id}}" role="button">{{__('web.delete')}}</a>

                                </div>
							</div>
                            <a class="btn btn-success-gradient btn-block w-100" href="{{url("dashboard/orders/delevery/$delevery->id")}}">Read More</a>
						 </div>
					</div>
                    @endforeach

				</div>
				<!-- row closed -->
               {{--  <div class="table-responsive">
                    <table class="table table-striped mg-b-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>{{__("web.name")}}</th>
                                <th>{{__("web.email")}}</th>
                                <th>{{__("web.action")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($deleverys as $index=>$delevery)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$delevery->name}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{url("dashboard/delevery/edit/$delevery->id")}}" role="button">{{__('web.edit')}}</a>
                                    <a class="btn btn-danger btn-sm swal-warning" href="javascript:void(0)" data-id="{{$delevery->id}}" role="button">{{__('web.delete')}}</a>

                                </td>


                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div><!-- bd --> --}}


            </div><!-- bd -->
        </div><!-- bd -->
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
<!-- Sweet-alert js  -->
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
{{-- <script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script> --}}
<script>
    $(function(e) {

        /* show */
	$('.swal-basic').on('click', function () {
        var name = $(this).data('name');
        var address = $(this).data('address');
        var phone = $(this).data('phone');

        swal(
			{
				title: name,
				text: address,

			}
		)

	});


    var id ="";
    //Warning Message
	$('.swal-warning').click(function () {
        var id_delete = $(this).data('id');

        swal({
            title: "Are you sure?",
            text: "Your will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn btn-danger",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
		},
		function(){
            id = id_delete
                location.href = "{{url("dashboard/delevery/delete/")}}"+ '/' + id;
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
    @if (session('success')) {


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

@endsection
