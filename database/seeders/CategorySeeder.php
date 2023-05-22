<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                "category" => 'sports',
                "name" => 'Football',
                "description" => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.',
                "status" => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                "category" => 'cloths',
                "name" => 'Top',
                "description" => 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.',
                "status" => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
