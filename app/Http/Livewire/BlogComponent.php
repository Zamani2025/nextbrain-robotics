<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class BlogComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $responses = Http::get("https://newsapi.org/v2/top-headlines", [
            "apiKey" => "64ed30fc372e4394a72c2a9c31cf57c3",
            "country" => "IN",
            "category" => "technology",
        ]);
        $response = json_decode($responses->body());
        // dd($response);
        return view('livewire.blog-component', compact("response"))->layout("layouts.blog");
    }
}
