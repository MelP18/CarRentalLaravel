<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function brandContent(){
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function carContent(){
        return $this->hasMany(Car::class);
    }
}
