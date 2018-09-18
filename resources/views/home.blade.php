@extends('layouts.app')

@section('content')
<style>
    .wrapper { width:980px; margin:auto; }
ul.tabs { margin:0; padding:0; float:left; }
ul.tabs li { float:left; display:inline; margin-right:1px; cursor:pointer; font-weight:bold;  }
ul.tabs li a { width:195px; line-height:30px; background:#09F; text-align:center; float:left; text-decoration:none; color:#fff; }
ul.tabs li a:hover, ul.tabs li a.active { background:#fff; color:#09f; }

.tab_content_container { width:940px; height:200px; float:left; background:#fff; padding:20px; margin-top:1px; font-size:14px; border-radius:0 0 10px 10px; -moz-border-radius:0 0 10px 10px; -webkit-border-radius:0 0 10px 10px; display:block;}
.tab_content { display:none; position:absolute;  width:940px; height:200px; overflow:auto; overflow-x:hidden;}
.tab_content_active { display:block; position:absolute; width:940px; height:200px; overflow:auto; overflow-x:hidden;  }
.tab_content_active span { float:left; width:100px; margin-right:20px; }

</style>
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <div class="wrapper">
            <ul class="tabs">
                <li><a href="javascript:void(0); return false;" rel="#tabcontent1" class="tab active">TAB 1</a></li>
                <li><a href="javascript:void(0); return false;" rel="#tabcontent2" class="tab">TAB 2</a></li>
                <li><a href="javascript:void(0); return false;" rel="#tabcontent3" class="tab">TAB 3</a></li>
                <li><a href="javascript:void(0); return false;" rel="#tabcontent4" class="tab">TAB 4</a></li>
                <li><a href="javascript:void(0); return false;" rel="#tabcontent5" class="tab">TAB 5</a></li>
            </ul>
            
            <div class="tab_content_container">
                <div class="tab_content tab_content_active" id="tabcontent1">
                    <h3>What Is Loren Ipsum ?</h3>
                    <span><img src="http://lorempixel.com/output/sports-h-c-100-200-5.jpg" /></span>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                
                <div class="tab_content" id="tabcontent2">
                    <h3>Why do we use ?</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                </div>
                
                <div class="tab_content" id="tabcontent3">
                    <h3>Where does it come from ?</h3>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                </div>
                
                <div class="tab_content" id="tabcontent4">
                    <h3>Where can I get some ?</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
                
                <div class="tab_content" id="tabcontent5">
                    <h3>What Is Loren Ipsum ?</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
</div>
@endsection
