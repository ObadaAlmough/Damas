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
            <h4 class="content-title mb-0 my-auto">{{__('web.edit_users')}}</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                /<a class="link" href="{{url('/user')}}">{{__('web.home')}}</a></span>
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
            <form method="POST" action="{{ url("dashboard/user/update/{$user->id}") }}">
                @csrf
                <div class="form-group">
                    <label>Name</label><input class="form-control" placeholder="Enter your name and lastname" type="text" name="name" value="{{ $user->name }}" required>

                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- end of input name --}}
                    c
                    <div class="form-group">
                        <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text" name="email" value="{{ $user->email }}" required autocomplete="email">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- end of input email --}}


                        @php
                        $models = ['users','products','clients','orders'];
                        $maps = ['create', 'read', 'update', 'delete'];

                        @endphp

                        {{-- nav permissions --}}
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach ($models as $index=>$model)

                                <a class="nav-link {{$index == 0 ? 'active' : ''}}" id="{{$model}}-tab" data-toggle="tab" href="#{{$model}}" role="tab" aria-controls="{{$model}}" aria-selected="true">{{$model}}</a>

                                @endforeach

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach ($models as $index=>$model)

                            <div class="tab-pane fade {{$index == 0 ? 'show active' : ''}}" id="{{$model}}" role="tabpanel" aria-labelledby="{{$model}}-tab">

                                @foreach ($maps as $map)
                                <label><input {{ $user->hasPermission($map . '_' . $model) ? 'checked' : '' }} type="checkbox" name="permissions[]" value="{{ $map . '_' . $model }}"> @lang('web.' . $map)</label>
                                @endforeach

                            </div>

                            @endforeach

                        </div>
                        {{-- //nav permissions --}}


                        <button type="submit" class="btn btn-main-primary btn-block">Create
                            Account</button>

            </form>
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
