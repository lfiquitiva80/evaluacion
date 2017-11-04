<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Requests;
use App\Mail\email;

class email extends Mailable
{
    use Queueable, SerializesModels;


 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
         
    }

    /**
     * Build the message.
     *  
     * @return $this
     */
    public function build()
    {

       //return $this->view('adminlte::emails.notificacion2');
        return $this->markdown('emails.correo.plantilla')
        ->subject('hola')      

        ;


        //return $this->markdown('adminlte::emails.correo.plantilla')->attach('storage/pdf/1048.pdf');
    }
}
