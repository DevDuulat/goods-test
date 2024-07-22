<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goods')->insert([
            [
                'id' => 10092,
                'category_id' => 1091,
                'sku' => 1000901,
                'name' => 'Лопатка для котлет 23 см',
                'prices' => json_encode(['old' => 100, 'price' => 90]),
                'description' => 'Эта элегантная и практичная лопатка для котлет станет незаменимым инструментом на вашей кухне. Изготовленная из высококачественной нержавеющей стали, она сочетает в себе долговечность и стиль, что делает её идеальным выбором для любых кулинарных задач.',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
