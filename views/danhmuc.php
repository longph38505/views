<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .btn2{
        background-color: #088178;
        color: white;
        height: 35px;
        border: 0;
        border-radius: 10px;
        font-weight: 700;
        font-size: 15px;
    }
    h5{
        font-weight: bold;
    }
    .tong{
        display: grid;
        grid-template-columns: 250px 250px 250px 250px ;
        justify-content: space-evenly;
        padding-top: 40px;
        padding-left: 50px;
    }
    .category-bar {
        background-color: #f8f9fa;
        padding: 10px;
        display: flex;
        justify-content: center;
    }
    .category-bar ul {
        list-style-type: none;
        margin: 10px;
        padding: 12px;
        display: flex;
    }
    .category-bar li {
        margin-right: 20px;
        padding: 10px;
    }
    .category-bar a {
        color: #000;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
        padding: 20px;
    }
    .category-bar a:hover {
        color: #007bff;
    }
    .scroll-container  {
        width: 580px;
        height: 200px;
        overflow-y: scroll;
        border: 1px solid #ccc;
        padding: 100px;
        margin-right: 10px;
    }
    .div-fload{
        padding: 20px;
        display: flex;
    }
    .nhap-bl{
        padding: 10px;
        background-color: #4CAF50;
        width: 145px;
        height: 45px;
    }
    .comment-form input[type="text"],
    .comment-form textarea {
        width: 650px;
        padding: 10px;
        padding-left: 30px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-left: -21px;
    }
</style>
<body>
    <?php
    if (isset($_GET['ma_loai'])) {
        $ma_loai = $_GET['ma_loai']; // Lấy giá trị từ tham số ma_loai trên URL
        $sql = "SELECT * FROM loai_hang WHERE ma_loai='$ma_loai'";
        $chay = pdo_query_one($sql);
    }
    ?>
    
    <section id="page-header">
        <h2><?php echo $chay['ten_loai'] ?></h2>
        <p>Tiết kiệm hơn với phiếu giảm giá & giảm giá tới 70%!</p>
    </section>

    <div>
        <div class="category-bar">
            <?php 
            $sql = "SELECT * FROM loai_hang";
            $show_dm = pdo_query($sql);
            foreach ($show_dm as $dm) {
                $id = "index.php?page=danhmuc&ma_loai=" . $dm['ma_loai'];
            ?>
            <ul>
                <li><a href="<?php echo $id ?>"><?php echo $dm['ten_loai'] ?></a></li>
            </ul>
            <?php } ?>
        </div>
    </div>

    <section class="tong">
        <?php
        $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai 
        WHERE loai_hang.ma_loai='$ma_loai' ORDER BY ma_sp DESC LIMIT 12";
        $showsp = pdo_query($sql);
        foreach ($showsp as $show) {
            $ma_sp = $show['ma_sp'];
            $id = "index.php?page=product&ma_sp=" . $ma_sp;
        ?>
        <section id="product1" class="section-p1">
            <div class="Pro-container">
                <div class="pro" >
                    <img style="width: 230px; height: 200px;" src="img/<?php echo $show['img'] ?>" alt="">
                    <div class="des">
                        <span style="color: red;"><?php echo $show['ten_loai'] ?></span>
                        <h4><?php echo $show['ten_sp'] ?></h4>
                        <p style="font-size: 10px;"><?php echo $show['so_luong'] ?></p>
                        <h5><?php echo $show['gia'] ?> VNĐ</h5>
                    </div>
                    <a href="<?php echo $id ?>"><i class="fas fa-shopping-cart cart"></i></a>
                </div>
            </div>
        </div>
        </section>
        <?php } ?>
    </section>
</body>
</html>
