<?php

namespace App\Models;

use App\Models\Rental;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function modalContent(){
        return $this->belongsTo(Modal::class, 'modal_id','id');
    }

    public function rentalCar()
    {
        return $this->hasMany(Rental::class, 'car_id', 'id');
    }
}