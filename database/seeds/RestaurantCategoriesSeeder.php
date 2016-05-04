<?php

use Illuminate\Database\Seeder;

class RestaurantCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_category')->truncate();
        DB::table('restaurant_category')->insert(array(
            array(
                'restaurant_id' => "1",
                'category_id' => "2",
            ),
            array(
                'restaurant_id' => "2",
                'category_id' => "3",
            ),
            array(
                'restaurant_id' => "3",
                'category_id' => "1",
            ),
            array(
                'restaurant_id' => "4",
                'category_id' => "1",
            ),
            array(
                'restaurant_id' => "5",
                'category_id' => "4",
            ),
            array(
                'restaurant_id' => "6",
                'category_id' => "4",
            ),
            array(
                'restaurant_id' => "7",
                'category_id' => "9",
            ),
            array(
                'restaurant_id' => "8",
                'category_id' => "4",
            ),
            array(
                'restaurant_id' => "9",
                'category_id' => "10",
            ),
            array(
                'restaurant_id' => "10",
                'category_id' => "12",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
            ),
                )
        );
    }
}
