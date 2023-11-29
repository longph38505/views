<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
    <title>Document</title>
    <style>
        .nd{
            margin-top: 10%;
            margin-left: 35%;
            padding-top: 50px;
            width: 450px;
            height: 420px;
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
        <center><h2>Đăng nhập tài khoản</h2></center><br>
    
    <form action="index.php?page=login" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">nhập mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" style="width:400px;"><br>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" style="width:400px;"><br>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Bạn chưa có tài khoản?</label>
            <a href="index.php?page=dangky">Đăng kí</a>
        </div><br>
    
        <center>            
        <input type="submit" class="btn2" name="login" value="Đăng nhập">
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