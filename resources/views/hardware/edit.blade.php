@extends('adminlte::page')

@section('title', 'Edit Hardware')

@section('content_header')
    <h1>Edit Hardware</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('hardware.update', ['hardware'=>$hardware->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">

        <x-adminlte-input name="name" label="Name"  value="{{ old('name', $hardware->name) }}" fgroup-class="col-md-6"  />
        <x-adminlte-select name="type" label="Type" value="{{ old('type', $hardware->Type) }}" fgroup-class="col-md-6">
        <option {{ $hardware->type == "Desktop" ? "selected" : "" }}>Desktop</option>
        <option {{ $hardware->type == "Laptop" ? "selected" : "" }}>Laptop</option>
        <option {{ $hardware->type == "Tablet" ? "selected" : "" }}>Tablet</option>
        </x-adminlte-select> 

        <x-adminlte-select name="os" label="OS" value="{{ old('os', $hardware->os) }}" fgroup-class="col-md-6">
        <option  {{ $hardware->os == "Windows" ? "selected" : "" }}>Windows</option>
        <option  {{ $hardware->os == "MacOS" ? "selected" : "" }}>MacOS</option>
        <option  {{ $hardware->os == "Linux" ? "selected" : "" }}>Linux</option>
        <option {{ $hardware->os == "Android" ? "selected" : "" }}>Android</option>
        <option  {{ $hardware->os == "iOS" ? "selected" : "" }}>iOS</option>
        </x-adminlte-select>

        <x-adminlte-input name="cpu" label="CPU" value="{{ old('cpu', $hardware->cpu) }}" fgroup-class="col-md-6"  />
        <x-adminlte-input name="gpu" label="GPU" value="{{ old('gpu', $hardware->gpu) }}" fgroup-class="col-md-6"  />
    
        <x-adminlte-select name="storage" label="Storage" value="{{ old('storage', $hardware->storage) }}" fgroup-class="col-md-6">
        <option  {{ $hardware->storage == "60GB" ? "selected" : "" }}>60GB</option>
        <option {{ $hardware->storage == "120GB" ? "selected" : "" }}>120GB</option>       
        <option {{ $hardware->storage == "250GB" ? "selected" : "" }}>250GB</option>
        <option {{ $hardware->storage == "500GB" ? "selected" : "" }}>500GB</option>
        <option {{ $hardware->storage == "1TB" ? "selected" : "" }}>1TB</option>
        <option {{ $hardware->storage == "2TB" ? "selected" : "" }}>2TB</option>
        </x-adminlte-select>

        <x-adminlte-select name="ram" label="RAM" value="{{ old('ram', $hardware->ram) }}" fgroup-class="col-md-6">
        <option {{ $hardware->ram == "4GB" ? "selected" : "" }}>4GB</option>
        <option {{ $hardware->storage == "8GB" ? "selected" : "" }}>8GB</option>
        <option {{ $hardware->storage == "16GB" ? "selected" : "" }}>16GB</option>
        </x-adminlte-select>

        <x-adminlte-input name="price" label="Price" value="{{ old('price', $hardware->price) }}" fgroup-class="col-md-6"  />

        <x-adminlte-textarea name="notes" label="Notes History" value="" fgroup-class="col-md-6" >
        {{ old('notes', $hardware->notes) }}
        </x-adminlte-textarea>

        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop