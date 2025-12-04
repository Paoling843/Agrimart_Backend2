<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
