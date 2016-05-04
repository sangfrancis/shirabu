<?php

use Illuminate\Database\Seeder;

class LoginsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('logins')->truncate();
        DB::table('logins')->insert(array(
            array(
                'access_token' => "aaaaaaaaaaaaaaaaaaa",
                'password' => "12345",
                'refresh_token' => "111111111111111111",
                'customer_id' => "1",
            ),
            array(
                'access_token' => "11111111111111111111",
                'password' => "12345",
                'refresh_token' => "22222222222222222",
                'customer_id' => "2",))
        );
    }

}
