<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FallbackComponent extends Component
{
    public function render()
    {
        return view('livewire.fallback-component')->layout("layouts.fallback");
    }
}
