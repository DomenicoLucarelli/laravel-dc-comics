@extends('layout/app')

@section('content')
    
    <div class="container d-flex flex-column">
        <form class="d-flex flex-column align-items-center gap-2" action="{{route('comic.update', $comic->id)}}" method="POST">

            @csrf
            @method('PUT')
            <label for="title">Inserisci il titolo</label>
            <input type="text" id="title" name="title" value="{{$comic->title}}" placeholder="Inserisci il titolo">

            <label for="description">Inserisci descrizione</label>
            <input type="text" id="description" name="description" value="{{$comic->description}}" placeholder="Inserisci descrizione">

            <label for="thumb">Inserisci src immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="Inserisci src immagine">

            <label for="price">Inserisci prezzo</label>
            <input type="text" id="price" name="price" value="{{$comic->price}}" placeholder="Inserisci prezzo">

            <label for="series">Inserisci serie</label>
            <input type="text" id="series" name="series" value="{{$comic->series}}" placeholder="Inserisci serie">

            <label for="sale_date">Inserisci data</label>
            <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Inserisci data">

            <label for="type">Inserisci tipo</label>
            <input type="text" id="type" name="type" value="{{$comic->type}}" placeholder="Inserisci tipo">

            <label for="artists">Inserisci artisti</label>           
            <input type="text" id="artists" name="artists" value="{{$comic->artists}}" placeholder="Inserisci artisti">

            <label for="writers">Inserisci scrittori</label>
            <input type="text" id="writers" name="writers" value="{{$comic->writers}}" placeholder="Inserisci scrittori">
            

            <button type="submit">Modifica</button>
        </form>
    </div>

@endsection