<?php
if (isset($_GET['ma_kh'])) {
    $ma_kh = $_GET['ma_kh'];
    $sql = "SELECT * FROM khach_hang WHERE ma_kh='$ma_kh'";
    $chay = pdo_query_one($sql);
}
?>

<div style="margin: 30px 35%; width: 400px;">
    <h2>Sửa thông tin tài khoản</h2>
    <form action="index.php?page=sua_tk&ma_kh=<?php echo $ma_kh ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="ten_kh">Nhập tên</label>
            <input type="text" value="<?php echo $chay['ten_kh'] ?>" class="form-control" id="ten_kh" name="ten_kh" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="email">Nhập email</label>
            <input type="email" value="<?php echo $chay['email'] ?>" class="form-control" id="email" aria-describedby="emailHelp" name="email" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="hinh_anh">Chọn hình ảnh mới</label><br>
            <img src="./../img/<?php echo $chay['hinh_anh'] ?>" alt="">
            <input type="file" class="form-control" id="hinh_anh" name="hinh_anh" style="width:400px;"><br>
        </div>

        <center>            
            <input type="submit" class="btn2" name="submit" value="Sửa">
        </center>
    </form>
</div>
