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
                "image" => 'image\footbal2.jpg',
                "name" => 'Football',
                "price" => 300,
                "description" => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.",
                "quantity" => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "image" => 'image\football1.jpg',
                "name" => 'Football',
                "price" => 300,
                "description" => "In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.",
                "quantity" => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           ]);
    }
}
