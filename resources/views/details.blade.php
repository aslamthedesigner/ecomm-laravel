@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row d-inline-flex">
        <div class="col">
            <div class="trending-item">
                <img src="{{$product['gallery']}}">
            </div>
            <div class="mt-2 ">
                <a class="" href="/">Go Back</a>
                <button type="submit" class=" btn btn-outline-primary btn-sm" >Add To Task</button>
                <button type="submit" class=" btn btn-success btn-sm"  >By Now</button>
            </div>
       
        </div>
        <div class="col">
            <div class="trending--items-text">
                <h2>Name: {{$product->name}}</h2>
                <h5>price: {{$product->price}}</h5>
                <h5>Category: {{$product->category}}</h5>
                <h5>Description: {{$product->description}}</h5>
            </div>
        </div>
    </div>
    
</div>
@endsection