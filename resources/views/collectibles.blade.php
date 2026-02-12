@extends('layouts/default')

@php
    $comics = config('comics');
@endphp


@section('content')
    <h1 class="text-center">Collectibles</h1>

    <x-shop-links>
        
    </x-shop-links>

@endsection