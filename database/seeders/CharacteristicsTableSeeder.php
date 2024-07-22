<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacteristicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('characteristics')->insert([
            ['id' => 101, 'goods_id' => 10092, 'name' => 'Материал', 'value' => 'нержавеющая сталь'],
            ['id' => 202, 'goods_id' => 10092, 'name' => 'Длина, см', 'value' => 23],
            ['id' => 303, 'goods_id' => 10092, 'name' => 'Цвет', 'value' => 'серебристый'],
            ['id' => 404, 'goods_id' => 10092, 'name' => 'Производитель', 'value' => 'Китай'],
        ]);
    }
}
