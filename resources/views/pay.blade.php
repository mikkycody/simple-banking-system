@extends('layouts.app')
@section('content')
{{-- <form method="POST" action="{{ route('pay') }}">
        @csrf
        <h2 class="text-center">Bill pay</h2><br />
        <h5 class="text-center">Our bill pay service enables you to pay for a bill online</h5><br />
        <div class="form-group row">
            <label for="pay_for" class="col-md-4 col-form-label text-md-right">{{ __('What are you paying for') }}</label>

            <div class="col-md-6">
                <input id="pay_for" type="text" class="form-control" name="pay_for" value="" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount to pay') }}</label>

            <div class="col-md-6">
                <input id="amount" type="text" class="form-control" name="amount" value="" required >
            </div>
        </div>
        <div class="form-group row">
            <label for="account_pin" class="col-md-4 col-form-label text-md-right">{{ __('Account Pin') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="remarks" value="" required >
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Pay') }}
                </button>
            </div>
        </div>       
</form> --}}





<form method="POST" action="{{ route('pay') }}">
    @csrf
<div class="container">
        <div class="col-md-12 card">
            <br/>
                @if (Session::has('message'))
                <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
                @endif
                <br /><h2 class="text-center">Pay Bills</h2>
                <h5 class="text-center">Our bill pay service enables you to pay for a bill online</h5><br />
        <div class="row card-body">
            <div class="col-md-6">
                
                    <div class="form-group ">
                        <div class="col-md-12">
                            <label for="" class="col-form-label text-md-right">{{ __('Account no') }}</label>
                            <input id="" type="number" class="form-control" name="account_number" value="" required autofocus>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <div class="col-md-12">
                        <label for="payee" class="col-form-label text-md-right">{{ __('Name of payee') }}</label>
                        <input id="payee" type="text" class="form-control" name="payee" value="{{ Auth::user()->firstname.' '. Auth::user()->lastname}}" required autofocus disabled>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="row card-body">
            <div class="col-md-6">
                
                    <div class="form-group ">
                        <div class="col-md-12">
                            <label for="remarks" class="col-form-label text-md-right">{{ __('Remark') }}</label>
                            <input id="name" type="text" class="form-control" name="remarks" value="" required >        
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group ">
                    <div class="col-md-12">
                        <label for="amount" class="col-form-label text-md-right">{{ __('Amount($)') }}</label>
                        <input id="name" type="number" class="form-control" name="amount" value="" required >
                    </div>
                </div>
            </div>
        </div>



        <div class="row card-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Pay') }}
                            </button>
                        </div>
                    </div>
                </div>
            <div class="col-md-6">
                
            </div>
        </div>


@endsection