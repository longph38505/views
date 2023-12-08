<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<style>
    body{
        width:100%;
    }
    #navbar li a.active {
    color: black;
    }

    #navbar li a.active::after,
    #navbar li a:hover::after {
    content: "";
    width: 60%;
    height: 2px;
    background-color: black;
    position: absolute;
    bottom: none;
    display: none;
    left: 20px;
    }
    header img{
        width: 100px;
        height:100px;
    }
    #product1 .Pro-container {
    display: flex;
    /* display: grid;
    grid-template-columns: auto auto auto auto; */

    align-items: center;
    justify-content: space-around;
    padding-top: 20px;
    flex-wrap: wrap;
}


#product1 .pro {
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;
}
</style>
<body>

    <header id="header">
        <a href="index.php?page=home"><img src="img/logo.png" alt="" >
        </a>

        <nav>
            <ul id="navbar">
                <li><a class="active" href="index.php?page=home">Trang chủ</a></li>
                <li><a class="active" href="index.php?page=shop">Cửa hàng</a></li>
                <li><a class="active" href="index.php?page=blog">Bài viết</a></li>
                
                
                <li>
                    <form action="index.php?page=sanpham" method="POST">
                        <div class="search-container">
                            <input class="search" type="text" name="kyw" id="">
                            <button class="btn" type="submit" name="timkiem">
                                <a href="index.php?page=timkiem"><svg style="margin-top: -17px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></a>
                            </button>
                        </div>
                    </form>
                </li>
                
                
                    <?php  
                        if(isset($_SESSION['email'])){
                            $email=$_SESSION['email'];
                            ?>
                        <!-- Hiển thị phần tài khoản đã đăng nhập -->
                        
                        <li><a href="index.php?page=taikhoan">
                            <img src="img/<?php echo $email['hinh_anh'] ?>" style="width: 50px; height: 50px; border-radius: 50%; border: 1px solid;" alt="">
                        </a></li>
                        <li  id="lg-bag"><a class="active" href="index.php?page=cart"><i class="fas fa-shopping-bag"></i></a></li>  <!-- nút giỏ hàng -->

                        <?php }else{ ?>
                        <!-- Hiển thị nút đăng nhập khi chưa đăng nhập -->
                        <li class="acc"><a href="index.php?page=login">Đăng nhập</a></li>
                    <?php } ?>
                

                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </nav>

        <div id="mobile">
            <a href="cart.html"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </header>