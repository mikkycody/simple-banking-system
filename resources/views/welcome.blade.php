@extends('layouts.app')
    @section('content')
    <style>
    </style>
    <script>
      //made by vipul mirajkar thevipulm.appspot.com
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
          {{-- <div id="myCarousel" style = "margin-top:-21px;" class="carousel slide" data-ride="carousel">
               
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img style="height:40%;" src="{{ asset('img/banner.jpeg') }}" alt="banner">
                    <div class="carousel-caption">
                      <h1 style="font-weight:bolder; color:black;" class="text-center">Welcome To YingBanking</h1>
                      <h2>No. 1 Online Banking System</h2>
                    </div>
                  </div>
                </div>
          </div>   --}}
          <div style="margin-top:-22px;height:500px;width:100%;  background: rgba(179,220,237,1);
          background: -moz-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
          background: -webkit-gradient(left top, right top, color-stop(0%, rgba(179,220,237,1)), color-stop(50%, rgba(41,184,229,1)), color-stop(100%, rgba(188,224,238,1)));
          background: -webkit-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
          background: -o-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
          background: -ms-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
          background: linear-gradient(to right, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
          " class="banner bgcoloring">
            <h1 class="text-center" style="padding-top:17%;">
                <a style="text-shadow: 2px 2px; color:#fff; text-decoration: none;" href="" class="typewrite" data-period="2000" data-type='[ "Welcome To Ying Banking.", "Your Banking Is Best Served Secure.", "Send And Recieve Money Easier And Faster.", "Save And Keep Track Of Your Transactions." ]'>
                  <span class="wrap"></span>
                </a>
              </h1>
          </div>
                  <div class="col-md-12">
                      <div class="card" style="background:; font-size:25px;">          
                          <div class="card-body">
                            <div class="row justify-content-center">
                              <div class="col-md-offset-2 col-md-4">
                                  <h2 style="color:gray;font-family:tahoma;">Begin your financial journey</h2>
                                  <ul style="color:#gray;font-family:tahoma;">
                                    <li>Open an account in minutes</li>
                                    <li>Pay bills instantly</li>
                                    <li>Transfer money</li>
                                    <li>Receive money</li>
                                    <li>Request a loan, and lot more...</li>
                                  </ul>
                              </div>
                              <div class="col-md-4 col-offset-md-2">
                                  <h2 style="color:gray;font-family:tahoma;">Create an account in few minutes</h2>
                                  <h3 style="color:gray;font-family:tahoma;"><i>Instant Access, Easy Payments</i></h3>
                                  <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Get Started') }}</a>
                              </div>
                            </div>  
                          </div>
                      </div>
                  </div>
                               
    @endsection
   