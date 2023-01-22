@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/garage/{{$user->id}}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>Add Profile Image</h1>
            </div>           


            <div class="row">
                <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image</label> 

                <div class="col-md-6">
            
                <input type="file" class="form-control-file" id="image" name="image">
                            
            @error('image')
            
             <strong>{{ $message }}</strong>
                
             @enderror
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-warning text-white">Save Profile</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
@endsection
