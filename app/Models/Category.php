<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'alias',
    ];

    public function product()
    {
        return $this->HasMany(Product::class);
    }

    public static function getCategoryById($id)
    {
    	$cate = Category::where('id', $id)->first();
    	if ($cate)
            return $cate->id = $id ? $cate->name : null;
        return "Null";
    }
}

