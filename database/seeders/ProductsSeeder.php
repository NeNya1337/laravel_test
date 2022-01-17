<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory()->count(10)->make();
        $i = 1;
        while($i <= 10){
            DB::table('products')->insert([
                'article_number' => rand(1000000, 9999999),
                'name' => Str::random(10),
                'description' => Str::random(10),
                'price' => rand(100, 100000)/100
            ]);
            $i++;
        }
    }
}
