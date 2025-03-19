<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthenticatedSessionController extends Controller
{
    //
    protected function authenticated(Request $request, $user)
    {
        return redirect('/user/panel');
    }

}
