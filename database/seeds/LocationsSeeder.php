<?php

use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->truncate();
        DB::table('locations')->insert(array(
            array(
                'lng' => "108.148693",
                'lat' => "16.075388",
                'restaurant_id' => "1",
            ),
            array(
                'lng' => "108.148632",
                'lat' => "16.075158",
                'restaurant_id' => "2",
            ),
            array(
                'lng' => "108.148669",
                'lat' => "16.075221",
                'restaurant_id' => "3",
            ),
            array(
                'lng' => "108.149412",
                'lat' => "16.075098",
                'restaurant_id' => "4",
            ),
            array(
                'lng' => "108.149637",
                'lat' => "16.074946",
                'restaurant_id' => "5",
            ),
            array(
                'lng' => "108.149566",
                'lat' => "16.074776",
                'restaurant_id' => "6",
            ),
            array(
                'lng' => "108.149936",
                'lat' => "16.072803",
                'restaurant_id' => "7",
            ),
            array(
                'lng' => "108.150502",
                'lat' => "16.068696",
                'restaurant_id' => "8",
            ),
            array(
                'lng' => "108.151048",
                'lat' => "16.069269",
                'restaurant_id' => "9",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            array(
                'lng' => "",
                'lat' => "",
                'restaurant_id' => "",
            ),
            )
        );
    }
}
