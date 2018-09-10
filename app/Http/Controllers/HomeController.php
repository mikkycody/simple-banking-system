<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transfer;
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
            'ben_name' => 'required|string|max:45',
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
    public function transferDb()
    {
        return User::create([
            'ben_name' => $data['ben_name'],
            'ben_number' => $data['ben_number'],
            'amount' => $data['amount'],
            'remarks' => $data['remarks'],
            'user_id' => Auth::user()->id,
           
        ]);
    }
}
