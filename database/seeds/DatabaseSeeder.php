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
        $this->call(CustomersSeeder::class);
        $this->call(LoginsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(RestaurantsSeeder::class);
        $this->call(RestaurantCategoriesSeeder::class);
        $this->call(LocationsSeeder::class);
    }
}
