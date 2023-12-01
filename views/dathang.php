<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['ma_gh'])) {
            $ma_gh = $_GET['ma_gh']; // Corrected variable name
            $sql = "SELECT * FROM gio_hang JOIN san_pham ON gio_hang.ma_sp=san_pham.ma_sp 
            JOIN khach_hang ON gio_hang.ma_kh=khach_hang.ma_kh
             WHERE ma_gh='$ma_gh'";
            $chay = pdo_query_one($sql);
        } 
    ?>

<?php
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp']; // Corrected variable name
            $sql = "SELECT * FROM san_pham 
             WHERE ma_sp='$ma_sp'";
            $sp = pdo_query_one($sql);
        } 
    ?>

    <form class="table" action="index.php?page=add_donhang" method="post">
        <div style="width: 500px; margin: 20px auto;">
        <h1>Thông tin đơn hàng</h1>
        <div>
            <label for="">Tên người nhận</label>
            <input class="form-control" type="text" name="ten_ng_nhan" id="">
        </div>
        <div>
            <label for="">Số điện thoại người nhận</label>
            <input class="form-control" type="number" name="sdt_ng_nhan" id="">
        </div>
        <div>
            <label for="">Địa chi người nhận</label>
            <input class="form-control" type="text" name="dia_chi_nhan" id="">
        </div>
        <div>
            <label for="">Ghi chú</label>
            <input class="form-control" type="text" name="ghi_chu" id="">
        </div>
        </div>



        <div style="display: flex; margin-left: 370px;">
            <div>
            <img src="img/<?php echo $chay['img'] ?>" alt="" style="width: 120px; height: 100px;">
            </div>

            <div style="line-height: 1.8;">
                <span><?php echo $chay['ten_sp'] ?></span><br>
                <span><?php echo $chay['gia'] ?></span><br>
                <span ><input style="width: 40px; border-radius: 10px; text-align: center;" type="number" name="so_luong_dh" min="1" value="<?php echo $chay['so_luong_gh'] ?>"></span>
                <input type="hidden" name="ma_sp" value="<?php echo $chay['ma_sp'] ?>" id="">
                <input type="hidden" name="ma_kh" value="<?php echo $chay['ma_kh'] ?>" id="">
                <input type="hidden" name="gia" value="<?php echo $chay['gia'] ?>" id="">
            </div>

        </div>



        <div>
            <center>
                <input type="submit" name="submit" value="Đặt hàng">
            </center>
        </div>
    </form>
</body>
</html>