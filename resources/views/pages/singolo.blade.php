@extends('layout.app')

@section('mario')
<h2>{{$comic->title}}</h2>
<img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
<p>{{$comic->description}}</p>

@endsection