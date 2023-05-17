@extends('layout/app')

@section('content')
    
    <div class="container d-flex flex-column">
        <form class="d-flex flex-column align-items-center gap-2" action="{{route('comic.store')}}" method="POST">

            @csrf
            <label for="title">Inserisci il titolo</label>
            <input type="text" id="title" name="title" placeholder="Inserisci il titolo">

            <label for="description">Inserisci descrizione</label>
            <input type="text" id="description" name="description" placeholder="Inserisci descrizione">

            <label for="thumb">Inserisci src immagine</label>
            <input type="text" id="thumb" name="thumb" placeholder="Inserisci src immagine">

            <label for="price">Inserisci prezzo</label>
            <input type="text" id="price" name="price" placeholder="Inserisci prezzo">

            <label for="series">Inserisci serie</label>
            <input type="text" id="series" name="series" placeholder="Inserisci serie">

            <label for="sale_date">Inserisci data</label>
            <input type="text" id="sale_date" name="sale_date" placeholder="Inserisci data">

            <label for="type">Inserisci tipo</label>
            <input type="text" id="type" name="type" placeholder="Inserisci tipo">

            <label for="artists">Inserisci artisti</label>           
            <input type="text" id="artists" name="artists" placeholder="Inserisci artisti">

            <label for="writers">Inserisci scrittori</label>
            <input type="text" id="writers" name="writers" placeholder="Inserisci scrittori">
            

            <button type="submit">Crea</button>
        </form>
    </div>

@endsection