
        <h3>Hi, {{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</h4>
        <h4>Your OTP is {{$transfer->otp_code}}</h4>
        