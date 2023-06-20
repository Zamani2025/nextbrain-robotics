<?php

namespace App\Http\Livewire;

use App\Models\Executives;
use App\Models\Gallery;
use Livewire\Component;

class GalleryComponent extends Component
{
    public function render()
    {
        $executives = Executives::paginate(4);
        $galleries = Gallery::paginate(9);
        return view('livewire.gallery-component', compact("executives", "galleries"))->layout("layouts.gallery");
    }
}
