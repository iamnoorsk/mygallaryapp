<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithPagination;

class Images extends Component
{

    use WithPagination;

    private $perPageItem = 12;
    public $search,$key = null;

    public function getImagesProperty()
    {
        $images = array();
        $images = Image::Search($this->search)->latest();
        return $images;
    }


    public function render()
    {
        return view('livewire.images',['images' => $this->images->paginate($this->perPageItem)]);
    }

    public function paginationView()
    {
        return 'pagination_view';
    }

    public function storeKey($value)
    {
        $this->key = $value;
    }
}
