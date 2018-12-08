<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact2;
use Mail;

class contact2Controller extends Controller
{
    public function send()
    {
    	Mail::to('hernandomtz@gmail.com')->send(new NewContact2());
    }
}
