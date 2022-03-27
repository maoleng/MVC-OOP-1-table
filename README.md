<h1>MVC OOP trên 2 bảng</h1>
Route đảm nhận việc điều hướng, file index chỉ cần include route
<br>
Quy tắc đặt tên trong PHP: Viết hoa toàn bộ chữ cái đầu
<br><br>
Ví dụ
<ul>
    <li>Đặt tên cho controller: ClassroomController.php</li>
    <li>Đặt tên cho model: model/Classroom.php</li>    
</ul>

File index.php sẽ gọi tới route.php
<br>
Khi route.php chưa có $_GET['action'] thì mặc định sẽ 'index'  
<br>
Tạo class cho Classroom:
<br>
<ul>
    Tên file là: model/ClassroomObject.php
    <li>Các thuộc tính là các cột trong bảng, quyền truy cập là private</li>
    <li>Hàm __construct tự động lưu thuộc tính mỗi khi tạo mới đối tượng</li>
    <li>Các hàm get set cho từng thuộc tính</li>
</ul>

Tạo 
Switch case $action:
<br>
<ul>
    <li>
    index: Gọi tới hàm index trong controller/ClassroomController.php
    <ul>
        Hàm index
        <li>
        Hàm index sẽ gọi tới Hàm all trong model/Classroom.php
        <ul>
            Hàm all
            <li>Hàm all sẽ lấy ra tất cả thông tin của Classroom bằng câu truy vấn sql</li>
            <li>Duyệt từng Classroom bằng cách tạo mới đối tượng Classroom cho từng Classroom và lưu thuộc tính vào đối tượng đó</li>
            <li>Append từng đối tượng vào mảng và trả về mảng đó</li>
        </ul>
        </li>
        <li>Nhận về $array và nhúng file view/classroom/index.php để  hiển thị ra</li>
    </ul>
    </li>
    <li>
    create: Gọi tới hàm create trong controller/ClassroomController.php
    <ul>
        Hàm create
        <li>Nhúng file view/classroom/create.php để hiển thị ra form tạo Classroom</li>
        <li>Tên action khi tạo form là create</li>
    </ul>
    </li>
    <li>
    store: Gọi tới hàm store trong controller/ClassroomController.php
    <ul>
        Hàm store
        <li>
        Hàm store sẽ gọi tới hàm create trong model/Classroom.php
        <ul>
            Hàm create
            <li>Lưu dữ liệu sắp insert vào database vào 1 đối tượng</li>
            <li>Insert dữ liệu vào database</li>
        </ul>
        </li>
        <li>Header về trang index</li>
    </ul>
    </li>
    <li>
    edit: Gọi tới hàm edit trong controller/ClassroomController.php
    <ul>
        Hàm edit
        <li>Hàm edit sẽ lấy id từ $_GET về</li>
        <li>
        Gọi tới hàm find trong model/Classroom.php
        <ul>
            Hàm find
            <li>Lấy ra thông tin của Classroom theo id bằng câu truy vấn sql</li>
            <li>Fetch array và lưu dữ liệu đó vào 1 đối tượng</li>
            <li>Trả về đối tượng đó</li>
        </ul>
        </li>
        <li>Nhận về $object đó và nhúng file view/classroom/edit.php vào, kèm value cho từng input từ $object</li>    
    </ul>
    </li>
    <li>
    update: Gọi tới hàm update trong controller/ClassroomController.php
    <ul>
        Hàm update
        <li>
        Gọi tới hàm update model/Classroom.php
        <ul>
            <li>Hàm update nhận tham số từ $_POST của form edit</li>
            <li>Lưu dữ liệu từ $_POST vào 1 đối tượng</li>
            <li>Cập nhật database bằng câu truy vấn sql</li>
        </ul>
        </li>
        <li>Header về trang index</li>
    </ul>
    </li>
    <li>
    delete: Gọi tới hàm delete trong controller/ClassroomController.php
    <ul>
        Hàm delete
        <li>Hàm delete sẽ lấy id từ $_GET về</li>
        <li>
        Gọi tới hàm delete trong model/Classroom.php
        <ul>
            Hàm delete
            <li>Chạy câu truy vấn sql xóa theo id</li>
        </ul>
        </li>
        <li>Header về trang index</li>
    </ul>
    </li>
</ul>
