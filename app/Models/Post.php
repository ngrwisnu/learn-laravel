<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        // ! using IF
        // if(isset($filters['search-input']) ? $filters['search-input'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search-input'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search-input'] . '%');
        // }

        // ! using WHEN
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' .$search . '%')
                        ->orWhere('body', 'like', '%' .$search . '%');
        });

        // $query->when($filters['category'] ?? false, function($query, $category) {
        //     return $query->whereHas('category', function($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
