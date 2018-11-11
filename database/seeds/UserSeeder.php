<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Eduardo Juarez',
            'email' => 'kukijuarez@gmail.com',
            'password' => '1234',
            'job' => 'Vendedor',
        ]);
    }
}
