@extends('layout/app')

@section('content')

<section>

    <div class="container image">

        <img src="{{$comics[0]['thumb']}}" alt="">

    </div>
</section>

<div class="container">

    <div class="left">

        <h2>{{$comics[0]['title']}}</h2>
    
        <div class="price">
            <div class="price-area">
                <span>U.S. Price: {{$comics[0]['price']}}</span>
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
                        @foreach ($comics[0]['artists'] as $item)
                            {{$item}}
                        @endforeach
                    </p>
                </div>
            </div>

            <div class="written">
                <div class="title">
                    <span>Written by:</span>
                </div>

                <div class="info">
                    <p>
                        @foreach ($comics[0]['writers'] as $item)
                            {{$item}}
                        @endforeach
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
                    <h6>{{$comics[0]['series']}}</h6>
                </div>
                <div class="price">
                    <div class="title">
                        U.S. Price:
                    </div>
                    <span>{{$comics[0]['price']}}</span>
                </div>
                <div class="date">
                    <div class="title">
                       On Sale Date:
                    </div>
                    <span>{{$comics[0]['sale_date']}}</span>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection