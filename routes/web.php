<?php

use Illuminate\Support\Facades\Route;
use App\Models\Color;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    $colors = Color::all();
    Log::info("Colors: " . $colors);
    return view('welcome', [ "colors" => $colors ]);
});
