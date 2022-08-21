<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topbar extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'email', 'date_start', 'date_end', 'time_start', 'time_end',
        'facebook_link', 'telegram_link', 'wechat_link', 'line_link',
    ];
}
