@extends('layout.app')

@section('mario')
<main>
    @foreach($comics as $elem)
        <a href="/comics/{{$elem['id']}}">
            <div class="card" style="width: 18rem;">
                <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
                <div class="card-body">
                    <h5 class="card-title">{{$elem['title']}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </a>
    @endforeach
</main>
@endsection

