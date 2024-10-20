<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Color;

class Scoreboard extends Component
{
    public \Illuminate\Support\Collection $colors;

    public function refresh()
    {
        $this->colors = Color::withCount('betterVotes')->orderBy('better_votes_count', 'desc')->get();
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
