@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-2">
        <strong class="mx-1 my-1 offer" style="background-color:#000"><h2 class="mx-2">Top Offers</h2></strong>
        <div class="row justify-content-center">
            @foreach ($auctions as $auction)          
            <div class="col pt-2 mx-2">          
                <a href="/auctions/{{$auction->slug}}">
                    <div class="">
                        <img src="/storage/{{$auction->image}}" class="card-img-top rounded" style="max-width: 100%;">                        
                    </div>
                </a>
                <div class="card-body">
                    <p class="font-weight-bold">{{$auction->title}} </span></p>    
                    
                    
                                    
                    <span> Starting Price : </span><strong>{{$auction->price}}<span> KSH </span></strong>  
                    <p><span><i class="bi bi-geo-alt-fill"></i></span>{{$auction->location}}</p>                    
                </div> 
            </div>
            @endforeach
        </div>
    </div>
    
</div>
@endsection