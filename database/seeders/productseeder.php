<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name' => 'iphone 11 pro ',
            'category' => 'iphone 11 pro ',
            'description' => 'iphone 14 pro ',
            'price' => '70,900',
            'pic' => 'https://pricesl.lk/wp-content/uploads/2021/01/akrales_190913_3666_0391-1024x1024.jpg',

        ]);
    }
}
