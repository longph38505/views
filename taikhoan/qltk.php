<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        article{
            width: 25%;
            margin-left: 78px;
            background-color: #E3E6F3;
            margin-top: 80px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            height: 400px;
            float:left;
        }

        a{
            text-decoration: none;
            color: black;

        }

        h4{
            line-height: 1.7;
            padding: 10px 10px;
            border-bottom: 1px solid;
            width: 280px;
            margin-left: 14px
        }


        aside{
            width: 50%;
            float: right;
            height: 400px;
            margin-top: 80px;
            margin-right: 78px;
        }
        aside h2{
            width: 100%;
            border-bottom: 0px;
        }
    </style>
</head>
<body>
    


    <div style="">
        <article style="width: 25%"  class="no-bootstrap">
            <h4><a href="">Quản lý tài khoản</a></h4>
            <h4><a href="index.php?page=login-admin">Đăng nhập quản trị</a></h4>
            <h4><a href="">Đổi mật khẩu</a></h4>
            <h4><a href="index.php?page=donhang">Đơn hàng</a></h4>
            <h4><a href="index.php?page=logout">Đăng xuất</a></h4>
        </article>
        
        <aside>
            <?php 
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
            ?>
         <table class="table">
            <thead>
                <tr>
                    <th><img style="width: 110px; height: 100px; border: 1px solid; border-radius: 50%;" src="./img/<?php echo $email['hinh_anh'] ?>" alt=""></th>
                    <th style="vertical-align: middle;"><h2>Xin chào: <?php echo $email['ten_kh'] ?></h2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Họ tên:</th>
                    <td><?php echo $email['ten_kh'] ?></td>
                </tr>
                <tr>
                    <th>email</th>
                    <td><?php echo $email['email'] ?></td>
                </tr>
                <tr>
                    <th colspan="2">
                        <center><button><a href="index.php?page=sua_tk&ma_kh=<?php echo $email['ma_kh'] ?>">Sửa</a></button></center>

                    </th>
                </tr>
                
            </tbody>
        </table> 
        <?php } ?>
        
        </aside>
    </div>
</body>
</html>
