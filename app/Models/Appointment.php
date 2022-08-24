<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=[
      'name','email','phone','service_id','message'
    ];
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
