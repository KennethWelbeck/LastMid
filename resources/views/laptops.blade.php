@extends('adminlte::page')

@section('title', 'Laptops')

@section('content_header')
    <h1>Laptops</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
            </div>
            <div class="card-body">
                @foreach($hardware AS $hardware)
                @if($hardware->type == "Laptop")
                <li><a href="{{ route('hardware.show', ['hardware'=>$hardware->id]) }}">{{ $hardware->name }}</a></li>
                @endif
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