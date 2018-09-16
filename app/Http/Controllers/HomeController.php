<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use Mail;
use Response;
use App\User;
use App\Transfer;
use App\Loan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay()
    {
        return view('pay');
    }




    public function loan()
    {
        return view('loans');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function LoanDb(Request $requests)
    {
        $loan = new Loan();
        $loan->loan_for = $requests->input('loan_for');
        $loan->amount = $requests->input('amount');
        $loan->job_position = $requests->input('job_position');
        $loan->job_date = $requests->input('job_date');
        $loan->income = $requests->input('income');
        $loan->company = $requests->input('company');
        $loan->user_id = Auth::user()->id;

        $message = "Your loan application process was successful";


        if ($loan->save()) {
            // $recipients = ['business@user_updateng.com','user_updatesng@gmail.com',$user->email];
            // foreach ($recipients as $recipient) {
            //     $email = new \App\Mail\Verify($verify);
            //     Mail::to($recipient)->send($email);
            // }
            return view('home')->with('alert','You transfer process was successful');
        } else{
            return view('loans',['request' => $requests])->withErrors($validator);
        }
    }


    // public function loans()
    // {
    //     return view('loans');
    // }
    // public function loanDb(Request $request)
    // {
    //     $loan = new Loan();
    //     $loan->ben_number = $request->input('loan_for');
    //     $loan->amount = $request->input('amount');
    //     $loan->job_position = $request->input('job_position');
    //     $loan->job_date = $request->input('job_date');
    //     $loan->income = $request->input('income');
    //     $loan->user_id = Auth::user()->id;

    //     $message = "Your loan application process was successful";


    //     if ($loan->save()) {
    //         // $recipients = ['business@user_updateng.com','user_updatesng@gmail.com',$user->email];
    //         // foreach ($recipients as $recipient) {
    //         //     $email = new \App\Mail\Verify($verify);
    //         //     Mail::to($recipient)->send($email);
    //         // }
    //         return view('home')->with('alert','You loan application process was successful');
    //     } else{
    //         return view('loans',['request' => $request])->withErrors($validator);
    //     }
    // }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function transfer()
    {
        return view('transfer');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'ben_number' => 'required|string|max:45',
            'amount' => 'required|string',
            'remarks' => 'required|string',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function transferDb(Request $request)
    {
        $transfer = new Transfer();
        $transfer->ben_number = $request->input('ben_number');
        $transfer->amount = $request->input('amount');
        $transfer->remarks = $request->input('remarks');
        $transfer->otp = $request->input('otp');
        $transfer->user_id = Auth::user()->id;
        $transfer->otp_code = rand(1111,9999);
        

        $message = "Your transfer process was successful";
        $check = User::where('account_number', '=', $transfer->ben_number)->get();

        if($check->isEmpty()){
            Session::flash('message', "Sorry this account number does not corresspond with any user, please check it and try again.");
            return Redirect::back();   
        }
        if($transfer->amount > Auth::user()->account_bal ){
            Session::flash('message', "Sorry you do not have sufficient balance to make this transfer.");
            return Redirect::back(); 
        }
        if($transfer->ben_number == Auth::user()->account_number){
            Session::flash('message', "Sorry you can not transfer money to yourself.");
            return Redirect::back();
        }
        if($transfer->amount <= 0){
            Session::flash('message', "Please enter a valid amount to transfer.");
            return Redirect::back();
        }
        else {
            $data = array('name'=>"Ying Banking", 'transfer' => $transfer);
   
            Mail::send(['html'=>'mail'], $data, function($message) {
               $message->to(Auth::user()->email, 'Ying Banking')->subject
                  ('Confirm your OTP');
               $message->from('horluwatowbeey@gmail.com','Ying Banking');
            });
            $transfer->save();
            return view('confirm-transfer',['transfer' => $transfer]);
         } 
        
            //else{
        //     return view('transfer')->withErrors($validator);
        // }
    }


    public function otpConfirm(Request $request)
    {
        $transfer = Transfer::where('id','=',$request->input('id'))->get();
        if($request->input('otp') === $transfer[0]->otp_code){
            Session::flash('message', "Your transfer process was sucessful.");
            return view('home');
        }
        else{
            Session::flash('message', "Sorry, The code you entered is incorrect.");
            return Redirect::back();   
        }

    }

}
