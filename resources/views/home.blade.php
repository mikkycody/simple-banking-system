@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                @if (Session::has('message'))
                <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
                @endif
            <div class="card">
            <div class="card-header text-center"><h2>{{ __('Account Information') }}</h2></div>
               <div class="card-body"> 
                   
                <div class="row">
                    <div class="col-md-4">
                        <h4>Name:</h4>
                    </div>
                    <div class="col-md-6">
                        {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} 
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h4>Account Pin:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->account_pin }}
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h4>City Name:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->city_name }}
                        </div>
                </div>

                <div class="row">
                        <div class="col-md-4">
                            <h4>Zip Code:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->zip_code }}
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h4>City Name:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->city_name }}
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h4>State:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->state }}
                        </div>
                </div>
                <div class="row">
                        <div class="col-md-4">
                            <h4>Account Type:</h4>
                        </div>
                        <div class="col-md-6">
                            {{ Auth::user()->account_type }}
                        </div>
                </div>


            </div>    
            </div>
        </div>
    </div>
</div>

 --}}
@php
if (date("H") < 12) {
    $welcome = 'Good morning';
} else if (date('H') > 11 && date("H") < 18) {
    $welcome = 'Good afternoon';
} else if(date('H') > 17) {
    $welcome = 'Good evening';
}
@endphp

<div class="container">
    <div style="float:left;" class="col-md-8 card">
            <br/>
                <h2 class="text-center">{{$welcome}} {{ Auth::user()->firstname}}</h2>
                <h3 class="text-center"><i>Account Details</i></h3>
        <div class="row card-body">
            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Account Name:') }}</label>
                    <p>{{ Auth::user()->firstname.' '. Auth::user()->lastname}}</p></b>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Account Number:') }}</label>
                    <p>{{ Auth::user()->account_number }}</p></b>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Email Address:') }}</label>
                    <p>{{Auth::user()->email }}</p></b>
                </div>
            </div>
        </div>

        <div class="row card-body">
            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Mobile number:') }}</label>
                    <p>{{ Auth::user()->mobile}}</p></b>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Account Type:') }}</label>
                    <p>{{ Auth::user()->account_type }}</p></b>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <b><label for="" class="col-form-label text-md-right">{{ __('Account Balance:') }}</label>
                    <p>${{Auth::user()->account_bal }}</p></b>
                </div>
            </div>
        </div>


        <div class="row card-body">
            <div class="col-md-4">
                <div class="col-md-12">
                    <a class="btn" style="width:100%; background:#a2a2a2; color:white;" href="{{ route('transfer') }}">{{ __('Transfer') }}</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                   
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                   
                </div>
            </div>
        </div>

    </div>  





    <div style="float:left; height:432px;" class="col-md-4 card">
            <br/>
                <h2 class="text-center">Profile & Settings</h2>
        <div class="row card-body">
            <div class="col-md-12">
                <div class="col-md-12">
                    <b><p>Name: {{ Auth::user()->firstname.' '. Auth::user()->lastname}}</p>
                    <p>Email: {{ Auth::user()->email}}</p>
                    <p>Mobile number: {{ Auth::user()->mobile}}</p></b><br/>
                    <a class="btn btn-primary"href="{{ route('transfer') }}">{{ __('View And Edit Profile') }}</a>
                </div>
            </div>
        </div>




</div>
<div style="float:left;" class="col-md-8 card">
        <br/>
            
</div>
@endsection
