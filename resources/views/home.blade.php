@extends('layouts.app')

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
@endsection
