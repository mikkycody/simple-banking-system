@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
@endsection
