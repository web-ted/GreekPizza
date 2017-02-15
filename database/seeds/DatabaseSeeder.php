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
            'price'      => 15.25,
            'user_id'    => 1,
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

        DB::table('employees')->insert([
            'id'           => 1,
            'firstname'    => 'Delivery',
            'lastname'     => 'Boy',
            'birth_date'   => '1980-01-20',
            'hire_date'    => '2000-03-15',
            'job'          => 'Home Delivery',
            'address'      => '21st Jump Str.',
            'city'         => 'Thessaloniki',
            'region'       => 'Center',
            'postalcode'   => '56224',
            'country'      => 'Greece',
            'phone'        => '2310255258',
            'mobile_phone' => '6900112233',
            'nickname'     => 'pinezas',
            'user_id'      => 5,
        ]);

        DB::table('employees')->insert([
            'id'           => 2,
            'firstname'    => 'Ιωάννης',
            'lastname'     => 'Σπασοκλαμπάνιας',
            'birth_date'   => '1956-02-09',
            'hire_date'    => '2000-01-01',
            'job'          => 'Home Delivery',
            'address'      => 'Κολοπετινίτσας 23',
            'city'         => 'Θεσσαλονίκη',
            'region'       => 'Κέντρο',
            'postalcode'   => '56224',
            'country'      => 'Ελλάδα',
            'phone'        => '2310255258',
            'mobile_phone' => '6900112233',
            'nickname'     => 'Σπάσο',
            'user_id'      => 4,
        ]);

        DB::table('customers')->insert([
            'id'           => 2,
            'firstname'    => 'Argirw',
            'lastname'     => 'Swtiriadou',
            'birth_date'   => '1985-06-05',
            'address'      => 'Isminis 28',
            'city'         => 'Ptolemaida',
            'region'       => 'East Macedonia',
            'postalcode'   => '60100',
            'country'      => 'Greece',
            'phone'        => '2353023565',
            'mobile_phone' => '6938452131',
            'nickname'     => 'aswtiriadou',
            'user_id'      => 2,
        ]);

        DB::table('customers')->insert([
            'id'           => 1,
            'firstname'    => 'Marika',
            'lastname'     => 'Pentagiwtissa',
            'birth_date'   => '1978-06-05',
            'address'      => 'Chalkidas 28',
            'city'         => 'Giannitsa',
            'region'       => 'Central Macedonia',
            'postalcode'   => '60100',
            'country'      => 'Greece',
            'phone'        => '2352065412',
            'mobile_phone' => '6936452010',
            'nickname'     => 'marika',
            'user_id'      => 3,
        ]);


        DB::table('orders')->insert([
            'id'          => 1,
            'customer_id' => 1,
            'employee_id' => 1,
            'pizza_id'    => 1,
            'price'       => 15.25,
            'user_id'     => 1,
            'created_at'  => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'id'       => 1,
            'name'     => 'Administrator',
            'email'    => 'admin@greekpizza.com',
            'password' => Hash::make('admin'),
            'role'     => 'admin',
        ]);

        DB::table('users')->insert([
            'id'       => 2,
            'name'     => 'Argirw Swtiriadou',
            'email'    => 'aswti@gmail.com',
            'password' => Hash::make('12345678'),
            'role'     => 'customer',
        ]);

        DB::table('users')->insert([
            'id'       => 3,
            'name'     => 'Marika Pentagiwtissa',
            'email'    => 'marikap@gmail.com',
            'password' => Hash::make('12345678'),
            'role'     => 'customer',
        ]);

        DB::table('users')->insert([
            'id'       => 4,
            'name'     => 'Ιωάννης Σπασοκλαμπάνιας',
            'email'    => 'ispaso@gmail.com',
            'password' => Hash::make('12345678'),
            'role'     => 'employee',
        ]);

        DB::table('users')->insert([
            'id'       => 5,
            'name'     => 'Delivery Boy',
            'email'    => 'dboy@gmail.com',
            'password' => Hash::make('12345678'),
            'role'     => 'employee',
        ]);

        DB::table('users')->insert([
            'id'       => 6,
            'name'     => 'Κώστας Σκλήρης',
            'email'    => 'kwnssk@gmail.com',
            'password' => Hash::make('123456'),
            'role'     => 'admin',
        ]);
    }
}
