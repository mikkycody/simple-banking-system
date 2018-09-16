@extends('layouts.app')
@section('content')
   <div class="container">
    <div class="card">
        <div class="card-body">
    <div class="card">
                <div class="card-header text-center">Confirm your payment</div>

                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
                    @endif
                <h4>Are you sure you want to make this payment, if yes enter the  OTP sent to your mail.</h4>
                <br />
                <form method="POST" action="{{ url('confirm-pay') }}">
                        @csrf
                <div class="form-group row">
                    <input id="otp" type="hidden" class="form-control" name="id" value={{$pay->id}} >
                    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>
                    
                    <div class="col-md-6">
                        <input id="otp" type="number" class="form-control" name="otp" value="" required autofocus>
                        <br />
                        <button class="btn btn-primary" type="submit">Submit</button>
                        
                    </div>
                </div>
                <a href='{{ URL::previous() }}' class = "btn btn-primary">Go back</a>
                </form>
@endsection