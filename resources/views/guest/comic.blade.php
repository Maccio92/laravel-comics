@extends('guest.layout.base')

@section('title')
    {{$nomePagina}}
@endsection

@section ('content')
<div>
    <div class="bg">
        <div class="jumbotron">
        <img class="current" src="{{$comics['thumb']}}" alt="{{$comics['title']}}">
        </div>
        <div class="container">
                <div class="item">
                    <h2>{{$comics['title']}}</h2>
                </div>            
                
        </div>
    </div>  
</div>
@endsection