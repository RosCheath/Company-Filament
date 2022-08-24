<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCarousel extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_image', 'service_image', 'feed_image',
    ];
}
