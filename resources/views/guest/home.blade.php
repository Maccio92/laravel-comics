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
        <div class="container flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <h2>{{$comic['title']}}</h2>
                @endforeach
                <button class="">LOAD MORE</button>
        </div>
    </div>  
</div>
@endsection