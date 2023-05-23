<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                "image" => 'image\model-858748_960_720.jpg',
                "name" => 'Black dress for Women',
                "price" => 2000,
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi odio recusandae aliquid ad impedit autem commodi earum voluptatem laboriosam?",
                "quantity" => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
           ]);
    }
}
