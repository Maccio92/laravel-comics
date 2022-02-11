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
            @foreach ($comics as $comic)
                <div class="item">
                    <div class="thumb">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    
                    
                    </div>
                    <h2>{{$comic['title']}}</h2>
                </div>
                
                @endforeach
            
                <button class="load">LOAD MORE</button>
        </div>
    </div>  
</div>
@endsection