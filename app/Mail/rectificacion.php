<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class rectificacion extends Mailable
{
    use Queueable, SerializesModels;

     public $data, $Subject, $Contenido;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $Subject, $Contenido)
    {
        $this->data=$data;
        $this->Subject=$Subject;
        $this->Contenido=$Contenido;
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {

        //dd($this->Contenido);
        return $this->markdown('emails.rectificacion.rectificacion')->subject($this->Subject)->with([
                        'Contenido' => $this->Contenido,
                                               
                    ]);
    }
}
