<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
        if (isset($_GET['ma_sp'])) {
            $ma_sp = $_GET['ma_sp']; // Corrected variable name
            $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai 
             WHERE ma_sp='$ma_sp'";
            $chay = pdo_query_one($sql);
        }
    ?>
    <?php 
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];}
            ?>


    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="./img/<?php echo $chay['img'] ?>" width="100%" id="MainImg" alt="">
            
        </div>
        </div>
        <div class="single-pro-details">
            <h6><?php echo $chay['ten_loai'] ?></h6>
            <h4><?php echo $chay['ten_sp'] ?></h4>
            <h2><?php echo $chay['gia'] ?>Đ</h2>

       
        <form action="index.php?page=add_cart" method="POST">
            <input type="number" value="1" min="0">
            <input type="text" name="ma_kh" value="<?php echo $email['ma_kh'] ?>">
            <input type="text" name="ma_sp" value="<?php echo $chay['ma_sp'] ?>">
            <input type="text" name="gia" value="<?php echo $chay['gia'] ?>">
            <input type="text" name="so_luong" value="<?php echo $chay['so_luong'] ?>">
            <button class="normal" name="submit">Thêm vào giỏ hàng</button>
        </form>
            <h4>Mô tả</h4>
            <span><?php echo $chay['mo_ta'] ?>
            </span>
        </div>
    </section>


    <!-- ---------------------------------------------------------------------------------- -->

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collecton New Mordern Design</p>
        <div class="Pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$17</h4>

                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$17</h4>

                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$17</h4>

                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                    </div>
                    <h4>$17</h4>

                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    
</body>
</html>