<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'Logout Succed, Please login to access');
    }
}
