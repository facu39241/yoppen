<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

      
    }
}
