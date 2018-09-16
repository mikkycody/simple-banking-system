@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('transfer') }}">
        @csrf
        @include('alert')
        
        @if (Session::has('message'))
        <div class="alert alert-info"><h4 class="text-center" style="font-family:tahoma;">{{ Session::get('message') }}</h4></div>
        @endif
        <h2 class="text-center">Transfer Money</h2><br />

        <div class="form-group row">
            
            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

            <div class="col-md-6">
                <input id="" type="number" class="form-control" name="" value={{ Auth::user()->account_number }} required autofocus disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="ben_number" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

            <div class="col-md-6">
                <input id="ben_number" type="number" class="form-control" name="ben_number" value="" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount($)') }}</label>

            <div class="col-md-6">
                <input id="name" type="number" class="form-control" name="amount" value="" required >
            </div>
        </div>
            <div class="form-group row">
                <label for="remarks" class="col-md-4 col-form-label text-md-right">{{ __('Memo') }}</label>
    
                <div class="col-md-6">
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
        <div>
                <script type="text/javascript">
                    
                 </script>
        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
              <p id="showIt"> 
                  {{-- @php
                     $fetch = User::where('account_number','=','1508356681')->get();
                  @endphp
                  {{$fetch}} --}}
              </p>
              <script type="text/javascript">
                
              </script>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
        </div>
</div>

                <script>
                    function retrieve() {
                        var callIt = document.getElementById("ben_number").value;
                        var showIt =  document.getElementById('showIt')
                        showIt.innerHTML += `${callIt}`;
                        
                    alert(php_var)
                        return callIt;
                    }
                </script>
                
        </div>   
</form>
@endsection