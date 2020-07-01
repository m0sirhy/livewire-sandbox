<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $faker = Faker::create();
        $faker = Faker::create('ar_JO');
        foreach (range(1,10000) as $index) {
            DB::table('clients')->insert([
                'full_name' => $faker->name,
                'mobile' => $faker->PhoneNumber,
                'address' => $faker->Address,
            ]);
        }
    }
}
