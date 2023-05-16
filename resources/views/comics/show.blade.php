@extends('layout/app')

@section('content')

<section>

    <div class="container image">

        <img src="{{$comic->thumb}}" alt="">

    </div>
</section>

<div class="container">

    <div class="left">

        <h2>{{$comic->title}}</h2>
    
        <div class="price">
            <div class="price-area">
                <span>U.S. Price: {{$comic->price}}</span>
            </div>
    
            <div class="check"><span>Check Availability</span></div>
        </div>
    
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, deleniti! Eligendi suscipit vitae iure omnis tempora doloribus accusamus! Omnis, dolorum. Laboriosam quidem quasi saepe ullam natus dolorem, nihil magni voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam soluta, voluptatibus quisquam aperiam magni nihil sint quia ea. Quam quos veritatis voluptas inventore ad magni laboriosam voluptatem accusamus amet unde. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi suscipit incidunt asperiores modi enim ullam minima dolorem necessitatibus rerum impedit, quia dicta, consequuntur, doloribus ea sit accusamus praesentium hic ducimus?</p>
    
    </div>

    <div class="right">
        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
    </div>
</div>

<div class="information-container">
    <div class="container ">
        <div class="talent">
            <h3>Talent</h3>
            <div class="art">
                <div class="title">
                    <span>Art by:</span>
                </div>

                <div class="info">
                    <p>
                        {{-- @foreach ($comics[0]['artists'] as $item)
                            {{$item}}
                        @endforeach --}}
                        {{$comic->artists}}

                    </p>
                </div>
            </div>

            <div class="written">
                <div class="title">
                    <span>Written by:</span>
                </div>

                <div class="info">
                    <p>
                        {{-- @foreach ($comics[0]['writers'] as $item)
                            {{$item}}
                        @endforeach --}}
                        {{$comic->writers}}

                    </p>
                </div>
            </div>
        </div>
        <div class="specs">
            <h3>Specs</h3>

            <div class="information">
                <div class="name">
                    <div class="title">
                        Series:
                    </div>
                    <h6>{{$comic->series}}</h6>
                </div>
                <div class="price">
                    <div class="title">
                        U.S. Price:
                    </div>
                    <span>{{$comic->price}}</span>
                </div>
                <div class="date">
                    <div class="title">
                       On Sale Date:
                    </div>
                    <span>{{$comic->sale_date}}</span>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection