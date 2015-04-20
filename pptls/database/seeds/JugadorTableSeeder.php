<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JugadorTableSeeder extends Seeder {
    
    public function run()
    {
        $faker = Faker::create('es_ES');
        
        for ($i=0; $i<30; $i++) {
            $id = \DB::table('jugadores')->insertGetId(array(
                'nombre'    =>  $faker->firstName,
                'apellido' =>  $faker->lastName,
                'localidad' =>  $faker->city,
                'provincia' =>  $faker->state,
                'victorias' =>  $faker->randomDigit,
                'derrotas'  =>  $faker->randomDigit
            ));
        }
    }
}