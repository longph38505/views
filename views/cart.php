<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
<section id="page-header" class="about-header">

<h2>#Giỏ hàng</h2>

<p>ĐỂ LẠI LỜI NHẮN, Chúng tôi muốn nghe từ bạn</p>

</section>

<section id="cart" class="section-p1">
<table width="100%">
    <thead>
        <tr>
            <td>Xóa</td>
            <td>Hình ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Giá</td>
            <td>Số lượng</td>
            <td>Tổng tiền</td>
            <td>Đặt hàng</td>
        </tr>
    </thead>
    <tbody>
        <?php 
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $ma_kh = $email['ma_kh'];
                    }
            ?>
        
            <?php 
                $tong=0;
                $thanhtien=0;
                $sql="SELECT*FROM gio_hang JOIN khach_hang ON gio_hang.ma_kh=khach_hang.ma_kh
                JOIN san_pham ON gio_hang.ma_sp=san_pham.ma_sp WHERE khach_hang.ma_kh='$ma_kh'";
                $show=pdo_query($sql);
                foreach($show as $show){
                    extract($show);
                    $thanhtien=$show['thanh_tien'];
                    $tong+=$thanhtien;
                    $xoa = "index.php?page=xoa_cart&ma_gh=".$ma_gh;
                    $ma_gh=$show['ma_gh'];
                    $id="index.php?page=add_dh&ma_gh=".$ma_gh;
            ?>
        <tr>
            <td><a href="<?php echo $xoa ?>"><i class="fas fa-times-circle"></i></a></td>
            <td><img src="img/<?php echo $show['img'] ?>" alt=""></td>
            <td><?php echo $show['ten_sp'] ?></td>
            <td><?php echo $show['gia'] ?></td>
            <td><input type="number" value="<?php echo $show['so_luong_gh'] ?>" min="0"></td>
            <td><?php echo $show['thanh_tien'] ?></td>
            <td><a href="<?php echo $id ?>">Mua</i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</section>

<section id="cart-add" class="section-p1">
<div id="coupon">
    <h3>Áp dụng phiếu giảm giá</h3>
    <div>
        <input type="text" placeholder="Nhập phiếu giảm giá">
        <button class="normal">Áp dụng</button>
    </div>
</div>
<div id="subtotal">
    <h3>Tổng tiền</h3>
    <table>
        <tr>
            <td>Tổng tiền giỏ hàng</td>
            <td><?php echo $tong ?></td>
        </tr>
        <tr>
            <td>Vận chuyển</td>
            <td>Miễn phí</td>
        </tr>
        <tr>
            <td><strong>Tổng tiền</strong></td>
            <td><?php echo $tong ?></td>
        </tr>
    </table>
    <button class="normal">Mua hàng</button>
</div>



</section>
</body>
</html>