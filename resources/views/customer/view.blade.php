@extends('layouts/app')
@section('content')
<div class="container">
    <div class="panel panel-default">
      <div class="panel-header">
        <b>{{ $customer->name }}</b>
      </div>
      <div class="panel-body">
        <b>Email:</b>{{$customer->email}}<br>
        <b>Phone:</b>{{$customer->phone}}
      </div>
      <div class="panel-footer">
        {{ $customer->address }}
      </div>
    </div>
</div>
@endsection
