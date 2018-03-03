@extends('profile.profileLayout')
@section('profile')

    <div class="container">
        <div class="info-all">

        <div class="info-head">
            <h2>My Account Information</h2>

        </div>

        <form class="info-form">


        <div class="row">


            <div class="col-sm-5">
                <p>Your Name</p>

            </div>
            <div class="col-sm-7">
                <p class="edit-p-info">{{Auth::user()->name}}</p>
                <input type="text" class="form-control edit-info">


            </div>
            <div class="col-sm-5">
                <p>Your Email</p>

            </div>
            <div class="col-sm-7">
                <p class="edit-p-info">{{Auth::user()->email}}</p>
                <input type="text" class="form-control edit-info">


            </div>
            <div class="col-sm-5">
                <p>Your Picture</p>

            </div>
            <div class="col-sm-7">
                <img class="edit-p-info" style="border-radius:50%;" src="<?php if(Auth::user()->url){ echo asset('image/'. Auth::user()->url); } else{echo asset('image/user-placeholder.png'); }?>" alt="personal">
                <input type="file" class="form-control edit-info">


            </div>
            <div class="col-sm-5">
                <p>Your File Number</p>


            </div>
            <div class="col-sm-7">

                <p class="edit-p-info">{{Auth::user()->file_num}}</p>
                <input type="text" class="form-control edit-info">



            </div>
            <div class="col-sm-5">
                <p>Anther Information</p>


            </div>

            <div class="col-sm-7">
                <p class="edit-p-info">@if(Auth::user()->information){{Auth::user()->information}} @else {{'Nothing'}} @endif</p>
                <input type="text" class="form-control edit-info">

            </div>

    </div>
            <button type="button" onclick="show_input_info()" class="myBtn myBtn-1">change Info</button>
            <button  type="submit" class="myBtn myBtn-2">Update</button>
            <button type="button" onclick="cancel_input_info()" class="myBtn myBtn-3">Cancel</button>

        </form>
        </div>

    </div>

@endsection
@push('styles')
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <style>
        .row
        {
            display: flex;
        }
    </style>

@endpush