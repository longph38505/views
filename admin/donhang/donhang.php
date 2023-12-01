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
    <h1>Trình quản trị Đơn hàng</h1>
</center>

    <table class="table" style="width: 1200px; margin: 0 auto;">
            <thead>
                <tr>
                <th scope="col">Tên Khách hàng</th>
                <th scope="col">ngày đặt</th>
                <th scope="col">Tên người nhận</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ghi chú</th> 
                <th scope="col">Tên sản phẩm</th> 
                <th scope="col">Hình ảnh</th> 
                <th scope="col">số lượng</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>


            <tbody>
                <?php
                    $sql= "SELECT * FROM don_hang JOIN khach_hang ON don_hang.ma_kh=khach_hang.ma_kh
                        JOIN san_pham ON don_hang.ma_sp=san_pham.ma_sp ";
                    $listsp= pdo_query($sql);
                    foreach($listsp as $show){ 
                        extract($show);
                        $xoa="index.php?page=xoa_dh&ma_dh=".$ma_dh;
                        ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $show['ten_kh'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ngay_dat'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ten_ng_nhan'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['sdt_ng_nhan'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['dia_chi_nhan'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ghi_chu'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ten_sp'] ?></td>
                            <td><img src=" ./../img/<?php echo $show['img'] ?>" style="width: 150px; height: 100px;" alt=""></td>
                            <td style="vertical-align: middle;"><?php echo $show['so_luong_dh'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['tong_tien'] ?></td>
                            <td style="vertical-align: middle;"><a href="<?php echo $xoa ?>">Xóa</a></td>
                        </tr>
                   <?php }
                ?>
            </tbody>
    </table>

</body>
</html>