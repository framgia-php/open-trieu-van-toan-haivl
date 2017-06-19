<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;
use App\Models\ProductImage;
use App\Models\ProductImage;
use App\Models\Comment;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title', 'alias', 'image', 'view', 'source', 'user_id', 'cate_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->HasMany(ProductImage::class);
    }

    public function ratings()
    {
        return $this->HasMany(RatingProduct::class);
    }

    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
}


