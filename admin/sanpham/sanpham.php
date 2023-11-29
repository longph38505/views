<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    a{
        font-weight: bold;
        text-decoration: none;
        color: black;
    }
</style>
<body>


<center>
    <h1>Trình quản trị sản phẩm</h1>
</center>

    <table class="table" style="width: 1200px; margin: 0 auto;">
            <thead>
                <tr>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Ngày nhập</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">mô tả</th>
                <th scope="col">Loại hàng</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Giá</th>
                <th colspan="2" scope="col"><a href="index.php?page=them_sp">Thêm mới</a></th>
                </tr>
            </thead>


            <tbody>
                <?php
                    $sql= "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai";
                    $listsp= pdo_query($sql);
                    foreach($listsp as $show){ 
                        extract($show);
                        $xoa="index.php?page=xoa_sp&ma_sp=".$ma_sp;
                        $sua = "index.php?page=sua_sp&ma_sp=". $ma_sp;
                        ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $show['ten_sp'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ngay_nhap'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['trang_thai'] ?></td>
                            <td><img src=" ./../img/<?php echo $show['img'] ?>" style="width: 150px; height: 100px;" alt=""></td>
                            <td style="vertical-align: middle;"><?php echo $show['mo_ta'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ten_loai'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['so_luong'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['gia'] ?></td>
                            <td style="vertical-align: middle;"><a href="<?php echo $sua ?>">Sửa</a></td>
                            <td style="vertical-align: middle;"><a href="<?php echo $xoa ?>">Xóa</a></td>
                        </tr>
                   <?php }
                ?>
            </tbody>
    </table>

</body>
</html>