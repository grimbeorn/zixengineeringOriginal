<?php

namespace App\Mail;        

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\n;
use App\a;
use App\c;
use App\t;

use App\nombreProyecto;
use App\ubicacion;
use App\tipoEstructura;
use App\otra;
use App\servicioRequerido;
use App\m2;
use App\adjuntar;

use App\m;


class NewPresupuestos2 extends Mailable
{
    use Queueable, SerializesModels;

    public $n;
    public $a;
    public $c;
    public $t;
    public $m;
    // datos proyecto
    public $nombreProyecto;
    public $ubicacion;
    public $tipoEstructura;
    public $otra;
    public $servicioRequerido;
    public $m2;
    public $adjuntar;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($n, $a, $c, $t, $nombreProyecto, $ubicacion, $tipoEstructura, $otra, $servicioRequerido, $m2, $adjuntar, $m)
    {
        $this->n = $n;
        $this->a = $a;
        $this->c = $c;
        $this->t = $t;
        $this->m = $m;
        $this->nombreProyecto = $nombreProyecto;
        $this->ubicacion = $ubicacion;
        $this->tipoEstructura = $tipoEstructura;
        $this->otra = $otra;
        $this->servicioRequerido = $servicioRequerido;
        $this->m2 = $m2;
        $this->adjuntar = $adjuntar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.presupuestos2')->subject('Nueva Solicitud de Presupuesto');
    }
}