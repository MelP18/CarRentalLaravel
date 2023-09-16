<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'nom','prenom','tel','adresse','photo','email','cni'
    ];
    protected $table ="customers";

    /*public function rentals()
    {
        return $this->hasMany(Rental::class, 'customer_id', 'id');
    }*/

}