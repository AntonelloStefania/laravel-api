<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PortfolioModel;

use Faker\Generator as Faker;
use Faker\Provider\en_US\Person;

class PortfolioModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<=10; $i++){
            $site= new PortfolioModel();

            $site->title= $faker->words(3, true);
            $site->front_ender=$faker->name();
            $site->back_ender=$faker->name();
            $site->ui=$faker->name();
            $site->ux=$faker->name();
            $site->illustrator=$faker->name();
            $site->link=$faker->url();
            $site->description=$faker->paragraph();
            $site->image=$faker->imageUrl(640, 480, 'animals', true);
            
            $site->save();
        }
    }
}
