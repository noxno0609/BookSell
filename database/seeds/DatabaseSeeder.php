<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('12'),
            'email' => 'account1@gmail.com',
            'firstname' => 'Mai',
            'lastname' => 'Sỹ Anh',
            'type' => 1
        ]);

        DB::table('users')->insert([
            'username' => 'viewer',
            'password' => bcrypt('12'),
            'email' => 'account2@gmail.com',
            'firstname' => 'Phạm',
            'lastname' => 'Văn Mách',
            'type' => 2
        ]);


        DB::table('books')->insert([
            'title' => 'Sherlock Homes',
            'author' => 'Conan Doyle', 
            'producer' => 'NXB Kim Đồng',
            'price' => 70000,
            'description' => 'Không phải nói nhiều về sức hút của hai cái tên: nhà văn Conan Doyle và “đứa con tinh thần” của cả cuộc đời ông - Sherlock Holmes.',
            'imagename' => 'sherlock.jpg',
            'createduserid' => '1'
        ]);

        DB::table('books')->insert([
            'title' => 'Chuyện Về Những Người Cô Đơn',
            'author' => 'Hạ Vũ', 
            'producer' => 'NXB Hà Nội',
            'price' => 51000,
            'description' => 'Vì trên thế giới này có rất nhiều những người cô đơn…',
            'imagename' => 'chuyenvenhungnguoicodon.jpg',
            'createduserid' => '1'
        ]);

        DB::table('books')->insert([
            'title' => 'Con Nít Con Nôi - Kiddie Kiddo (Song Ngữ Việt - Anh)',
            'author' => 'Ngọc Huyền', 
            'producer' => 'Nhà Xuất Bản Văn Hóa Văn Nghệ',
            'price' => 69500,
            'description' => 'Con Nít Con Nôi - Kiddie Kiddo là một món quà bất ngờ dành cho các bé, cho chính bố mẹ, và cho tất cả mọi người không giới hạn lứa tuổi, giới tính hay nghề nghiệp. Không dạy bảo, không nhắc nhở, không mang vẻ “người lớn” nhắn nhủ trẻ thơ, Con Nít Con Nôi gây ngạc nhiên thú vị bởi những vần thơ trong trẻo, nghịch ngợm, dí dỏm như con nít chính là.',
            'imagename' => 'connitconnoi.jpg',
            'createduserid' => '1'
        ]);

        DB::table('books')->insert([
            'title' => 'Yêu Sao Để Không Đau',
            'author' => 'Hạ Vũ', 
            'producer' => 'Nhà Xuất Bản Hà Nội',
            'price' => 56000,
            'description' => 'Quyển sách, sẽ như những lời “hướng dẫn giữ gìn” tình yêu cho bạn, là những gì tôi đã đi trước, trải nghiệm và ghi nhận. Bạn có thể lấy nó làm hành trang vững chắc trên con đường tình yêu của mình, cũng có thể đọc để cho biết thôi, và vẫn yêu theo cách riêng mà mình muốn. Nhưng, có thể hứa với tôi một điều này không? Rằng dù bạn có chọn thế nào, thì cũng nhất định không được hối tiếc với sự chọn lựa đó của mình. Vì vốn dĩ bạn đã từng biết, từng hiểu được, nhưng vẫn cam lòng đi theo tiếng gọi của con tim, không hề lo ngại. Sự dấn thân đó là một điều đáng hãnh diện. Sự lựa chọn đó sẽ là một dấu son đỏ cho một thời trẻ dại nhưng vô cùng lộng lẫy của bạn. Một thời từng thương, từng nhớ, từng mơ mộng, từng hi vọng… Một thời thật đẹp! Thế nên, hứa với tôi, đừng bao giờ hối tiếc cả. Cũng như đừng bao giờ để sự hối tiếc cản trở con đường đi tìm kiếm hạnh phúc của cuộc đời mình, được không?.',
            'imagename' => 'yeusaodekhongdau.jpg',
            'createduserid' => '1'
        ]);
    }
}
