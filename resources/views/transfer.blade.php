@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('transfer') }}">
        @csrf
        <h2 class="text-center">Transfer Money</h2>
        <div class="form-group row">
            <label for="ben_number" class="col-md-4 col-form-label text-md-right">{{ __('Beneficiary account number') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="ben_number" value="" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount to transfer') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="amount" value="" required >
            </div>
        </div>
            <div class="form-group row">
                <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('Remarks') }}</label>
    
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="remarks" value="" required >
                </div>
            </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>       
</form>
@endsection