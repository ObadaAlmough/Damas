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
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{__('web.Add_client')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row row-sm">
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="pl-0">
                    <div class="main-profile-overview">
                        <div class="main-img-user profile-user">
                            <img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                        </div>
                        <div class="d-flex justify-content-between mg-b-20">
                            <div>
                                <h5 class="main-profile-name">{{$client->name??'-'}}</h5>
                                <p class="main-profile-name-text">{{$client->landry}}</p>
                            </div>
                        </div>
                        <h6>{{__("web.address")}}</h6>
                        <div class="main-profile-bio">
                            {{$client->address()??""}}
                        </div><!-- main-profile-bio -->

                        <hr class="mg-y-30">
                        <label class="main-content-label tx-13 mg-b-20">Social</label>
                        <div class="main-profile-social-list">
                            <div class="media">
                                <div class="media-icon bg-primary-transparent text-primary">
                                    <i class="icon ion-logo-whatsapp"></i>
                                </div>
                                <div class="media-body">
                                    <span>{{__("web.phone")}}</span> <a href="tel:{{$client->phone}}">{{$client->phone}}</a>
                                </div>
                            </div>

                        </div>
                        <hr class="mg-y-30">
                        <h6>{{__("web.products")}}</h6>
                        <div class="skill-bar mb-4 clearfix mt-3">
                            <span>{{__('web.iron')}}</span>
                            <div class="progress mt-2">
                                <div class="progress-bar bg-primary-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:
                                 {{($mapIron*100)/($sumProduct)??''}}%"></div>
                            </div>
                        </div>
                        <!--skill bar-->
                        <div class="skill-bar mb-4 clearfix">
                            <span>{{__('web.landry')}}</span>

                            <div class="progress mt-2">
                                <div class="progress-bar bg-danger-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:
                                {{($mapLandry*100)/($sumProduct)??""}}%"></div>
                            </div>
                        </div>
                        <!--skill bar-->
                        <div class="skill-bar mb-4 clearfix">
                            <span>{{__('web.other')}}</span>

                            <div class="progress mt-2">
                                <div class="progress-bar bg-success-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:
                                 {{($mapOther*100)/($sumProduct)??""}}%"></div>
                            </div>
                        </div>
                        <!--skill bar-->
                        {{-- <div class="skill-bar clearfix">
                            <span>Coffee</span>
                            <div class="progress mt-2">
                                <div class="progress-bar bg-info-gradient" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                            </div>
                        </div> --}}
                        <!--skill bar-->
                    </div><!-- main-profile-overview -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row row-sm">
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-primary-transparent">
                                <i class="icon-layers text-primary"></i>
                            </div>
                            <div class="mr-auto">
                                <h5 class="tx-13">{{__("web.orders")}}</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">{{$orders->count()}}</h2>
                                <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-danger-transparent">
                                <i class="icon-paypal text-danger"></i>
                            </div>
                            <div class="mr-auto">
                                <h5 class="tx-13">{{__("web.total_prise")}}</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">{{$orderSum[0]->sum}}</h2>
                                <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-success-transparent">
                                <i class="icon-rocket text-success"></i>
                            </div>
                            <div class="mr-auto">
                                <h5 class="tx-13">{{__("web.Products")}}</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">{{$sumProduct}}</h2>
                                <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                        <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">{{__("web.about_me")}}</span> </a>
                        </li>
                        <li class="">
                            <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-images tx-15 mr-1"></i></span> <span class="hidden-xs">{{__("web.orders")}}</span> </a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">{{__("web.seeting")}}</span> </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                    <div class="tab-pane active" id="home">
                        <h4 class="tx-15 text-uppercase mb-3">{{__("web.deliver_notes")}}</h4>
                        <p class="m-b-5">{{$client->deliver_notes}}</p>
                        <h4 class="tx-15 text-uppercase mb-3">{{__("web.work_notes")}}</h4>
                        <p class="m-b-5">{{$client->work_notes}}</p>
                        <div class="m-t-30">

                            <hr>
                            <div class="">
                                <h5 class="text-primary m-b-5 tx-14">{{__("web.join")}}</h5>
                                <p><b>
                                        {{$client->created_at}}
                                    </b></p>
                                <p class="text-muted tx-13 mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="table-responsive overflow-auto" style="height: 70vh">
                            <table class="table table-striped mg-b-0 text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{__("web.total_price")}}</th>
                                        <th>{{__("web.states")}}</th>
                                        <th>{{__("web.created_at")}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $index=>$order)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{$order->states}}</td>
                                        <td>{{$order->created_at}}</td>




                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            {{-- end of table --}}
                        </div><!-- bd -->
                    </div>
                    <div class="tab-pane" id="settings">
                        <form method="POST" action="{{ url("dashboard/client/update/{$client->id}") }}">
                            @csrf


                            <div class="form-group">
                                <label>{{__("web.name")}}</label> <input class="form-control" placeholder="Enter your name " type="text" name="name" value="{{ $client->name }}">
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- //name --}}

                                <div class="form-group">
                                    <label>{{__("web.phone")}}</label> <input class="form-control" placeholder="Enter your phone " type="text" name="phone" value="{{ $client->phone }}">
                                    @error('phone')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- //phone --}}


                                    <div class="form-group">
                                        <label for="deliver_notes">{{__("web.deliver_notes")}}</label>
                                        <textarea class="form-control" name="deliver_notes" rows="2" placeholder="Enter your Deliver Notes">{{$client->deliver_notes }}</textarea>

                                        @error('deliver_notes')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- //deliver_notes --}}

                                        <div class="form-group">
                                            <label for="work_notes">{{__("web.work_notes")}}</label>
                                            <textarea class="form-control" name="work_notes" rows="2" placeholder="Enter your Work Notes">{{$client->work_notes }}</textarea>

                                            @error('work_notes')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            {{-- //work_notes --}}
                                            @php
                                            $conditions = ['H','F','N'];
                                            $landrys = ['Damas','Mkwa','Vip','Other'];

                                            @endphp

                                            {{-- //nav condition --}}
                                            <div class="btn-group btn-group-toggle mb-2" data-toggle="buttons">

                                                @foreach ($conditions as $index=>$condition)

                                                <label class="btn btn-primary {{$condition == "$client->condition" ? 'active' : ''}}">
                                                    <input type="radio" value="{{ $condition }}" id="#{{ $condition }}" name="condition" autocomplete="off" {{$condition == "$client->condition" ? 'checked' : ''}}> {{ $condition }}
                                                </label>

                                                @endforeach

                                            </div>
                                            {{-- ////nav condition --}}
                                            <div>
                                                <div class="form-group">
                                                    <label>{{__("web.Building")}}</label> <input class="form-control" placeholder="Enter your Building " type="text" name="Building" value="{{ $client->Building}}">
                                                    @error('Building')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    {{-- //Building --}}


                                                    <div class="form-group">
                                                        <label>{{__("web.flat")}}</label> <input class="form-control" placeholder="Enter your flat " type="text" name="flat" value="{{ $client->flat}}">
                                                        @error('flat')
                                                        <div class="alert alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        {{-- //flat --}}

                                                        <div class="form-group">
                                                            <label>{{__("web.nearest_landmark")}}</label> <input class="form-control" placeholder="Enter your nearest_landmark " type="text" name="nearest_landmark" value="{{ $client->nearest_landmark}}">
                                                            @error('nearest_landmark')
                                                            <div class="alert alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                            {{-- //nearest_landmark --}}



                                                            <div class="">
                                                                <p class="">{{__('web.district')}}</p>
                                                                <select name="district_id" class=" form-control">
                                                                    <option label="Choose one">
                                                                    </option>
                                                                    @foreach ($district as $district )
                                                                    <option value="{{$district->id}}" {{$client->district_id == $district->id ? 'selected' : ''}}>
                                                                        {{$district->name}}
                                                                    </option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for=""></label>
                                                                <select class="form-control" name="landry" id="">
                                                                    @foreach ($landrys as $landry)
                                                                    <option value="{{$landry}}" {{$client->landry == $landry ? 'selected' : ''}}>{{$landry}}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- </div><!-- col-4 --> --}}
                                                        <button type="submit" class="btn btn-main-primary btn-block">Create
                                                            Account</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
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
@endsection
