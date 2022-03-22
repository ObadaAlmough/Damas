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
            <h4 class="content-title mb-0 my-auto">{{__('web.Add_products')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/')}}">{{__('web.home')}}</a></span>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')
<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
    <div class="card  box-shadow-0">
        <div class="card-header">

        </div>
        <div class="card-body pt-0">
            <form method="POST" action="{{ url('dashboard/product/store') }}">
                @csrf
                <div class="form-group">
                    <label>{{__("web.name")}}</label> <input class="form-control" placeholder="Enter your name and lastname" type="text" name="name" value="{{ old('name') }}" required>

                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- //name --}}
                        <div class="form-group">
                            <label>{{__("web.name_ar")}}</label> <input class="form-control" placeholder="Enter your name_ar" type="text" name="name_ar" value="{{ old('name_ar') }}" required autocomplete="name_ar">
                        @error('name_ar')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- //name ar --}}
                        <div class="form-group">
                            <label>{{__("web.name_en")}}</label> <input class="form-control" placeholder="Enter your name_en" type="text" name="name_en" value="{{ old('name_en') }}" required autocomplete="name_en">
                            @error('name_en')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- //name en --}}


                            @php
                            $landry = ['Damas','Mkwa','Vip','Other'];
                            $maps = ['iron', 'landry', 'other'];

                            @endphp

                            {{-- //nav permissions --}}
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach ($landry as $index=>$model)

                                    <a class="nav-link {{$index == 0 ? 'active' : ''}}" id="{{$model}}-tab" data-toggle="tab" href="#{{$model}}" role="tab" aria-controls="{{$model}}" aria-selected="true">{{$model}}</a>

                                    @endforeach

                                </div>
                            </nav>
                                <div class="tab-content m-2" id="nav-tabContent">
                                        @foreach ($landry as $index=>$model)

                                        <div class="tab-pane fade {{$index == 0 ? 'show active' : ''}}" id="{{$model}}" role="tabpanel" aria-labelledby="{{$model}}-tab">
                                            <div class="row">
                                                @foreach ($maps as $map)
                                                       <div class="col-sm-3 m-1">
                                                        <input class="form-control"  type="number" min="1" name="price[{{$map . '_' . $model}}]" placeholder="{{__("web.$map")}}" value="{{ $map . '_' . $model }}">
                                                       </div>
                                                    @endforeach

                                            </div>

                                        </div>

                                        @endforeach

                                </div>
                            {{-- ////nav permissions --}}


                            <button type="submit" class="btn btn-main-primary btn-block">Create
                                Account</button>

            </form>
        </div>
    </div>
</div>
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
@endsection
