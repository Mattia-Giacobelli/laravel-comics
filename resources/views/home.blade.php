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

     
@endsection