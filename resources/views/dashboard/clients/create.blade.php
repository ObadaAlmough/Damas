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
            <h4 class="content-title mb-0 my-auto">{{__('web.Add_clients')}}</h4>
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



            <form method="POST" action="{{ url('dashboard/client/store') }}">
                @csrf


                <div class="form-group">
                    <label>{{__("web.name")}}</label> <input class="form-control" placeholder="Enter your name " type="text" name="name" value="{{ old('name') }}">
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- //name --}}

                    <div class="form-group">
                        <label>{{__("web.phone")}}</label> <input class="form-control" placeholder="Enter your phone " type="text" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- //phone --}}


                        <div class="form-group">
                            <label for="deliver_notes">{{__("web.deliver_notes")}}</label>
                            <textarea class="form-control" name="deliver_notes" rows="2" placeholder="Enter your Deliver Notes">{{old('deliver_notes')}}</textarea>

                            @error('deliver_notes')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{-- //deliver_notes --}}

                            <div class="form-group">
                                <label for="work_notes">{{__("web.work_notes")}}</label>
                                <textarea class="form-control" name="work_notes" rows="2" placeholder="Enter your Work Notes">{{old('work_notes')}}</textarea>

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

                                    <label class="btn btn-primary {{$condition == 'N' ? 'active' : ''}}">
                                        <input type="radio" value="{{ $condition }}" id="#{{ $condition }}" name="condition" autocomplete="off" {{$condition == 'N' ? 'checked' : ''}}> {{ $condition }}
                                    </label>

                                    @endforeach

                                </div>
                                {{-- ////nav condition --}}

                                <div class="form-group">
                                    <label>{{__("web.Building")}}</label> <input class="form-control" placeholder="Enter your Building " type="text" name="Building" value="{{ old('Building') }}">
                                    @error('Building')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    {{-- //Building --}}


                                    <div class="form-group">
                                        <label>{{__("web.flat")}}</label> <input class="form-control" placeholder="Enter your flat " type="text" name="flat" value="{{ old('flat') }}">
                                        @error('flat')
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        {{-- //flat --}}

                                        <div class="form-group">
                                            <label>{{__("web.nearest_landmark")}}</label> <input class="form-control" placeholder="Enter your nearest_landmark " type="text" name="nearest_landmark" value="{{ old('nearest_landmark') }}">
                                            @error('nearest_landmark')
                                            <div class="alert alert-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            {{-- //nearest_landmark --}}



                                            <div class="input-group mb-3 mg-t-20 mg-lg-t-0">
                                                <p class="mg-b-10">{{__('web.district')}}</p>
                                                <select name="district_id" class="custom-select w-100 select2">
                                                    <option label="Choose one">
                                                    </option>
                                                    @foreach ($district as $district )
                                                    <option value="{{$district->id}}" {{old('district')==$district->name ? 'selected' : ''}}>{{$district->name}} </option>

                                                    @endforeach
                                                </select>

                                                <div class="form-group">
                                                    <label for=""></label>
                                                    <select class="form-control" name="landry" id="">
                                                        @foreach ($landrys as $landry)
                                                        <option value="{{$landry}}" {{$landry == 'Damas' ? 'selected' : ''}}>{{$landry}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div><!-- col-4 -->
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
