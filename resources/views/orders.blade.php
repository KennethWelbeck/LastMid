@extends('adminlte::page')

@section('title', 'Orders')

@section('content_header')
    <h1>Orders</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a href="{{ route('orders.create') }}" class="btn btn-primary float-right">Add Order</a>
            </div>
            <div class="card-body">
                @foreach($orders AS $order)
                <li><b>Invoice Number:</b> <a href="{{ route('orders.show', ['order'=>$order->id]) }}">{{ $order->invoice }}</a></li>
                @endforeach
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop