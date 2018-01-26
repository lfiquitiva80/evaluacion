<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class aceptacion extends Mailable
{
    use Queueable, SerializesModels;


    public $invitacion;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invitacion)
    {
        $this->invitacion=$invitacion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.aceptacion.aceptacion')->subject('Gracias por evaluar el proyecto y/o artículo '.$this->invitacion->DescripcionProyecto_Articulo)
                        ->with([
                        'DescripcionProyecto_Articulo' => $this->invitacion->DescripcionProyecto_Articulo,
                        'id_evaluador' => $this->invitacion->id_evaluador,
                        'proponente' => $this->invitacion->CoordinadorProyecto_Articulo,
                    ]);;
    }
}
