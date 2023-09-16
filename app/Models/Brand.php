<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function modalContent(){
        return $this->hasmany(Modal::class);
    }

    public function categoryContent(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }



}
