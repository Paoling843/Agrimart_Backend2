<?php

namespace App\Models;
use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';

    protected $fillable = [
        'street',
        'purok',
        'barangay',
        'customer_id',
    ];
}
