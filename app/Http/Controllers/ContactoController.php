<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contacto;
use Mail;

class ContactoController extends Controller
{
    public function store()
    {
    	Mail::to('hernandomtz@gmail.com')->send(new contacto());
    }
}
