# XUẤT DỮ LIỆU ĐA CẤP TRONG PHP VỚI ĐỆ QUY

## 1. ý tưởng lưu trữ dữ liệu đa cấp và tạo dữ liệu demo
## 2. dữ liệu kết quả cần thực hiện
## 3. tạo hàm data_tree() xuất dữ liệu đa cấp
## 4. xữ lý level dữ liệu
kinh doanh 
---| quốc tế
---| doanh nghiệp
thể thao
---| bóng đá
---| marathon
## 5. xuất danh sách lên table html
## 6. tạo hàm render_menu() xuất menu đa cấp
 
<ul id="main-menu">
    <li><a href="">kinh doanh</a>
          <ul class="sub_menu">
               <li><a href="">quốc tế</a></li>
               <li><a href="">doanh nghiệp</a></li>
          </ul>
    </li>   
    <li><a href="">thể thao</a>
          <ul class="sub_menu">
               <li><a href="">bóng đá</a></li>
               <li><a href="">marathon</a></li>
          </ul>
    </li>
</ul>
