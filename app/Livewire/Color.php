<?php

namespace App\Livewire;

use Livewire\Component;

class Color extends Component
{
    public \App\Models\Color $color;

    public function render()
    {
        return view('livewire.color');
    }
}
