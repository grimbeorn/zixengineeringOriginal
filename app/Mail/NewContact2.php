<?php

namespace App\Mail;        

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\n;
use App\t;
use App\c;
use App\m;


class NewContact2 extends Mailable
{
    use Queueable, SerializesModels;

    public $n;
    public $c;
    public $t;
    public $m;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($n, $c, $t, $m)
    {
        $this->n = $n;
        $this->c = $c;
        $this->t = $t;
        $this->m = $m;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contacto2')->subject('Nuevo Contacto');
    }
}
