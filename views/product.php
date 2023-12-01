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
/* .sumbit{
 background-color: #4CAF50; 
 width: 145px;
 height: 45px;
} */
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
    /* margin-bottom: 10px; */
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-left: -21px;
  }


/* .comment-form{
    padding-left: 12px; 
} */

</style>
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
            <input type="number" name="so_luong_gh" value="1" min="0"><br><br>
            <input type="hidden" name="ma_kh" value="<?php echo $email['ma_kh'] ?>">
<input type="hidden" name="ma_sp" value="<?php echo $chay['ma_sp'] ?>">
            <input type="hidden" name="gia" value="<?php echo $chay['gia'] ?>">
            <input type="hidden" name="so_luong" value="<?php echo $chay['so_luong'] ?>">
            <input type="submit" style="width: 214px;" class="btn2" name="submit" value="Thêm vào giỏ hàng">
        </form>
            <h4>Mô tả</h4>
            <span><?php echo $chay['mo_ta'] ?>
            </span>
        </div>
    </section>

    <!-- binhluan -->
    

    <div>
    <div class="comment-form">
    <form method="POST" action="index.php?page=binhluan">

    <div class="scroll-container">
    <?php  
        $sql="SELECT*FROM binh_luan JOIN khach_hang ON binh_luan.ma_kh=khach_hang.ma_kh
        JOIN san_pham ON binh_luan.ma_sp=san_pham.ma_sp
        WHERE san_pham.ma_sp= '$ma_sp'";
        $binhluan=pdo_query($sql);

        foreach($binhluan as $binhluan){
    ?>
        <div>
        <p><b><?php echo $binhluan['ten_kh'] ?>:</span></b><span><?php echo $binhluan['nd_bl'] ?> <?php echo $binhluan['ngay_bl'] ?></p>
        
        </div>
        <?php } ?>
        </div>

<!-- <textarea  name="comment" ></textarea> -->
      <div class="div-fload" >
      <input  type="text" placeholder="Nhập bình luận của bạn" name="nd_bl" id="">
      <input type="hidden" name="ma_sp" value="<?php echo $chay['ma_sp'] ?>">
      <input type="hidden" name="ma_kh" value="<?php echo $email['ma_kh'] ?>" id="">
      <br>
      <div style="padding: 10px; padding-top: 10px; " >
      <input class="nhap-bl" class="sumbit"type="submit" name="submit" value="Bình luận">
      </div>

      </div>

    </form>
    </div>
  </div>



  



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
