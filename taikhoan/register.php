<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
    <title>Document</title>
    <style>
        .nd{
            margin-top: 1%;
            margin-left: 35%;
            padding-top: 15px;
            width: 450px;
            height: 550px;
            border: 1px solid;
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            box-shadow: 1px 1px 4px 2px gray;
        }
        .nd form div{
            padding-left: 20px;
        }
        .btn2{
            background-color: #265ba4;
            color: white;
            width: 100px;
            height: 35px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 15px;
        }
    </style>
</head>
<body>
    
    <div class="nd">
        <center><h2>Đăng kí tài khoản</h2></center><br>
    
    <form action="index.php?page=dangky" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nhập tên</label>
            <input type="Text" class="form-control" id="" name="ten_kh" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="">nhập mail</label>
            <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="">Nhập hình ảnh</label>
            <input type="file" class="form-control" id="" name="hinh_anh" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="" name="pass" style="width:400px;"><br>
        </div>
        
        <div class="form-group">
            <label for="">Bạn đã có tài khoản?</label>
            <a href="index.php?page=login">Đăng nhập</a>
        </div><br>
    
        <center>            
        <input type="submit" class="btn2" name="dangky" value="Đăng ký">
        </center>
    </form>
    </div>
    <div>
        <?php
            if(isset($thongbao)&&($thongbao=!"")){
                echo $thongbao;
            }
        ?>
    </div>
</body>
</html>