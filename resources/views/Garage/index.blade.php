@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex flex-row justify-content-center">
        <div class="col-lg-4 col-md-6 col-xs-6 pt-5">
            <div class="d-flex align-items-center pb-3">
                <strong> {{ $user->name}} </strong>               
            </div>              
            <div class="d-flex">
                <div style="padding-right: 25px;"><strong>{{$bidCount}}</strong> Bids</div>            
        

            </div>
            
            <div class="d-flex">             
               
            
            
                @can ('update', $user->garage)
                
                <a href="/garage/{{$user->id}}/edit" class="link mx-1 mt-2">
                <button type="button" class="btn btn-light">Upload Profile Pic</button>
                </a>
                @endcan  
            </div>

              
        </div>
        <div class="col-lg-3 col-md-4 col-xs-4 p-5">
            <img src="{{$user->garage->garageImage()}}" class="rounded-circle w-100" style="max-width:80%;">    
        </div>
    </div>

    <div class="row pt-5">
        @foreach($activeBids as $activeBid)
        <div class="col-3 pb-4">
            <a href="/auctions/{{$activeBid->slug}}"><img src="/storage/{{$activeBid->image}}" class="w-100 rounded"></a>

        </div>     
        @endforeach
    </div>
        
</div>
@endsection