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
        $images = Image::Search($this->search)->paginate(12);
        return view('livewire.images',['images' => $images]);
    }

    public function paginationView()
    {
        return 'pagination_view';
    }
}
