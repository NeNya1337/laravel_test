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
        DB::table('products')->insert([
            'article_number' => 10001,
            'name' => 'Besen',
            'description' => 'Besen mit langem Stiel und weißen Borsten',
            'price' => 9.99,
            'image' => '/images/besen.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10002,
            'name' => 'Messer',
            'description' => 'Großes Messer mit scharfer Klinge',
            'price' => 39.99,
            'image' => '/images/messer.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10003,
            'name' => 'Rasenmäher',
            'description' => 'Elektrischer Rasenmäher mit Fangkorb',
            'price' => 199.99,
            'image' => '/images/rasenmaeher.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10004,
            'name' => 'Schaufel',
            'description' => 'Kleine Schaufel für große und kleine Gärtner',
            'price' => 4.99,
            'image' => '/images/schaufel.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10005,
            'name' => 'Schaufel und Besen',
            'description' => 'Set bestehend aus Besen und Kehrschaufel. Hier entkommt kein Schmutz.',
            'price' => 29.99,
            'image' => '/images/schaufel_besen.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10006,
            'name' => 'Schere',
            'description' => 'Schneidet einfach alles. Außer Tiernahrung.',
            'price' => 19.99,
            'image' => '/images/schere.jpg'
        ]);
        DB::table('products')->insert([
            'article_number' => 10007,
            'name' => 'Gartengeräte-Set',
            'description' => 'Set bestehend aus verschiedenen kleinen Gartengeräten. auch perfekt für den Balkon geeignet.',
            'price' => 24.99,
            'image' => '/images/set.jpg'
        ]);

    }
}
