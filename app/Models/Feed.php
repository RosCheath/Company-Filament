<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feed extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'description', 'image', 'is_public',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];
}
