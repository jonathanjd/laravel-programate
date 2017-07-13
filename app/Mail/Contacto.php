<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $correo;
    public $asunto;
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $correo, $asunto, $mensaje)
    {
        //
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@programate.com')->view('email.contacto');
    }
}
