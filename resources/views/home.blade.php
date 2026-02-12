@extends('layouts/default')

@php
    $comics = config('comics');
@endphp


@section('content')
    <div class="jumbotron"></div>

    <div class="container comics">
        <div class="row row-cols-6">
            
            @foreach ($comics as $comic)
                <div class="col">
                    <x-card>
                        <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
                        <x-slot:title> {{$comic['title']}} </x-slot:title>
                    </x-card>
                </div>
            @endforeach
            
        </div>
        <div class="d-flex justify-content-center">
            <button class="load-btn">
                LOAD MORE
            </button>
        </div>
        
    </div>
    <div class="links">
        <div class="container">
            <div class="row row-cols-5">
                <div class="col">
                    <img src="{{Vite::asset('resources\img\buy-comics-digital-comics.png')}}" alt="digital comics">
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col">
                    <img src="{{Vite::asset('resources\img\buy-comics-merchandise.png')}}" alt="digital comics">
                    <span>DC MERCHANDISE</span>
                </div>
                <div class="col">
                    <img src="{{Vite::asset('resources\img\buy-comics-subscriptions.png')}}" alt="digital comics">
                    <span>SUBSCRIPTIONS</span>
                </div>
                <div class="col">
                    <img src="{{Vite::asset('resources\img\buy-comics-shop-locator.png')}}" alt="digital comics" class="locator">
                    <span>COMIC SHOP LOCATOR</span>
                </div>
                <div class="col">
                    <img src="{{Vite::asset('resources\img\buy-dc-power-visa.svg')}}" alt="digital comics">
                    <span>DC POWER VISA</span>
                </div>
            </div>
        </div>
    </div>

     
@endsection