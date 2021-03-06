@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1>Order</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
        <div class="card-header">
                <a href="{{ route('orders.edit', ['order'=>$orders->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('orders.destroy', ['order'=>$orders->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                <b>Invoice Number:</b> {{ $orders->invoice }} | 
                <b>Date:</b> {{ $orders->date }} |
                @if($orders->buyer_id != NULL)
                @foreach($buyers AS $buyer)
                @if($buyer->id == $orders->buyer_id)
                <b>User:</b><a href="{{ route('buyers.show', ['buyer'=>$orders->buyer_id]) }}">{{ $buyer->id.' '.$buyer->first.' '.$buyer->last }}</a> |
                @endif
                @endforeach
                @endif

                @if($orders->hardware_id != NULL)
                @foreach($hardware AS $hardware)
                @if($hardware->id == $orders->hardware_id)
                <b>Purchased Hardware:</b><a href="{{ route('hardware.show', ['hardware'=>$orders->hardware_id]) }}">{{ $hardware->id.' '.$hardware->name}}</a> 
                <b>Purchase Price:</b>{{ $hardware->price }}
                @endif
                @endforeach
                @endif 
            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop