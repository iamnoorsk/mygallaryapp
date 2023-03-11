<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class Images extends Component
{

    use WithPagination;

    public $search;


    public function render()
    {
        $images = Image::Search($this->search)->get();
        return view('livewire.images',['images' => $images]);
    }
}
