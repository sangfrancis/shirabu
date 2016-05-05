<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('categories')->truncate();
        DB::table('categories')->insert(array(
            array(
                'name' => "Cà phê",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán ăn tự phục vụ",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Nhà hàng",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán ăn",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Bar",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Pub",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán giải khát",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán vỉa hè",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán chay",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Tiệm bánh",//10
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán ăn nhỏ",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "Quán nhậu",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "",
            ),
            array(
                
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03',
                'name' => "",
            ),
                )
        );
    }

}
