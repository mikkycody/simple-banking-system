@extends('layouts.app')
    @section('content')
     
          <div id="myCarousel" style = "margin-top:-34px;" class="carousel slide" data-ride="carousel">
               
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img width="100%" src="{{ asset('img/banner.jpeg') }}" alt="banner">
                    <div class="carousel-caption">
                      <h1 style="font-weight:bolder; color:black;" class="text-center">Welcome To YingBanking</h1>
                      <h2>No. 1 Online Banking System</h2>
                    </div>
                  </div>
                </div>
            </div>  
    @endsection
   