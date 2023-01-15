@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row">
        <div class="col-6">
            <img itemprop="image" src="/storage/{{$slug->image}}" class="w-1000 h-50 rounded" style="max-width:200%;">
        </div>
        <div class="col-4" itemscope itemtype="https://schema.org/Product">           

            <p itemprop="name"><strong>{{$slug->title}}</strong></p> 
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
                
        </div>
    </div>
</div>
@endsection