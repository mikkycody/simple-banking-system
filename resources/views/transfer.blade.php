@extends('layouts.app')
@section('content')
{{-- us-cdbr-iron-east-01.cleardb.net, heroku_775fe1827e2341d, bab9a02e75279b,8f5c84a0 --}}

{{-- <form method="POST" action="{{ route('transfer') }}">
        @csrf
        @include('alert')
        
        @if (Session::has('message'))
        <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
        @endif
        <h2 class="text-center">Transfer Money</h2><br />
        <div class="form-group">
            
            <label for="" class="col-md-2 col-form-label text-md-right">{{ __('From') }}</label>

            <div class="col-md-4">
                <input id="" type="number" class="form-control" name="" value={{ Auth::user()->account_number }} required autofocus disabled>
            </div>
        </div>
        <div class="form-group ">
            <label for="ben_number" class="col-md-2 col-form-label text-md-right">{{ __('To') }}</label>

            <div class="col-md-4">
                <input id="ben_number" type="number" class="form-control" name="ben_number" value="" required autofocus>
            </div>
        </div>
        <div class="form-group ">
            <label for="amount" class="col-md-2 col-form-label text-md-right">{{ __('Amount($)') }}</label>

            <div class="col-md-4">
                <input id="name" type="number" class="form-control" name="amount" value="" required >
            </div>
        </div>
            <div class="form-group ">
                <label for="remarks" class="col-md-2 col-form-label text-md-right">{{ __('Memo') }}</label>
    
                <div class="col-md-4">
                    <input id="name" type="text" class="form-control" name="remarks" value="" required >
                </div>
            </div>
            
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Transfer') }}
                </button>
            </div>
        </div>    
</form>

 --}}

 <form method="POST" action="{{ route('transfer') }}">
        @csrf
<div class="container">
<div class="col-md-12 card">
    <br/>
        @if (Session::has('message'))
        <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
        @endif
        <br /><h2 class="text-center">Transfer Money</h2>
<div class="row card-body">
    <div class="col-md-6">
        
            <div class="form-group ">
                <div class="col-md-12">
                    <label for="" class="col-form-label text-md-right">{{ __('From') }}</label>
                    <input id="" type="number" class="form-control" name="" value={{ Auth::user()->account_number }}  disabled>
                </div>
            </div>
    </div>
    <div class="col-md-6">
        <div class="form-group ">
            <div class="col-md-12">
                <label for="ben_number" class="col-form-label text-md-right">{{ __('To') }}</label>
                <input id="ben_number" type="number" class="form-control" name="ben_number" value="" required autofocus>
            </div>
        </div>
    </div>
</div>



<div class="row card-body">
        <div class="col-md-6">
            <div class="form-group ">
                    <div class="col-md-12">
                        <label for="amount" class="col-form-label text-md-right">{{ __('Amount($)') }}</label>
                        <input id="name" type="number" class="form-control" name="amount" value="" required >
                    </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group ">
                <div class="col-md-12">
                    <label for="remarks" class="col-form-label text-md-right">{{ __('Memo') }}</label>
                    <input id="name" type="text" class="form-control" name="remarks" value="" required >
                </div>
            </div>
        </div>
</div>
<div class="row card-body">
    <div class="col-md-6">
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">
                    {{ __('Transfer') }}
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        
    </div>
</div>  
</form>
 

</div>
</div>
@endsection