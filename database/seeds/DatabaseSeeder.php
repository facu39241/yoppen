<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //companies
        DB::table('companies')->insert([
            'name' => 'Sucursal 1',
            'email' => 'faku69@live.com',
            'responsable' => 'Iva inscripto',
            'direction' => 'calle falsa 123',
            'city' => 'San rafael',
            'cuit' => '20392411721',
            'date_init' => '2020-11-02',
            'phone' => '2604'
        ]);
        // users
        DB::table('users')->insert([
            'name' => 'Facundo Zapata',
            'email' => 'faku69@live.com',
            'password' => bcrypt('1234'),
            'job' => 'Vendedor',
        ]);
        DB::table('users')->insert([
            'name' => 'Kuki Juarez',
            'email' => 'eduardo._.juarez@live.com.ar',
            'password' => bcrypt('1234'),
            'job' => 'Vendedor',
        ]);
        // provider;
        DB::table('provisioners')->insert([
            'name'=> 'Capitán YO',
            'direccion'=> 'Av. Rivadavia 1031',
            'phone'=> '02604425988',
            'cuit'=> '1234',
        ]);
        // articles;
        DB::table('articles')->insert([

            'provisioner_id'=> '1',
            'name'=> 'Zapatillas azules',
            'code'=> '100601552',
            'price'=> '1080',
            'stock'=> '10',
        ]);
        DB::table('articles')->insert([

            'provisioner_id'=> '1',
            'name'=> 'Zapatillas negras',
            'code'=> '32323232',
            'price'=> '1300',
            'stock'=> '24',
        ]);
        // clients
        DB::table('articles')->insert([

            'provisioner_id'=> '1',
            'name'=> 'Zapatillas marrones',
            'code'=> '9923874',
            'price'=> '999',
            'stock'=> '99',
        ]);

        DB::table('articles')->insert([

            'provisioner_id'=> '1',
            'name'=> 'Cascos blancos',
            'code'=> '12232',
            'price'=> '400',
            'stock'=> '70',
        ]);
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
