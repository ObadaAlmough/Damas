{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    @foreach ($orders as $order)
                    <h1>{{$order->client_id}}</h1>
                    <a href="{{url("dashboard/order/create/{$order->client_id}/{$order->id}")}}" class="btn btn-primary btn-sm">
                    {{__("web.add")}}
                    </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>
    {{-- //noty --}}
</div>
<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row w-100 overflow-auto">
                    @foreach ($orders as $order)
                    @if($order->states == Null)
                    <div class="col-xl-2 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/home/box.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">{{$order->client->name}}</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error . </p>
								<a class="btn btn-sm btn-info w-100" href="{{url("dashboard/order/create/{$order->client_id}/{$order->id}")}}">
                                    {{__("web.add")}}
                                </a>

							</div>
						 </div>
					</div>

                    @elseif($order->states == "complete")
                    <div class="col-xl-2 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/home/done.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">{{$order->client->name}}</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error . </p>
								<a class="btn btn-sm btn-info w-100" href="{{url("dashboard/order/delevery")}}">
                                    {{__("web.add")}}
                                </a>

							</div>
						 </div>
					</div>
                    @else
                    <div class="col-xl-2 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100" height="150%" src="{{URL::asset('assets/img/home/delevery.webp')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">{{$order->client->name}}</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error . </p>
								<a class="btn btn-sm btn-info w-100 disabled" href="{{url("dashboard/order/delevery")}}">
                                    {{__("web.add")}}
                                </a>

							</div>
						 </div>
					</div>
                    @endif


                    @endforeach
						 </div>
					</div>
				</div>

				<!-- /row -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endsection
