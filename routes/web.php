<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $active = 'home';

    return view('home', compact('active'));
})->name('comics');

Route::get('/characters', function () {

    $active = 'characters';

    return view('characters', compact('active'));
})->name('characters');

Route::get('/movies', function () {

    $active = 'movies';

    return view('movies', compact('active'));
})->name('movies');

Route::get('/tv', function () {

    $active = 'tv';

    return view('tv', compact('active'));
})->name('tv');

Route::get('/games', function () {

    $active = 'games';

    return view('games', compact('active'));
})->name('games');

Route::get('/collectibles', function () {

    $active = 'collectibles';

    return view('collectibles', compact('active'));
})->name('collectibles');

Route::get('/videos', function () {

    $active = 'videos';

    return view('videos', compact('active'));
})->name('videos');

Route::get('/fans', function () {

    $active = 'fans';

    return view('fans', compact('active'));
})->name('fans');

Route::get('/news', function () {

    $active = 'news';

    return view('news', compact('active'));
})->name('news');

Route::get('/shop', function () {

    $active = 'shop';

    return view('shop', compact('active'));
})->name('shop');
