<?php

use Illuminate\Database\Seeder;

class RestaurantFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_files')->truncate();
        DB::table('restaurant_files')->insert(array(
            array(
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/iGEJlsL.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/NuidcmH.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/dr3fU99.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/dRkj0u1.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "2",
                'path' => "https://i.imgur.com/g5UXcbN.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "2",
                'path' => "https://i.imgur.com/g4pGs1h.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/HzwMowx.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/u6VFGlz.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/BJ0hpB8.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/iGEJlsL.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/NuidcmH.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/dr3fU99.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/dRkj0u1.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "5",
                'path' => "https://i.imgur.com/g5UXcbN.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "5",
                'path' => "https://i.imgur.com/g4pGs1h.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/HzwMowx.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/u6VFGlz.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/BJ0hpB8.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/iGEJlsL.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/NuidcmH.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/dr3fU99.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/dRkj0u1.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "8",
                'path' => "https://i.imgur.com/g5UXcbN.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "8",
                'path' => "https://i.imgur.com/g4pGs1h.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/HzwMowx.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/u6VFGlz.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/BJ0hpB8.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/iGEJlsL.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/NuidcmH.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/dr3fU99.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/dRkj0u1.jpg",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
        ));
    }
}
