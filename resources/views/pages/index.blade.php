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
                <a href="{{route('comics.edit', $elem)}}" class="btn btn-warning">Modifica</a>
                <form action=" {{ route('comics.destroy', $elem) }} " method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </a>
    @endforeach
</main>
@endsection

