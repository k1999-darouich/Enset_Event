@extends('layouts.app')

@section('content')

<div class="row profile">
    <div class="col-md-4 profile-left">
        <div class="row" > 
            <div class="col-md-10 position-fixed " style="width: auto;" >
                <h1 class="profile-heading ">My Profile</h1>
                <div class="row mb-3">
                    <div class="col-md-5">
                        <img src="\images\prof.jpg"  width="auto" alt="" class="rounded-circle">
                    </div>
                    <div class="col-md-7 pt-3" style="padding-left: 12%;">
                        <h5 class="font-weight-bold">Khawla DAROUICH</h5>
                        <h6>Khawla@gmail.com</h6>
                        <a href="#" > Edit profile picture <i class="fas fa-camera" ></i></a>
                    </div>
                </div>
                <hr color="white">
                <div class="col-md-12 bloc-active">
                <i class="far fa-calendar-alt" style="font-size: large;"></i>
                   <a href="#">EVENTS</a> 
                </div>
                <div class="col-md-12 bloc">
                
                <i class="fas fa-cogs " style="font-size: large;"></i>
                   <a href="#">SETTINGS</a> 
                </div>
                <div class="col-md-12 bloc">
                <i class="far fa-heart" style="font-size: large;"></i>
                   <a href="#">FAVORITES</a> 
                </div>
                

            </div>
        </div>
    </div>
    <div class="col-md-8 profile-right">
        <div class="form-pic">
        <h3 class="form-heading"> Change profile picture</h3>
            <form action="/profile/pic" class="row " method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="col-md-5">
                    <img src="\images\prof.jpg"  width="auto" alt="" class="rounded-circle">
                    </div>
                    <div class="form-group  col-md-7 mt-3">
                        <input id="img" placeholder="" type="file" class="form-control @error('img') is-invalid @enderror" name="img" required>
                        <button class="btnRegister mt-5"> save </button>
                            @error('img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    
            </form> 
        </div>       
    </div>
</div>

@endsection
