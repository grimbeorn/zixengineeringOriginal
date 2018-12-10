<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact2;
// use App\Http\Controllers\Input;
use Mail;

class contact2Controller extends Controller
{
    // public function send(Request $request)
    public function send(Request $request)
    {

        $n = $request->input('nombre');
    	$c = $request->input('correo');
    	$t = $request->input('telefono');
    	$m = $request->input('mensaje');

    	// Mail::to('hernandomtz@gmail.com')->send(new NewContact2($nombre, $telefono, $correo, $mensaje));
    	Mail::to('hernandomtz@gmail.com')->send(new NewContact2($n));

    	$notification = 'pedido registrado!!';
    	return back()->with(compact('notification'));

    }
}
