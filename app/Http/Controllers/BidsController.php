<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auctions;
use App\Models\User;
use App\Models\Bid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class BidsController extends Controller
{
    public function create()
    {
        return view('Bids.create');
    }

    public function store(Request $request)
    {
       if(Auth::check())
       {
            $validator = Validator::make($request->all(),[
                'price'=> 'required|integer'

            ]);
            if($validator->fails())
            {
                return redirect()->back->with('message','price is mandatory');
            }
            $auction = Auctions::where('slug', $request->auction_slug)->where('status','open')->first();
          
            if($auction)
            {
                Bid::create([
                    'auction_id' => $auction->id,
                    'user_id'=> Auth::user()->id,
                    'price'=> $request->price

                ]);

                return redirect()->back()->with('message', 'Bid successful');
            }
            else
            {
                return redirect()->back()->with('message', 'No such auction');
            }

       }
       else
       {
            return redirect()->back('login')->with('message','Login first to comment');
       }
    }
  
}
