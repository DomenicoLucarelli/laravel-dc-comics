<div class="ext-container3">
    <div class="container container3">
        <div class="footer-links">
            @foreach ($footerList as $item)
                <div class="section">
                    <h6>{{$item['name']}}</h6>
                    <ul>
                        @foreach ($item['links'] as $link)
                           <li>{{$link}}</li>
                        @endforeach

                    </ul>
                </div>
            @endforeach
        </div>

        <div class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
        </div>
    </div>
</div>

<div class="ext-container4">
    <div class="container container4">
        <button>sign up now</button>

        <div class="social">
            <span>follow us</span>
            <img src="{{Vite::asset('resources/img/footer-.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
        </div>
    </div>
</div>