<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class gestionpago extends Mailable
{
    use Queueable, SerializesModels;


    public $invitacion,$correo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invitacion,$correo)
    {
        $this->invitacion=$invitacion;
        $this->correo=$correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.gestionpago.gestionpago')->subject('Gestión de Pago para el Proyecto '.$this->invitacion->DescripcionProyecto_Articulo)->with([
                        'DescripcionProyecto_Articulo' => $this->invitacion->DescripcionProyecto_Articulo,
                        'id_evaluador' => $this->invitacion->id_evaluador,
                        'id' => $this->invitacion->id,
                        'Objetivo' => $this->invitacion->Objetivo,
                        'HV' => $this->correo->HV,
                        'Cedula_pdf' => $this->correo->Cedula_pdf,
                        'Certificado_Bancario' => $this->correo->Certificado_Bancario,
                        'cuentacobro' => $this->correo->cuentacobro,
                        'Rut' => $this->correo->Rut,

                        
                    ]);
    }
}

//,$this->correo->Cedula_pdf,$this->correo->Cedula_pdf,$this->correo->Certificado_Bancario,$this->correo->cuentacobro,$this->correo->Rut