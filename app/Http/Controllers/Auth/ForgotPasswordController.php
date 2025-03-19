<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    //
    use SendsPasswordResetEmails;


    public function showLinkRequestForm()
    {
        // Your custom logic here
        return view('auth.passwords.email');
    }

}
