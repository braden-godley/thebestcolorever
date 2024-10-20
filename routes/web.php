<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Game::class);

Route::get('/scoreboard', \App\Livewire\Scoreboard::class);
