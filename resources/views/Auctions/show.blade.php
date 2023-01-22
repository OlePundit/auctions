@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class="col-4">
            <img itemprop="image" src="/storage/{{$slug->image}}" class="w-1000 h-50 rounded" style="max-width:200%;">
        </div>
        <div class="col-4" itemscope itemtype="https://schema.org/Product">           

            <p class="mt-4" itemprop="name"><strong>{{$slug->title}}</strong></p> 
            <hr>

                      
            <p itemprop="price" content="{{$slug->price}}"><strong></strong> {{$slug->price}}<span itemprop="priceCurrency" content="KSH"> Ksh </span></p>
          
            <p><link itemprop="availability" href="https://schema.org/InStock" />{{$slug->status}}</p>
            <p>{{$slug->type}}</p>  
            <p>{{$slug->make}}</p>
            <p>{{$slug->transmission}}</p>
            <p>{{$slug->consumption}}</p>     
            <p>{{$slug->numberplate}}</p>  
            <p>{{$slug->yom}}</p>  
            <p>{{$slug->status}}</p>  
            <p>{{$slug->condtion}}</p> 
            <div>                 
                <a href="/bid/create" class="link mx-1 mt-2">
                <button type="button" class="btn btn-primary">Bid</button>
                </a>                          
            </div>         
                
        </div>
        <div class="col-4 ">
            <div class="row text-center">
                
            </div> 
            <div class="row card">
               <div class="card-body">
                <h3 class="card-title">Bids</h3>
                <hr>
                    @forelse ($slug->bids as $bid)
                    <h6>
                    @if($bid->user)
                    {{$bid->user->name}} :
                    @endif
                    <span>
                    {!! $bid->price !!}
                    </span>
                    <!--<small class="align-items-right">{{$bid->created_at->format('d-m-Y')}}</small>-->
                    </h6>
                    
                    

                    @empty
                        <h6>No comments yet</h6>
                    @endforelse
                    <form action = "/bid" enctype="multipart/form-data" method="post">
                        @csrf           
                        
                        @if(session('message'))
                        <h6 class="alert alert-warning mb-3">{{ session('message')}}</h6>
                        @endif 

                        <hr>
                    
                        <div class="row">
                            <label for="price" class="col-md-4 col-form-label">Enter Price :</label>

                            <div class="col-md-6">
                                <input type="hidden" name="auction_slug" value="{{$slug->slug}}">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pt-4">
                            <button class="btn btn-primary text-white">Add New Bid</button>
                        </div>                
                    </form> 
               </div>
            </div>
                
        </div>
    </div>
</div>
@endsection