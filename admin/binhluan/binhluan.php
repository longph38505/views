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
                <th scope="col">tên sản phẩm</th>
                <th scope="col">nội dung bình luận</th>
                <th scope="col">ngày bình luận</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>


            <tbody>
                <?php
                    $sql= "SELECT * FROM binh_luan JOIN khach_hang ON binh_luan.ma_kh=khach_hang.ma_kh
                        JOIN san_pham ON binh_luan.ma_sp=san_pham.ma_sp ";
                    $listsp= pdo_query($sql);
                    foreach($listsp as $show){ 
                        extract($show);
                        $xoa="index.php?page=xoa_bl&ma_bl=".$ma_bl;
                        ?>
                        <tr>
                            <td style="vertical-align: middle;"><?php echo $show['ten_kh'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ten_sp'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['nd_bl'] ?></td>
                            <td style="vertical-align: middle;"><?php echo $show['ngay_bl'] ?></td>
                            <td style="vertical-align: middle;"><a href="<?php echo $xoa ?>">Xóa</a></td>
                        </tr>
                   <?php }
                ?>
            </tbody>
    </table>

</body>
</html>