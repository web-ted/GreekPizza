<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Insert meats
        DB::table('meats')->insert(['name' => 'saucage', 'price' => 1.2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('meats')->insert(['name' => 'bacon', 'price' => 1.5, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('meats')->insert(['name' => 'salami', 'price' => 1.15, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('meats')->insert(['name' => 'pepperoni', 'price' => 1.85, 'created_at' => date("Y-m-d H:i:s")]);

        // Insert cheeses
        DB::table('cheeses')->insert(['name' => 'edam', 'price' => 1.2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('cheeses')->insert(['name' => 'gooda', 'price' => 1.5, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('cheeses')->insert(['name' => 'feta', 'price' => 1.15, 'created_at' => date("Y-m-d H:i:s")]);

        // Insert vegetables
        DB::table('vegetables')->insert(['name' => 'red pepper', 'price' => 1.2, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('vegetables')->insert(['name' => 'green pepper', 'price' => 1.5, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('vegetables')->insert(['name' => 'iceberg', 'price' => 1.15, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('vegetables')->insert(['name' => 'yellow pepper', 'price' => 1.35, 'created_at' => date("Y-m-d H:i:s")]);

        // Insert all sauces
        DB::table('sauces')->insert(['name' => 'tomato sauce', 'price' => 0.5, 'created_at' => date("Y-m-d H:i:s")]);
        DB::table('sauces')->insert(['name' => 'spicy sauce', 'price' => 0.8, 'created_at' => date("Y-m-d H:i:s")]);

        // Create a pizzas that has it all
        DB::table('pizzas')->insert([
            'id'         => 1,
            'name'       => 'Special',
            'price'      => 12,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('meat_pizza')->insert(['pizza_id' => 1, 'meat_id' => 1]);
        DB::table('meat_pizza')->insert(['pizza_id' => 1, 'meat_id' => 2]);
        DB::table('meat_pizza')->insert(['pizza_id' => 1, 'meat_id' => 3]);
        DB::table('meat_pizza')->insert(['pizza_id' => 1, 'meat_id' => 4]);

        DB::table('cheese_pizza')->insert(['pizza_id' => 1, 'cheese_id' => 1]);
        DB::table('cheese_pizza')->insert(['pizza_id' => 1, 'cheese_id' => 2]);
        DB::table('cheese_pizza')->insert(['pizza_id' => 1, 'cheese_id' => 3]);

        DB::table('vegetable_pizza')->insert(['pizza_id' => 1, 'vegetable_id' => 1]);
        DB::table('vegetable_pizza')->insert(['pizza_id' => 1, 'vegetable_id' => 2]);
        DB::table('vegetable_pizza')->insert(['pizza_id' => 1, 'vegetable_id' => 3]);
        DB::table('vegetable_pizza')->insert(['pizza_id' => 1, 'vegetable_id' => 4]);

        DB::table('sauce_pizza')->insert(['pizza_id' => 1, 'sauce_id' => 1]);
    }
}
