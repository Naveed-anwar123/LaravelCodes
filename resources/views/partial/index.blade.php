@extends('layouts.master')


@section('content')
<h3>Products</h3>
<div class="row">
@foreach( $products as $item)

  <div class="col-sm-6 col-md-4 img-responsive">
    <div class="thumbnail">
      <img src="{{$item->imagepath}}">
      <div class="caption">
        <h3>{{$item->title}}</h3>
        <p>{{$item->desctiption}}</p>
        <strong class="pull-right">{{$item->price}}$</strong>
        <p><a href="#" class="btn btn-danger" role="button">Add to cart</a> </p>
      </div>
    </div>
  </div>
  @endforeach

</div>
@stop