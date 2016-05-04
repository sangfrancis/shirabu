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
            ),
            array(
                'access_token' => "Quán ăn tự phục vụ",
            ),
            array(
                'access_token' => "Nhà hàng",
            ),
            array(
                'access_token' => "Quán ăn",
            ),
            array(
                'access_token' => "Bar",
            ),
            array(
                'access_token' => "Pub",
            ),
            array(
                'access_token' => "Quán giải khát",
            ),
            array(
                'access_token' => "Quán vỉa hè",
            ),
            array(
                'access_token' => "Quán chay",
            ),
            array(
                'access_token' => "Tiệm bánh",//10
            ),
            array(
                'access_token' => "Quán ăn nhỏ",
            ),
            array(
                'access_token' => "Quán nhậu",
            ),
            array(
                'access_token' => "",
            ),
            array(
                'access_token' => "",
            ),
            array(
                'access_token' => "",
            ),
            array(
                'access_token' => "",
            ),
            array(
                'access_token' => "",
            ),
                )
        );
    }

}
