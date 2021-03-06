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
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "2",
                'category_id' => "3",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "3",
                'category_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "4",
                'category_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "5",
                'category_id' => "4",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "6",
                'category_id' => "4",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "7",
                'category_id' => "9",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "8",
                'category_id' => "4",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "9",
                'category_id' => "10",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "10",
                'category_id' => "12",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "",
                'category_id' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
                )
        );
    }
}
