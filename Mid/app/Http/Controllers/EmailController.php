<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function sendMail($e_sub, $e_body,$e_otp)
    {
        
    
        Mail::to (['iamtalha.mht@gmail.com',''])
                ->send(new sendMail("OTP","1223"));
}
}