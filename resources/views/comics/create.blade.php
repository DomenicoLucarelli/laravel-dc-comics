@extends('layout/app')

@section('content')
    
    <div class="container d-flex flex-column">
        <form class="d-flex flex-column align-items-center gap-2" action="{{route('comic.store')}}" method="POST">

            @csrf
            <label for="title">Inserisci il titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{old('title')}}">

            @error('title')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="description">Inserisci descrizione</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" placeholder="Inserisci descrizione" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="thumb">Inserisci src immagine</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" placeholder="Inserisci src immagine" value="{{old('thumb')}}">

            @error('thumb')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="price">Inserisci prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" placeholder="Inserisci prezzo" value="{{old('price')}}">

            @error('price')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="series">Inserisci serie</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" placeholder="Inserisci serie" value="{{old('series')}}">

            @error('series')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="sale_date">Inserisci data</label>
            <input class="form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date" name="sale_date" placeholder="Inserisci data" value="{{old('sale_date')}}">

            @error('sale_date')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="type">Inserisci tipo</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" placeholder="Inserisci tipo" value="{{old('type')}}">

            @error('type')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="artists">Inserisci artisti</label>           
            <input class="form-control @error('artists') is-invalid @enderror" type="text" id="artists" name="artists" placeholder="Inserisci artisti" value="{{old('artists')}}">

            @error('artists')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                
            <label for="writers">Inserisci scrittori</label>
            <input class="form-control @error('writers') is-invalid @enderror" type="text" id="writers" name="writers" placeholder="Inserisci scrittori" value="{{old('writers')}}">

            @error('writers')
            <div class="invalid-feedback">

                {{$message}}

            </div>
            @enderror
                

            <button class="btn btn-primary" type="submit">Crea</button>
        </form>
    </div>

@endsection