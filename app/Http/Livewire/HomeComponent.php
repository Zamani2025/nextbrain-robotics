<?php

namespace App\Http\Livewire;

use App\Models\Executives;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $executives = Executives::paginate(4);
        return view('livewire.home-component', compact("executives"))->layout("layouts.index");
    }
}
