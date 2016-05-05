<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles')->insert(array(
            array(
                'title' => "Giảm giá dịp lễ",
                'author' => "Sang Trần",
                'body' => "Vậy là sau một năm khai trương cửa hàng đầu tiên tại thành phố Đà Nẵng xinh đẹp, ABC Bakery đã nhận được rất nhiều ân tình từ các bạn. Nhiều bạn còn inbox riêng hỏi tiệm sao không có khu vực ngồi lại, chỉ được mua mang về thôi vậy. Thực sự đó là động lực để giờ đây tiệm có thể ra mắt thêm Không gian cafe, cùng các bạn chuyện trò tâm sự, cùng thưởng thức nước ngon bên cạnh các loại bánh vốn sẵn có tại tiệm.

Để chào đón sự kiện này, MỘT KHUYẾN MÃI xin gửi tặng cho các bạn... Hãy ĐĂNG KÝ THAM DỰ event khai trương, BẠN SẼ ĐƯỢC GIẢM 40% CÁC MÓN NƯỚC BẤT KỲ tại tiệm. Nhớ show màn hình điện thoại của bạn cho nhân viên của tiệm trước khi thanh toán để bạn nhân viên tinh ý biết được mình đã tham gia chương trình và áp dụng giảm giá cho bạn nghen!

(*) Khuyến mãi này không áp dụng chung với các khuyến mãi khác",
                'path' => "https://i.imgur.com/JMAZujd.jpg",
                'restaurant_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'title' => "Khai trương đầu hè",
                'author' => "Khoa Nguyễn",
                'body' => "Không gian ở đây tuyệt vời! Phù hợp với từng nhu cầu của khách hàng.trang trí đẹp mắt, ấm cúng,rộng rãi nên nói chuyện tự nhiên. Đặc biệt có mấy bình hoa trên bàn nhìn dễ thương cực. Đồ uống thì cũng khá ngon,menu nhiều thứ để chọn,giá cả cũng hợp lí. Rất phù hợp với học sinh, sinh viên,nhóm, hội. Là không gian phù hợp để chụp hình tự sướng,rất đẹp luôn ạ ! Nói chung là tuyệt!",
                'path' => "https://i.imgur.com/pJDOTFO.jpg",
                'restaurant_id' => "1",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'title' => "Ăn chơi thả phanh",
                'author' => "Xuân Trần",
                'body' => "Dịp 30/04 - 1/5 này, một địa điểm hẹn hò, check-in mới keng xà beng sẽ được ra mắt và đi vào hoạt động. KHU ĂN ĐÊM HELIO với nhiều món ngon khó cưỡng, bao rẻ, bao ngon, bao chất lượng, đảm bảo sẽ thỏa mãn cơn ghiền ăn uống của tất cả mọi người. Từ bún đậu mắm tôm đến bèo nậm lọc, từ bún chả Hà Nội đến mỳ Quảng, cơm gà, từ chè khúc bạch đến trà sữa,...chỉ cần một chuyến dạo chơi là có thể thưởng thức hết, quá tiện đúng không nào! Ngại gì mà không thử!!!",
                'path' => "https://i.imgur.com/OcvLcXY.jpg",
                'restaurant_id' => "3",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            array(
                'title' => "Buffet miễn phí",
                'author' => "Vy Nguyễn",
                'body' => "T-Ce Coffee là mô hình quán café sân vườn mang phong cách vừa cổ điển vừa hoài niệm, với nhiều góc nhỏ décor nhẹ nhàng phù hợp với đa phần các bạn trẻ yêu thích chụp ảnh tại Đà Thành hiện nay.
                Nép mình trong con hẻm khá tĩnh lặng giữa lòng Đà Nẵng, T-Ce Coffee như một chốn dừng chân cho những tâm hồn tĩnh tại. Không gian quán khá rộng và thoáng, đặc biệt được thiết kế theo phong cách hoài cổ như một Hội An thu nhỏ mang lại cho mình cảm giác êm dịu khi đặt chân đến. Cách sắp đặt hài hòa từ những đèn lồng, lu nước hay đơn giản chỉ vài chậu cây thôi cũng tạo nên một hồn quê mộc mạc nhưng cũng đầy hoài niệm. Không chỉ dành cho những ai yêu thích sự yên tĩnh, quán còn thích hợp cho những bạn trẻ có ý định tìm cho mình những không gian lạ để có thêm những bộ ảnh lung linh nữa đấy.",
                'path' => "https://i.imgur.com/JpeodkP.jpg",
                'restaurant_id' => "4",
                'created_at' => '2016-04-06 09:23:03',
                'updated_at' => '2016-04-06 09:23:03'
            ),
            )
        );
    }
}
