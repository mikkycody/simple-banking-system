@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><h2>{{ __('Apply For Loan') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('loans') }}">
                            @csrf
                            <h5 class="text-center">You can get loans to run your business ranging from small scale to large scale, Request a loan today!</h5><br /><br />
                            <div class="form-group row">
                                <label for="loan_for" class="col-md-4 col-form-label text-md-right">{{ __('What do you want to use this loan for?') }}</label>    
                                <div class="col-md-6">
                                    
                                    <select id="loan_for" type="text" class="form-control{{ $errors->has('loan_for') ? ' is-invalid' : '' }}" name="loan_for" required>
                                        <option value="business">Business</option>
                                        <option value="house buying">House Buying</option>
                                        <option value="investment">Investments</option>
                                        <option value="education">Education</option>
                                        <option value="other">Other</option>                
                                    </select>
                                </div>
                            </div>        
                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Desired amount to loan(USD)') }}</label>

                                <div class="col-md-6">
                                    <input id="amount" type="number" class="form-control" name="amount" value="" required >
                                </div>
                            </div>
                            <hr />
                            <h4>Employment And Finanacial Info</h4>
                            <div class="form-group row">
                                <label for="job_position" class="col-md-4 col-form-label text-md-right">{{ __('Job Position or Title') }}</label>

                                <div class="col-md-6">
                                    <input id="job_position" type="text" class="form-control" name="job_position" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="job_date" class="col-md-4 col-form-label text-md-right">{{ __('Job Start Date') }}</label>

                                <div class="col-md-6">
                                    <input id="job_date" type="date" class="form-control" name="job_date" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="income" class="col-md-4 col-form-label text-md-right">{{ __('Annual Income(USD)') }}</label>

                                <div class="col-md-6">
                                    <input id="income" type="text" class="form-control" name="income" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control" name="company" value="">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Request') }}
                                    </button>
                                </div>
                            </div>       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                    
@endsection