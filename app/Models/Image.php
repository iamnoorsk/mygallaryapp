<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'path',
        'tags',
        'description',
        'like_count',
        'user_id',
    ];

    public function imageLike(): HasOne
    {
        return $this->hasOne(ImageLike::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query,$search)
    {
        if(!empty($search)){
            $query
            ->where('tags','LIKE','%'.$search.'%')
            ->orWhere('description','LIKE','%'.$search.'%');
            
            $query->with('imageLike',function($q) {
                $q->where('user_id','=',auth()->id());
            });

            return $query;
        }
    }
}
