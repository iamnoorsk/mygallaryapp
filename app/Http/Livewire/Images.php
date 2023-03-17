<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\ImageLike;
use Livewire\Component;
use Livewire\WithPagination;

class Images extends Component
{

    use WithPagination;

    private $perPageItem = 12;
    public $search,$key = null, $image_id = null;

    public function getImagesProperty()
    {
        $images = array();
        $images = Image::with('imageLike')->Search($this->search)->latest();
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

    public function storeKey($value,$image_id)
    {
        $this->key      = $value;
        $this->image_id = $image_id;
    }

    public function like($image_id)
    {        
        if(!empty(auth()->id()) && !empty($image_id)){
            $imageLike = ImageLike::where('image_id','=',$image_id)->where('user_id','=',auth()->id())->first();
            if(empty($imageLike)){
                $image = Image::find($image_id);
                $image->like_count += 1;
                $image->save();
                ImageLike::create(['image_id' => $image_id,'user_id' => auth()->id(),'is_like' => true]);
            } else {
                $image = Image::find($image_id);

                if($imageLike->is_like){
                    $imageLike->is_like = false;
                    $image->like_count -= 1;
                } else {
                    $imageLike->is_like = true;
                    $image->like_count += 1;
                }

                $image->save();
                $imageLike->save();
            }

        } else {
            redirect('/login');
        }
    }
}
