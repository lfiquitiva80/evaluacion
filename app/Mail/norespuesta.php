<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class norespuesta extends Mailable
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

        //dd($this->invitacion);
        return $this->markdown('emails.norespuesta.norespuesta')->subject('Esperamos contar con su experiencia para evaluar otros proyectos y/o artículos del OCyT')->with([
                        'DescripcionProyecto_Articulo' => $this->invitacion->DescripcionProyecto_Articulo,
                        'id_evaluador' => $this->invitacion->id_evaluador,
                    ]);
    }
}
