@extends('layout.app')

@section('mario')
<h1>HOME</h1>
<main>
    @foreach($comics as $elem)
        <a href="/comics/{{$elem['id']}}">
            <div class="card" style="width: 18rem;">
                <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
                <div class="card-body">
                    <h5 class="card-title">{{$elem['title']}}</h5>
                    <p>{{$elem['price']}}</p>
                </div>
            </div>
        </a>
    @endforeach
</main>
@endsection

