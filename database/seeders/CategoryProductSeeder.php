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
        DB::table('product_categories')->insert([
            [
                "product_id" => 5,
                "category_id" => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
