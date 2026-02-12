@php
    $nav = config('footerNav');

    // var_dump($nav)
@endphp


<footer>
    <div class="container footer-logo">
        <div class="footer-links pt-4">
            <div class="row row-cols-3">

                @foreach ($nav as $section)
                    <div class="col {{$section['classes']}}">
                        <h4> {{$section['title']}} </h4>

                        <ul class="list-unstyled">

                            @foreach ($section['list'] as $link)
                                <li>
                                    <a href="">{{ $link }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    <div class="social pt-3 pb-3">
        <div class="container d-flex justify-content-between">
            <button class="sign-btn">
                SIGN-UP NOW!
            </button>

            <div class="social-links d-flex align-items-center">
                <h4>FOLLOW US</h4>

                <img src="{{Vite::asset('resources\img\footer-facebook.png')}}" alt="Facebook">
                <img src="{{Vite::asset('resources\img\footer-twitter.png')}}" alt="Twitter">
                <img src="{{Vite::asset('resources\img\footer-youtube.png')}}" alt="You Tube">
                <img src="{{Vite::asset('resources\img\footer-pinterest.png')}}" alt="Pinterest">
                <img src="{{Vite::asset('resources\img\footer-periscope.png')}}" alt="Periscope">
            </div>
        </div>
    </div>
</footer>