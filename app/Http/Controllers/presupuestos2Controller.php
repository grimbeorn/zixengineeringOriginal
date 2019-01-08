<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewPresupuestos2;
use App\Http\Controllers\Input;
use Mail;

class presupuestos2Controller extends Controller
{
    public function send(Request $request)
    {
        // datos persona
        $n = $request->input('nombre');
        $a = $request->input('apellido');
    	$c = $request->input('correo');
    	$t = $request->input('telefono');
        // datos proyecto
        $nombreProyecto = $request->input('nombreProyecto');
        $ubicacion = $request->input('ubicacion');
        $tipoEstructura = $request->input('tipoEstructura');
        $otra = $request->input('otra');
        $servicioRequerido = $request->input('servicioRequerido');
        $m2 = $request->input('m2');
        $adjuntar = $request->input('adjuntar');


    	$m = $request->input('mensaje');

    	Mail::to('hernandomtz@gmail.com')->send(new NewPresupuestos2($n, $a, $c, $t, $nombreProyecto, $ubicacion, $tipoEstructura, $otra, $servicioRequerido, $m2, $adjuntar, $m));

    	$notification = 'gracias por su mensaje, nos contactaremos con usted en menos de 24 horas!';
    	return back()->with(compact('notification'));

    }
}