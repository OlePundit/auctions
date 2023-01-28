<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $guarded = [];

   
    public function garageImage()
    {
        $imagePath = ($this->image) ? $this->image: 'garage/car-front.svg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
