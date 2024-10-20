<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Color;
use App\Models\Vote;
use Illuminate\Support\Facades\Log;

class Game extends Component
{
    public Color $color1;
    public Color $color2;
    public bool $alreadyVoted = false;

    public function rerollColors() {
        $colors = Color::randomPick(2);
        $this->color1 = $colors->first();
        $this->color2 = $colors->last();
        $this->alreadyVoted = false;
    }

    public function vote(int $which) {
        if ($this->alreadyVoted) {
            return;
        }
        $this->alreadyVoted = true;

        $betterColor = match ($which) {
            1 => $this->color1,
            2 => $this->color2,
        };

        $worseColor = match ($which) {
            1 => $this->color2,
            2 => $this->color1,
        };

        $vote = new Vote();
        $vote->ip = request()->ip();
        $vote->better_color_id = $betterColor->id;
        $vote->worse_color_id = $worseColor->id;
        $vote->save();

        $this->rerollColors();

        Log::info("Voted", [ 'better' => $betterColor->color, 'worse' => $worseColor->color, 'ip' => $vote->ip]);
    }

    public function mount() {
        $this->rerollColors();

    }

    public function render()
    {
        return view('livewire.game');
    }
}

