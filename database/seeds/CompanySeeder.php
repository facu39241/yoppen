<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Sucursal 1',
            'email' => 'faku69@live.com',
            'responsable' => 'Iva inscripto',
            'direction' => 'calle falsa 123',
            'city' => 'San rafael',
            'cuit' => '20392411721',
            'date_init' => '10-10-1995',
            'phone' => '2604'
        ]);
    }
}

