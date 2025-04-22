@extends('master')
@section('content')
<div class="container ">
    <div class="row">
        <div class="trending">
            <h1>Cart List</h1>
            <div class="row">
                @foreach ( $products as $item )
                <div class="col">
                    <a href="{{route('view.details',$item->id)}}">
                        <img src="{{$item->gallery}}">
                        <br>
                    </a>

                </div>
                <div class="col">

                    <div>
                        <div class="trending-items-text">
                            <h5>Name: {{$item->name}}</h5>
                            <h5>Price: {{$item->price}}</h5>
                            <h5>categari: {{$item->category}}</h5>
                            <h5>Description: {{$item->description}}</h5>
                            {{-- {{$item->product_id}} --}}
                        </div>
                    </div>
                </div>
                <div class="col">
                   
                        <a href="/removeitem/{{$item->cart_id}}" class="btn-sm btn btn-warning">Remove From Cart</a>
                  
                </div>
                @endforeach
            </div>
            <a href="/ordernow" class="btn  btn-success mb-3">Order Now</a>
        </div>
    </div>
    @endsection