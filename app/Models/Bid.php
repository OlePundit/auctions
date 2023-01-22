<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $guarded = []; 
    
    public function auctions()
    {
    return $this->belongsTo(Auctions::class, 'auctions_id', 'id');
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
