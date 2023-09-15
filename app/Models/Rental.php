<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ["customer_id","cars_id", "car_release_date", "expected_return_date", "effective_return_date", "observations"];

    protected $with = ['cars'];
    protected $table ="affectation";

        public function cars()
    {
        return $this->belongsTo(Cars::class, 'car_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}