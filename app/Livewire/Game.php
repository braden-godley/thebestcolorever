<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Color;
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
        Log::info("Colors: " . $this->color1 . " and " . $this->color2);
    }

    public function vote(int $which) {
        if ($this->alreadyVoted) {
            return;
        }
        $this->alreadyVoted = true;

        $color = match ($which) {
            1 => $this->color1,
            2 => $this->color2,
        };

        $color->votes++;
        $color->save();

        $this->rerollColors();
    }

    public function mount() {
        $this->rerollColors();

    }

    public function render()
    {
        Log::info("Rendering colors: " . $this->color1 . " and " . $this->color2);
        return view('livewire.game');
    }
}
