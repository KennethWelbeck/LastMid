@extends('adminlte::page')

@section('title', 'Edit Manufacturer')

@section('content_header')
    <h1>Edit Manufacturer</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('manufacturers.update', ['manufacturers'=>$manufacturers->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">
        <x-adminlte-select name="type" label="Type" fgroup-class="col-md-6">
        <x-adminlte-input name="sales" label="Sales Contact" fgroup-class="col-md-6"  />
        <x-adminlte-input name="tech" label="Tech Support" fgroup-class="col-md-6"  />
        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop