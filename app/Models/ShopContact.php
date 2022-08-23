<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'title', 'detail', 'phone', 'email', 'image', 'is_public',
    ];
}
