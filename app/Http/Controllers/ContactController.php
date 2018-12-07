<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact;
use Mail;

class ContactController extends Controller
{
    public function store()
    {
    	Mail::to('hernandomtz@gmail.com')->send(new NewContact());
    }
}
