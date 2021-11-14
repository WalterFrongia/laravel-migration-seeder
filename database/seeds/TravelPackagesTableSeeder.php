<?php

use Illuminate\Database\Seeder;
use app\Models\TravelPackage;

// QUESTO E' UN MODO PER IMPORTARE UNA RISORSA PHP E ASSEGNARLE UN NOME CHE LA RAPPRESENTI
use Faker\Generator as Faker; 

class TravelPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) //si passa l'oggetto faker in una variabiler faker
    {
        for($i=0 ; $i <40 ; $i++){
            $newTravelPackage = new TravelPackage();
            $newTravelPackage->place = $faker->words(2, true);
            $newTravelPackage->description = $faker->text(100);
            $newTravelPackage->days = $faker->randomDigit();
            $newTravelPackage->price = $faker->randomFloat(1, 100, 1000);

            $newTravelPackage->save();
        }
    }
}
