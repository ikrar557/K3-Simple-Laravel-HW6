<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\VerifiesEmails;
class VerificationController extends Controller
{

    protected $redirectTo = '/';


    public function __construct() 
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify','resend');

    }

    public function show (Request $request)
    {
        return $request->user()->hasVerifiedEmail() ? redirect($this->redirectPath()) : view('verification.notice',['pageTitle' => __('Account Verified')]);
    }
    
    public function verify ()
    {

    }
    public function resend ()
    {

    }
    

}
