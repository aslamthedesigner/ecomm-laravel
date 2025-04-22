@extends('master')
@section('content')
<div class="container ">
    <div class="row">
        <div class="trending">
            <h1>Orders List</h1>
            <div class="row">
                <div class="col">
                    @foreach ( $order_list as $item )
                    <div class="">
                        <a href="{{route('view.details',$item->id)}}">
                            <img src="{{$item->gallery}}">
                            <br>
                        </a>

                    </div>
                    <div class="">
                        <div class="trending-items-text">
                            <h5>Name: {{$item->name}}</h5>
                            <h5>Price: {{$item->price}}</h5>
                            <h5>categari: {{$item->category}}</h5>
                            <h5>Payment Method: {{$item->payment_method}}</h5>
                            <h5>Payment Status: {{$item->payment_status}}</h5>
                            <h5>Adress: {{$item->address}}</h5>
                            {{-- {{$item->product_id}} --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection