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
    }
}
