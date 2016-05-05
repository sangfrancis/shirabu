<?php

use Illuminate\Database\Seeder;

class CustomerFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_files')->truncate();
        DB::table('customer_files')->insert(array(
            array('path' => "https://i.imgur.com/UZ47w0a.png",
                'customer_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            )
        ));
    }
}
