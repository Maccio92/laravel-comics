@extends('guest.layout.base')

@section('title')
    {{$nomePagina}}
@endsection

@section ('content')
<div>
    <div class="bg">
        <div class="jumbotron">
        <img class="current" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="container">
                <div class="item">
                    <h2>{{$comic['title']}}</h2>
                </div>            
                <button class="load">LOAD MORE</button>
        </div>
    </div>  
</div>
@endsection