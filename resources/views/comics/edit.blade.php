@extends('layout/app')

@section('content')
    
    <div class="container d-flex flex-column">
        <form class="d-flex flex-column align-items-center gap-2" action="{{route('comic.update', $comic->id)}}" method="POST">

            @csrf
            @method('PUT')
            <label for="title">Inserisci il titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}" placeholder="Inserisci il titolo">

            @error('title')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="description">Inserisci descrizione</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{old('description') ?? $comic->description}}" placeholder="Inserisci descrizione">

            @error('description')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="thumb">Inserisci src immagine</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}" placeholder="Inserisci src immagine">

            @error('thumb')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="price">Inserisci prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}" placeholder="Inserisci prezzo">

            @error('price')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="series">Inserisci serie</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}" placeholder="Inserisci serie">

            @error('series')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="sale_date">Inserisci data</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}" placeholder="Inserisci data">

            @error('sale_date')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="type">Inserisci tipo</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}" placeholder="Inserisci tipo">

            @error('type')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="artists">Inserisci artisti</label>           
            <input class="form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists" value="{{old('artists') ?? $comic->artists}}" placeholder="Inserisci artisti">

            @error('artists')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror

            <label for="writers">Inserisci scrittori</label>
            <input class="form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers" value="{{old('writers') ?? $comic->writers}}" placeholder="Inserisci scrittori">

            @error('writers')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror


            <button class="btn btn-primary" type="submit">Modifica</button>
        </form>
    </div>

@endsection