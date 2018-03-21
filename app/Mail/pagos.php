<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class pagos extends Mailable
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

        
        return $this->markdown('emails.pagos.pagos')->subject('Documentos para gestionar el pago de la evaluación del proyecto y/o artículo '.$this->invitacion->DescripcionProyecto_Articulo)->with([
                        'DescripcionProyecto_Articulo' => $this->invitacion->DescripcionProyecto_Articulo,
                        'id_evaluador' => $this->invitacion->id_evaluador,
                        'pago_evaluador' => $this->invitacion->pago_evaluador,
                    ]);
              
    }
}
