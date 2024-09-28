<?php
///////////// danh mục
/*
- id => id
- tên danh mục => cart_id
*/

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => "điện thoại",
    ),
    2 => array(
        'id' => 2,
        'cat_title' => "macbook",
    ),
);


/////////// dữ liệu sản phẩm
/*
- id => id
- tên sản phẩm => product_title
- giá => price
- mã sản phẩm => code
- mô tả => product_desc
- ảnh đại diện => product_thumb => url
- nội dung => product_content
- id danh mục => cat_id    
*/
$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 256GB',
        'price' => '26696000',
        'code' => 'UNI#1',
        'product_desc' => 'Mới đây thì chiếc điện thoại iPhone 14 Pro Max 256GB cũng đã được chính thức lộ diện trên toàn cầu và đập tan bao lời đồn đoán bấy lâu',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/289700/iphone-14-pro-max-vang-1.jpg',
        'product_content' => "<p>iPhone 14 Pro Max sẽ vẫn giữ lại kiểu thiết kế đặc trưng đến từ các thế hệ trước như iPhone 13 series với các cạnh vuông vức và hai mặt gia công phẳng, đây vẫn được xem là kiểu thiết kế rất thịnh hành và thành công trên thị trường di động tính đến thời điểm hiện tại.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/289700/iphone-14-pro-max-256gb-080922-102929.jpg'/></p>",
        'cat_id' => 1,
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Điện thoại OPPO Reno8 T 5G 256GB',
        'price' => '10990000',
        'code' => 'UNI#2',
        'product_desc' => 'Tiếp nối sự thành công rực rỡ đến từ các thế hệ trước đó thì chiếc OPPO Reno8 T 5G 256GB cuối cùng đã được giới thiệu chính thức tại Việt Nam',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/301642/oppo-reno8-t-vang-5g-1.jpg',
        'product_content' => "<p>Qua những lần chạm đầu tiên trên chiếc Reno8 T 5G thì mình thấy đây là một chiếc điện thoại có độ hoàn thiện khá tốt, máy mang lại cho mình một cảm giác cầm nắm tương đối là đầm tay, hai bên cạnh cũng được làm bo cong giúp hạn chế tình trạng cấn tay mang đến cho mình một trải nghiệm sử dụng khá là thoải mái.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/301642/oppo-reno8-t-5g-256gb-020323-101507.jpg'/></p>",
        'cat_id' => 1,
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Điện thoại Samsung Galaxy A34 5G 256GB ',
        'price' => '8930000',
        'code' => 'UNI#3',
        'product_desc' => 'Galaxy A34 5G sở hữu thiết kế đẹp và hiện đại với mặt lưng nhẵn làm từ nhựa cao cấp, màn hình lớn và cụm camera được bố trí theo một hàng dọc bắt mắt.',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/298377/samsung-galaxy-a34-xanh-glr-1.jpg',
        'product_content' => "<p>Samsung Galaxy A34 5G là mẫu điện thoại thông minh tầm trung mới của Samsung được ra mắt vào tháng 03/2023. Thiết bị hứa hẹn sẽ cung cấp kết nối 5G hiện đại và một hiệu suất ổn định để mang lại trải nghiệm mượt mà cho người dùng.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/42/298377/Kit/samsung-galaxy-a34-5g-note.jpg'/></p>",
        'cat_id' => 1,
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Laptop Apple MacBook Air M1 2020 8GB/256GB/7-core GPU',
        'price' => '18590000',
        'code' => 'UNI#4',
        'product_desc' => 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gold-01-org.jpg',
        'product_content' => "<p>Chiếc MacBook này được trang bị con chip Apple M1 được sản xuất độc quyền bởi Nhà Táo trên tiến trình 5 nm, 8 lõi bao gồm 4 lõi tiết kiệm điện và 4 lõi hiệu suất cao, mang đến một hiệu năng kinh ngạc, xử lý mọi tác vụ văn phòng một cách mượt mà như Word, Excel, Powerpoint,...</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/44/231244/apple-macbook-air-2020-mgn63saa-280323-125154.jpg'/></p>",
        'cat_id' => 2,
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'Laptop Apple MacBook Air M2 2022 8GB/256GB/8-core',
        'price' => '25690000',
        'code' => 'UNI#5',
        'product_desc' => 'Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-01-1.jpg',
        'product_content' => "<p>Tạo cảm hứng làm việc ngay cho người dùng mỗi khi bật máy lên nhờ hệ điều hành macOS cho giao diện máy tính có độ thẩm mỹ cao, thuận tiện thao tác mở ứng dụng làm việc, dễ sử dụng và kho ứng dụng đồ sộ.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-161122-112213.jpg'/></p>",
        'cat_id' => 2,
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Laptop Apple MacBook Pro 14 M1 Pro 2021 10-core CPU/16GB/1TB  ',
        'price' => '44990000',
        'code' => 'UNI#6',
        'product_desc' => 'Apple MacBook Pro 14 inch M1 Pro 2021 gây ấn tượng mạnh khi mang trên mình vẻ ngoài có nhiều cải tiến mới, độc đáo và cuốn hút mọi ánh nhìn cùng hiệu năng mạnh mẽ, đỉnh cao đến từ con chip M1',
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/253703/apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1.jpg',
        'product_content' => "<p>Ổ cứng SSD 1 TB cung cấp dung lượng bộ nhớ rộng lớn, thoải mái để bạn lưu trữ tài liệu cá nhân, kho hình ảnh, video sáng tạo của bản thân và hàng loạt bộ phim hấp dẫn, các tựa game giải trí mà bạn yêu thích, đồng thời mở video 8K ngay lập tức hoặc lưu trữ hàng trăm ảnh RAW cùng một lúc.</p>
        <p><img src='https://cdn.tgdd.vn/Products/Images/44/253703/apple-macbook-pro-14-m1-pro-2021-10-core-cpu-4-1.jpg'/></p>",
        'cat_id' => 2,
    ),

);

?>