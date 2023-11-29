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
</style>
<body>

    <header id="header">
        <a href="#"><img src="./img/logo.png" class="logo" alt="">
        </a>

        <nav>
            <ul id="navbar">
                <li><a class="active" href="index.php?page=home">Trang chủ</a></li>
                <li><a class="active" href="index.php?page=shop">Cửa hàng</a></li>
                <li><a class="active" href="index.php?page=blog">Bài viết</a></li>
                <li>
                    <form action="index.php?page=timkiem" method="GET">
                        <div class="search-container">
                            <input class="search" type="search" name="search" id="">
                            <button class="btn" type="submit" name="submit">
                                <a href="index.php?page=timkiem"><svg style="margin-top: -17px;" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></a>
                            </button>
                        </div>
                    </form>
                </li>
                
                
                    <?php  
                        if(isset($_SESSION['email'])){ ?>
                        <!-- Hiển thị phần tài khoản đã đăng nhập -->
                        <li><a href="index.php?page=taikhoan"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!-- nút tài khoản --> <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></a></li>
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