<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 30;
        for ($i = 0; $i < $limit; $i++){
            DB::table('categories')->insert([
                'name'        => $faker->name,
                'habilitado'  => $faker->boolean,
                'description' => $faker->word
            ]);
        }
    }
}
