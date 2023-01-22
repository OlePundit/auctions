<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{
    protected $guarded = []; 

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
    public function bids()
    {
        return $this->hasMany(Bid::class, 'auction_id', 'id')->latest();
    }

    
}
