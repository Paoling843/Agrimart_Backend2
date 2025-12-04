<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'address',
        'phone',
    ];

    
    
    
}
