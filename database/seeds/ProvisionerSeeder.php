<?php


use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class ProvisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provisioners')->insert([
            'name'=> 'Capitán YO',
            'direccion'=> 'Av. Rivadavia 1031',
            'phone'=> '02604425988',
            'cuit'=> '1234',
        ]);
    }
}