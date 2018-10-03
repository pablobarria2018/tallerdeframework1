<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;



class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for ($i=1; $i < 10; $i++) {
            \DB::table('clientes')->insert(array(
                'nombre'=> $faker->monthName,
                'apellido'=> $faker->streetName,
                'dni'=> $faker->,
                'ciudad_id'=> $i,
                'sexo_id'=> random_int(1,3),
                'created_at'=> date('Y-m-d H:m:s'),
                'updated_at'=> date('Y-m-d H:m:s')
            ));
        }
    }
}
