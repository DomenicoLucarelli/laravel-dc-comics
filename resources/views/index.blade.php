@extends('layout/app')

@section('content')
    
<div class="ext-container">
    <div class="container my-card-container">

        @foreach ($comics as $item)
        

        <div class="my-card">
            <img src="{{$item->thumb}}" alt="">
            <span><a href="{{route('comic.show', $item->id)}}">{{$item->series}}</a></span>
        </div>
            
        @endforeach

    </div>
    <div class="my-button">

        <a href="{{route('comic.create')}}"><button>Load More</button></a>

    </div>

</div>

<div class="ext-container2">
    
    <div class="container container2">
        @foreach ($buyImages as $item)
        <div class="buy">

            <img src="{{Vite::asset($item['img'])}}" alt="">
            <span>{{$item['title']}}</span>
            
        </div>
        @endforeach
    </div>
</div>

@endsection