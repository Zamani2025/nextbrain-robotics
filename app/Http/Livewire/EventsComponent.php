<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventsComponent extends Component
{
    public function render()
    {
        return view('livewire.events-component')->layout("layouts.events");
    }
}
