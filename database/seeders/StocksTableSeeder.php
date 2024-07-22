<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stocks')->insert([
            ['id' => 1, 'goods_id' => 10092, 'count' => 10, 'address' => 'Москва, ул. Ленина, д. 1'],
            ['id' => 2, 'goods_id' => 10092, 'count' => 5, 'address' => 'Москва, ул. Ленина, д. 2'],
        ]);
    }
}
