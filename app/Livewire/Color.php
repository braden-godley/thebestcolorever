<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Reactive;

class Color extends Component
{
    #[Reactive]
    public \App\Models\Color $color;

    public function render()
    {
        Log::info("Rendering color: " . $this->color);
        return view('livewire.color');
    }
}
