<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Color;

class Scoreboard extends Component
{
    public \Illuminate\Support\Collection $colors;

    public function refresh()
    {
        $this->colors = Color::orderBy('votes', 'DESC')->get();
    }

    public function mount()
    {
        $this->refresh();
    }

    public function render()
    {
        return view('livewire.scoreboard');
    }
}
