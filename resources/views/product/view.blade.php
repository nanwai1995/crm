@extends('layouts/app')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-header">
            <b>{{ $product->name }}</b>
        </div>
        <div class="panel-body">
            <b>Make:</b>{{$product->make}}<br>
            <b>Model:</b>{{$product->model}}
        </div>
    </div>
</div>
@endsection