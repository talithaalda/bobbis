<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function validateConfigureWallet(Request $request)
    {
        $request->validate([
            'agree' =>'required',
            'payment'=>'required',
            'phone'=>'required'
        ]);
        return view('configurasiotp',[
            'title'=>'Configure OTP',
            'payment'=>$request['payment'],
            'phone'=>$request['phone']
        ]);

    }
    public function validateConfigureDebit(Request $request)
    {
        $request->validate([
            'firstname' =>'required',
            'lastname'=>'required',
            'agree'=>'required',
            'cardnumber'=>'required|min:16',
            'exp'=>'required|min:5',
            'securitycode'=>'required',
        ]);
        return view('confirm',[
            'title' => 'Payment Success',
            'payment'=>$request['payment'],
            'phone'=>$request['phone']
        ]);
    }
    public function validateConfigureGiftCard(Request $request)
    {
        $request->validate([
            'giftcard' =>'required',
            'agree'=>'required'
        ]);
        return view('confirm',[
            'title' => 'Payment Success',
            'payment'=>$request['payment'],
            'phone'=>$request['phone']
        ]);
    }
    public function validateConfigureOTP(Request $request)
    {
        $request->validate([
            'otp' =>'required|min:6'
        ]);
        return view('confirm',[
            'title' => 'Payment Success',
            'payment'=>$request['payment'],
            'phone'=>$request['phone']
        ]);
    }
    
}
