<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class finalencuesta extends Mailable
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
        return $this->markdown('emails.finalrespuesta.finalrespuesta')->subject('Gracias por la terminación proyecto y/o artículo'.$this->invitacion->DescripcionProyecto_Articulo);
    }
}
