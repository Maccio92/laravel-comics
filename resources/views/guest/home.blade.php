@extends('guest.layout.base')

@section('title')
    {{$nomePagina}}
@endsection

@section ('content')
<div>
    <div class="bg">
        <div class="jumbotron">
            <button class="current">CURRENT SERIES</button>
        </div>
        <div class="container">
            @foreach ($comics as $item)
                <div class="item">
                    <a class="none" href="{{ route('comic', $item['id']) }}">
                        <div class="thumb">
                            <img src="{{ $item['thumb'] }}" alt="{{$item['title']}}">
                        </div>
                        <h2>{{$item['title']}}</h2>
                    </a>
                </div>
            @endforeach
            
                <button class="load">LOAD MORE</button>
        </div>
    </div>  
</div>
<div class="second-container">
        <div class="container">
            <div class="product">
                <img class="img" src="{{asset('../../../img/buy-comics-digital-comics.png')}}">
                <p class="caption">DIGITAL COMICS</p>
            </div>
            <div class="product">
                <img class="img" src="../../../img/buy-comics-merchandise.png">
                <p class="caption">DC MERCHANDISE</p>
            </div>
            <div class="product">
                <img class="img" src="../../../img/buy-comics-subscriptions.png">
                <p class="caption">SUBSCRIPTIONS</p>
            </div>
            <div class="product">
                <img class="img" src="../../../img/buy-comics-shop-locator.png">
                <p class="caption">DC SHOP LOCATOR</p>
            </div>
            <div class="product">
                <img class="img" src="../../../img/buy-dc-power-visa.svg">
                <p class="caption">DC POWER VISA</p>
            </div>
        </div>
    </div>
@endsection