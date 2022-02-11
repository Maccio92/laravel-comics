@extends('guest.layout.base')

@section('title')
    {{$nomePagina}}
@endsection

@section ('content')
<div>
    <div class="">
        <div class="jumbotron">
            <button class="">CURRENT SERIES</button>
        </div>
        <div class="thumb-container">
            @foreach ($comics as $comic)
                <div class="thumb">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h2>{{$comic['title']}}</h2>
                </div>
                
                @endforeach
                <button class="">LOAD MORE</button>
        </div>
    </div>  
</div>
@endsection