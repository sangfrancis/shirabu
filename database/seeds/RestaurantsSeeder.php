<?php

use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('restaurants')->truncate();
        DB::table('restaurants')->insert(array(
            array(
                'name' => "Quán Kem Xôi - Chè Bưởi",
                'address' => "22, Đường Nguyễn Lương Bằng, Phường Hòa Khánh Bắc, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 96 230 36 67",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Restaurant 09",
                'address' => "99, Nguyen Luong Bang Street, Lien Chieu District,Da Nang City,Việt Nam",
                'tel' => "+84 90 532 08 18",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Cafe 14",
                'address' => "14, Đường Nguyễn Lương Bằng, Phường Hòa Khánh Bắc, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 94 511 91 35 ",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Café Arsenal",
                'address' => "29, Đường Nguyễn Lương Bằng, Phường Hòa Khánh Bắc, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 511 3882 819",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Quán Mỳ Quảng Linh",
                'address' => "17, Đường Nguyễn Lương Bằng, Phường Hòa Khánh Bắc, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 511 3736 227",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Quán Phở Nam Định Mạnh Tiến",
                'address' => "38, Đường Nguyễn Lương Bằng, Phường Hòa Khánh Bắc, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 511 3872 121",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Quán Chay Bình Minh",
                'address' => "29, Nguyễn Lương Bằng, Quận Liên Chiểu,Đà Nẵng,Việt Nam",
                'tel' => "+84 123 277 1777 ",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Quán Ốc Ba Miền",
                'address' => "36 Đường Ngô Văn Sở, Phường Hòa Khánh Nam, Quận Liên Chiểu, Thành Phố Đà Nẵng,Việt Nam",
                'tel' => "+84 98 428 30 39",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Pappa Roti - Bánh Nướng",
                'address' => "53,Đặng Dung,Liên Chiểu,Da Nang, Việt Nam",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), array(
                'name' => "Quán 3 Cây Lộc",
                'address' => "54, Ngô Thì Nhậm, Quận Liên Chiểu,Đà Nẵng,Việt Nam",
                'tel' => "+84 98 922 54 42",
                'open' => "16:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),  array(
                'name' => "",
                'address' => "",
                'tel' => "",
                'open' => "8:00",
                'close' => "22:00",
                'price_from' => "50000",
                'price_to' => "200000",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ), 
                )
        );
    }

}
