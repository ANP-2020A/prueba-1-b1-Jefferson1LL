<?php

use App\Customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run() {
        // Vaciar la tabla.
        Customers::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++)
        { Customers::create([
            'name' => $faker->firstName,
            'lastname' => $faker->lastName,
            'document' => $faker->sentence,

        ]); }

    }

}
