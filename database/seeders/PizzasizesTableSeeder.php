<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzasizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $size = [
          ['Big', '1.2'],
          ['Medium', '1.0'],
          ['Small', '0.8']
        ];

        foreach ($size as $sizeInfo){
            $sizeName = $sizeInfo[0];
            $sizeFactor = $sizeInfo[1];
        }
    }
}
