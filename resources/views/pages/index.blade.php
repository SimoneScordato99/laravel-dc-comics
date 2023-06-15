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
                    <p>
                    <a class="btn btn-danger" data-bs-toggle="collapse" href="#{{$elem->id}}" role="button" aria-expanded="false" aria-controls="{{$elem->id}}">Elimina</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="{{$elem->id}}">
                            <div class="card card-body">
                                Sei sicuro di voler eliminare questo?
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </a>
    @endforeach
</main>
@endsection

