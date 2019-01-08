<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact2;
use App\Http\Controllers\Input;
use Mail;

class contact2Controller extends Controller
{
    public function send(Request $request)
    {

        $n = $request->input('nombre');
    	$c = $request->input('correo');
    	$t = $request->input('telefono');
    	$m = $request->input('mensaje');

    	Mail::to('hernandomtz@gmail.com')->send(new NewContact2($n, $c, $t, $m));

    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}
