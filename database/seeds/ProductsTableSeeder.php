<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {

        Products::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Products::create([
                'name' => $faker->name,
                'code' => $faker->sentence,
                'price' => $faker->numberBetween(20,500),
                'status' =>'actived',
            ]);
        }
    }
}
