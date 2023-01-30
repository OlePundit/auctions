<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auctions;
use App\Models\User;

class AuctionsController extends Controller
{
    public function index()
    {
        $auctions = Auctions::all();

        $closedauctions = Auctions::where('status', 'closed')->get(); 

        return view('Auctions.index', compact('auctions', 'closedauctions'));
    }

    public function show(\App\Models\Auctions $slug)
    {
        return view('Auctions.show', compact('slug'));
    }
}
