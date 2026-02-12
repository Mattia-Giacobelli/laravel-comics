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
</footer>