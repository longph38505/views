<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    form{
        width: 40%;
        margin: 10px auto;
    }
    div {
        margin-top: 10px;
    }
    center {
        margin-top: 10px;
    }
</style>
<body>
    <?php
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp']; // Corrected variable name
            $sql = "SELECT * FROM san_pham WHERE ma_sp='$ma_sp'";
            $chay = pdo_query_one($sql);
        }
    ?>
    <form action="index.php?page=sua_sp&ma_sp=<?php echo $ma_sp ?>" method="POST" enctype="multipart/form-data">
    <h1>Sửa thông tin sản phẩm</h1>
        <div>
            <label for="">Nhập tên sản phẩm</label>
            <input type="text" name="ten_sp" VALUE="<?php echo $chay['ten_sp'] ?>" class="form-control" id="">
        </div>
        <div>
            <label for="">Ngày nhập</label>
            <input type="date" VALUE="<?php echo $chay['ngay_nhap'] ?>"  name="ngay_nhap" class="form-control" id="">
        </div>
        <div>
            <label for="">Trạng thái</label>
            <input type="text" VALUE="<?php echo $chay['trang_thai'] ?>"  name="trang_thai" class="form-control" id="">
        </div>
        <div>
            <label for="">Mô tả</label>
            <input type="text" VALUE="<?php echo $chay['mo_ta'] ?>"  name="mo_ta" class="form-control" id="">
        </div>
        <div>
            <label for="">Hình ảnh</label><br>
            <img src="./../img/<?php echo $chay['img'] ?>" style="width: 100px; height: 80px;"  alt="">
            <input type="file" name="img" class="form-control" id="">
        </div>
        <div>
            <label for="">số lượng</label>
            <input type="number" VALUE="<?php echo $chay['so_luong'] ?>"  name="so_luong" class="form-control" id="">
        </div>
        <div>
            <label for="">Giá</label>
            <input type="number" VALUE="<?php echo $chay['gia'] ?>"  name="gia" class="form-control" id="">
        </div>
        <div>
            <label for="">Loại hàng</label>
            <select name="ma_loai" id="">
            <?php 
                foreach($listdanhmuc as $list){
                    extract($list);?>
                    <option value="<?php echo $list['ma_loai'] ?>"><?php echo $list['ten_loai'] ?></option>
                <?php }?>
            </select>
        </div>
        
        <center>
            <input type="submit" class="btn btn-primary" name="submit" value="Sửa sản phẩm">
        </center>
    </form>
</body>
</html>