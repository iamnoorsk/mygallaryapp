<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'path',
        'tags',
        'description'
    ];


    public function scopeSearch($query,$search)
    {
        if(!empty($search)){
            return $query
            ->where('tags','LIKE','%'.$search.'%')
            ->orWhere('description','LIKE','%'.$search.'%');
        }
    }
}
