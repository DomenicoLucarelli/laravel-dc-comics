


<header >
    <div class="upper-section">
        <span>DC POWER VISA</span> <span>ADDITIONAL DC SITES</span>
    </div>

    <nav class="container">
        <div class="img">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>

        <div class="links">
            <ul>
                @foreach ($links as $link)
                    <li>{{$link}}</li>
                @endforeach

            </ul>
        </div>

        <div class="search">
            <input type="search" name="" id="" placeholder="Search">
        </div>
    </nav>

    <div class="jumboo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
</header>