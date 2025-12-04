<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_details',
        'image_url',
        'price',
        'stock',
        'category_id',
    ];  

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
