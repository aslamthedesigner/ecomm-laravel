@extends('master')
@section('content')
<div class="container ">
    <div class="row">
        <div class="trending">
            <h1>Search result</h1>
            <div class="">
                @foreach ( $products as $item )
                <div class="">
                    <a href="{{route('view.details',$item['id'])}}">    
                        <img src="{{$item['gallery']}}">
                    <br>
                    </a>
                    <div>
                        <div class="trending-items-text">
                            <h5>Name: {{$item->name}}</h5>
                            <h5>Price: {{$item->price}}</h5>
                            <h5>categari: {{$item->category}}</h5>
                            <h5>Description: {{$item->description}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection