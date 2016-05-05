<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('customers')->truncate();
        DB::table('customers')->insert(array(
            array('mail' => "sang@gmail.com",
                'first_name' => "Sang",
                'last_name' => "Trần",
                'address' => "2 Quang Trung",
                'tel' => "123456789",
                'sex' => "1",
                'birthday' => "1993-06-08",
                'get_notification' => "1",
                'token' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array('mail' => "Khoa@gmail.com",
                'first_name' => "Khoa",
                'last_name' => "Nguyễn",
                'address' => "104 Dong Da",
                'tel' => "987654321",
                'sex' => "1",
                'birthday' => "1993-09-10",
                'get_notification' => "0",
                'token' => "",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03')
        ));
    }

}
