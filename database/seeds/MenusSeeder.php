<?php

use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->truncate();
        DB::table('menus')->insert(array(
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "1",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "2",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "2",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "2",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "3",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "4",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "5",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "5",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "5",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "6",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "7",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "8",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "8",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "8",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "9",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "10",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            ),
            array(
                'price' => "10000",
                'name' => "Món ăn 1",
                'restaurant_id' => "11",
                'path' => "https://i.imgur.com/mBEMIRS.jpg",
            ),
            array(
                'price' => "20000",
                'name' => "Món ăn 2",
                'restaurant_id' => "11",
                'path' => "https://i.imgur.com/DEo4Csx.jpg",
            ),
            array(
                'price' => "30000",
                'name' => "Món ăn 3",
                'restaurant_id' => "11",
                'path' => "https://i.imgur.com/ec4ZpVO.jpg",
            )
        ));
    }
}
