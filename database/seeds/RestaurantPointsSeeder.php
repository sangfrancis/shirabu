<?php

use Illuminate\Database\Seeder;

class RestaurantPointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('restaurant_points')->truncate();
        DB::table('restaurant_points')->insert(array(
            array(
                'point' => "10",
                'restaurant_id' => "1",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "10",
                'restaurant_id' => "2",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "8",
                'restaurant_id' => "3",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "6",
                'restaurant_id' => "9",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "8",
                'restaurant_id' => "4",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "7",
                'restaurant_id' => "8",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "5",
                'restaurant_id' => "5",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "3",
                'restaurant_id' => "6",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "10",
                'restaurant_id' => "7",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "10",
                'restaurant_id' => "1",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "10",
                'restaurant_id' => "2",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "8",
                'restaurant_id' => "3",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "6",
                'restaurant_id' => "9",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'point' => "8",
                'restaurant_id' => "4",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
                ),
            array(
                'point' => "7",
                'restaurant_id' => "8",
                'customer_id' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            )
        );
    }
}
