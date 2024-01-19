<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PizzasizesTableSeeder::class,
            PizzaTableSeeder::class,
            IngredientTableSeeder::class,
            OrderTableSeeder::class,
            OrderLineTableSeeder::class,
            OrderStatusTableSeeder::class,
            CustomerTableSeeder::class,
        ]);
    }
}
