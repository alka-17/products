<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_products')->insert([
            [
                "product_id" => 1,
                "category_id" => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "product_id" => 2,
                "category_id" => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
