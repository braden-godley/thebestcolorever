<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('game');
});

Route::get('/scoreboard', function () {
    return view('scoreboard');
});
