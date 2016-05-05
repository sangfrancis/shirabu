<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        DB::table('comments')->insert(array(
            array(
                'customer_id' => "1",
                'restaurant_id' => "1",
                'body' => "Ngon thật!",
                'like' => "100",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "2",
                'body' => "Ngon",
                'like' => "999",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "3",
                'body' => "Bình thường",
                'like' => "1041",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "5",
                'body' => "Tưởng ngon lắm chớ. Đến ăn rồi mới biết ngon thiệt",
                'like' => "10",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "5",
                'body' => "Ngon",
                'like' => "0",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "2",
                'body' => "Dở ẹc",
                'like' => "0",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "2",
                'body' => "Ahihi Đồ ngốc",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "11",
                'body' => "Tỉ dở",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "10",
                'body' => "Thấy gớm ri mà ai cũng khen",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "1",
                'body' => "Ngon bung lụa",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "1",
                'body' => "CŨng tạm thôi sao mày khen lắm thế",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "6",
                'body' => "Ọe!!!",
                'like' => "10",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "9",
                'body' => "Cũng được thôi mà sao ai cũng khen m thấy ghê",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "2",
                'restaurant_id' => "4",
                'body' => "Ừ cũng tạm tạm",
                'like' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'customer_id' => "1",
                'restaurant_id' => "7",
                'body' => "Ngon Ngon Ngon Ngon Ngon ",
                'like' => "2",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            )
        ));
    }
}
