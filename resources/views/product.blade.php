@extends('master')
@section('content')
<div class="container ">
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide custom-product">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
                @foreach ( $products as $item )

                {{-- <h1>{{$item->gallery}}</h1> --}}
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <img src="{{$item['gallery']}}" class="d-block w-100" alt="image">
                    <div class="carousel-caption carousel-caption-text d-none d-md-block">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="trending">
            <h1>Trending Items</h1>
            <div class="trending-item-img">
                @foreach ( $products as $item )
                {{-- <h1>{{$item->gallery}}</h1> --}}
                <div class="trending-item">
                    <a href="{{route('view.details',$item['id'])}}">    
                        <img src="{{$item['gallery']}}">
                        <div class="trending-items-text">
                            <h5>{{$item->name}}</h5>
                        </div>
                    </a>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection