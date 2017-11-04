<?php

use Illuminate\Database\Seeder;
use App\participantesevento;
use Faker\factory as Faker;

class participanteseventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker=Faker::create('App\participantesevento');

         
        for($i=1;$i<=39;$i++){


         DB::table('participantesevento')->insert([
            'Documento' => $faker->randomNumber,
            'NombresApellidos' => $faker->name,
            'UnidadAcademica' => $faker->sentence,
            'Disciplina' => $faker->sentence,
            'GrupodeInvestigacion' => $faker->sentence,
            'LineasdeInvestigacion' => $faker->sentence,
            'id_Evento' => 44,
            'TelefonoFijo' => $faker->tollFreePhoneNumber,
            'TelefonoMovil' => $faker->e164PhoneNumber,
            'Correo' => $faker->companyEmail,
            'Cargo' => $faker->secondaryAddress,

           


            ]);
         }
    
       
    }
}
