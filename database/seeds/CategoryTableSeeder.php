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
                'name'        => $faker->word,
                'habilitado'  => $faker->boolean,
                'description' => $faker->name,
                'created_at'  => $faker->dateTimeThisMonth,
                'updated_at'  => $faker->dateTimeThisMonth
            ]);
        }
    }
}
