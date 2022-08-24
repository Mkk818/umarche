<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'product_id',
        'quantity'
    ];
}
