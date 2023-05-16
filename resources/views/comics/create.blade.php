@extends('layout/app')

@section('content')
    
    <div class="container d-flex flex-column">
        <form class="d-flex flex-column align-items-center gap-2" action="{{route('comic.store')}}" method="POST">

            @csrf

            <input type="text" name="title" placeholder="inserisci il titolo">
            <input type="text" name="description" placeholder="inserisci descrizione">
            <input type="text" name="thumb" placeholder="inserisci src immagine">
            <input type="text" name="price" placeholder="inserisci prezzo">
            <input type="text" name="series" placeholder="inserisci serie">
            <input type="text" name="sale_date" placeholder="inserisci data">
            <input type="text" name="type" placeholder="inserisci tipo">
            <input type="text" name="artists" placeholder="inserisci artisti">
            <input type="text" name="writers" placeholder="inserisci scrittori">

            <button type="submit">Crea</button>
        </form>
    </div>

@endsection