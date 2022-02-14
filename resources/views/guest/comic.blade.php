@extends('guest.layout.base')

@section('title')
    {{$nomePagina}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/comic.css') }}">
@endsection

@section ('content')
<div>
    <div>
        <div class="jumbotron">
            <div class="current-thumb">
                <div class="text-thumb-1">
                    <p >Comic Book</p>
                </div>
                <img  src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <div class="text-thumb-2">
                    <p >View Gallery</p>
                </div>
            </div>
        </div>
        <div class="blue-bar">

        </div>
        <div class="container-main">
            <div class="container-left">
                <h2 class="comic-title" >{{$comic["title"]}}</h2>
                <div class="green-container">
                    <div class="price">
                        <div>
                            U.S Price: <span class="text-price">{{$comic["price"]}}</span>
                        </div>
                        <p>
                            AVAILABLE
                        </p>
                    </div>
                    <button>
                        Check availability <i class="fas fa-sort-down"></i>
                    </button>
                </div>
                <div class="description">
                    {{$comic["description"]}}
                </div>
            </div>
            <div class="container-right">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
            <div>
        </div>
    </div>  
    <div class="container-main">
        <div class="talent">
            <h3>Talent</h3>
            
            <div class="caption">
            <p class="left-title">Art BY</p>
            <div class="right-descr">
            @foreach($comic['artists'] as $artist)
                    <a href="#">{{ $artist }}</a>
                @endforeach
            </div>
                
            </div>
            
            <div class="caption">
            <p class="left-title">Written BY</p>
            <div class="right-descr">
            @foreach($comic['writers'] as $writer)
                    <a href="#">{{ $writer }}</a>
                @endforeach
            </div>
                
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="caption">
                <p class="left-title">Series</p>
                <a href="#">{{ $comic["series"] }}</a>
            </div>
            <div class="caption">
                <p class="left-title">U.S. Price</p>
                <p>{{ $comic["price"] }}</p>              
            </div>
            <div class="caption">
                <p class="left-title">On Sale Date</p>
                <p>{{ $comic["sale_date"] }}</p>
            </div>
        </div>
    </div>
            
            
        </div>  
    </div>  
</div>
@endsection