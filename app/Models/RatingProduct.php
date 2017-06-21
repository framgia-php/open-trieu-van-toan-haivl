<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class RatingProduct extends Model
{
    protected $table = 'rating_products';

    protected $fillable = [
    	'product_id', 'rating',
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
