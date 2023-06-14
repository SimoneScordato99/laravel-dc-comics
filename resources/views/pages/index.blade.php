@extends('layout.app')

@section('mario')
<main>
    @foreach($comics as $elem)
        <a href="/peppe/{{$elem['id']}}">
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

