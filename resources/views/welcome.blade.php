@extends('layouts.app')
    @section('content')
     
          <div id="myCarousel" style = "margin-top:-21px;" class="carousel slide" data-ride="carousel">
               
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
                  <div class="col-md-14">
                      <div class="card" style="background:#f9f9f9; font-size:25px;">          
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                  <h2 style="color:gray;font-family:tahoma;">Begin your financial journey</h2>
                                  <ul style="color:#d7d7d7;font-family:tahoma;">
                                    <li>Open an account in minutes</li>
                                    <li>Pay bills instantly</li>
                                    <li>Transfer money</li>
                                    <li>Receive money</li>
                                    <li>Request a loan, and lot more...</li>
                                  </ul>
                              </div>
                              <div class="col-md-6">
                                  <h2 style="color:gray;font-family:tahoma;">Create an account in few minutes</h2>
                                  <h3 style="color:gray;font-family:tahoma;"><i>Instant Access, Easy Payments</i></h3>
                                  <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Get Started') }}</a>
                              </div>
                            </div>  
                          </div>
                      </div>
                  </div>
                               
    @endsection
   