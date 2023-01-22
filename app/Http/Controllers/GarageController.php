<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Auctions;
use App\Models\Bid;
use App\Models\Garage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

class GarageController extends Controller
{
    public function index(User $user)
    {        
        $bidCount = Cache::remember(
            'count.bids.'. $user->id,
            now()->addSeconds(30),
            function()  use ($user){
                return $user->bids->count();
            });

        $activeBids = $user->bids->auctions();    
        return view('Garage.index', compact('user','bidCount','activeBids'));    
    }

    public function edit(User $user, Garage $garage)
    {       
        $this->authorize('update', $user->garage);

        return view('Garage.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',  $user->garage);
        $data = request()->validate([
            'image'=>'',
        ]);

        if (request('image')){
            $imagePath = request('image')->store('garage', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $imageArray = ['image'=>$imagePath];
        }

        auth()->user()->garage->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/garage/{$user->id}");
    }
}
