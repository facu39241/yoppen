<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([

            'name' => 'Pedro Vargas',
            'direction' => 'Calle falsa 43',
            'phone' => '2604887799',
            'email' => 'pepe@gmail.com',
            'dni_type' => 'DNI',
            'dni' => '229977552',

        ]);

        DB::table('clients')->insert([

            'name' => 'Maria del Carmen Curro',
            'direction' => 'Cuarta division ',
            'phone' => '2604407225',
            'email' => 'maritacurro1@gmail.com',
            'dni_type' => 'DNI',
            'dni' => '22973030',

        ]);

        DB::table('clients')->insert([

            'name' => 'Zapata Santiago',
            'direction' => 'Cuarta division 237',
            'phone' => '2604558877',
            'email' => 'S4NT14G0@gmail.com',
            'dni_type' => 'DNI',
            'dni' => '44010060',

        ]);
    }
}
