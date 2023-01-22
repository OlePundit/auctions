<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $guarded = [];

   
    public function garageImage()
    {
        $imagePath = ($this->image) ? $this->image: 'shop/garage.svg';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
