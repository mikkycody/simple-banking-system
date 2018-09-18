@extends('layouts.app')
@section('content')
   <div class="container">
    <div class="card">
        <div class="card-body">
   @php
    $check = User::where('account_number', '=', $transfer->ben_number)->get();
   @endphp
  
    <div class="card">
                <div class="card-header text-center">Confirm your transfer</div>

                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
                    @endif
                <h4>Are you sure you want to transfer ${{$transfer->amount}}  to  {{$check[0]->firstname}}, if yes enter the  OTP sent to your mail.</h4>
                <br />
                <form method="POST" action="{{ url('confirm-transfer') }}">
                        @csrf
                <div class="form-group row">
                    <input id="otp" type="hidden" class="form-control" name="id" value={{$transfer->id}} >
                    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>
                    
                    <div class="col-md-6">
                        <input id="otp" type="number" class="form-control" name="otp" value="" autofocus required>
                        <br />
                        <button class="btn btn-primary" type="submit">Submit</button>
                        
                    </div>
                </div>
                <a href='{{ URL::previous() }}' class = "btn btn-primary">Go back</a>
                </form>
@endsection