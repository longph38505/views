<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    h1 {
      text-align: center;
      margin-top: 50px;
    }
    
    .customer-table {
      margin-top: 30px;
    }

    .actions {
      display: flex;
      justify-content: flex-end;
    }

    .actions button {
      margin-left: 5px;
    }
  </style>
  <title>Quản lí khách hàng</title>
</head>
<body>
  <div class="container">
    <h1>Quản lý khách hàng</h1>

    <table class="table customer-table" ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Tên</th>
          <th scope="col">hinh anh</th>
          <th scope="col">email</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php   
                  $sql= "SELECT * FROM khach_hang";
                  $listtk= pdo_query($sql);
                  foreach($listtk as $list) { 
                    extract($list);
                    $xoa="index.php?page=xoa_kh&ma_kh=".$ma_kh;
                   ?>

                     <tr>
                     <td style="vertical-align: middle;"> <?php echo $list['ma_kh'] ?> </td>
                     <td style="vertical-align: middle;"><?php echo $list['ten_kh'] ?></td>
                     <td><img src=" ./../img/<?php echo $list['hinh_anh'] ?>" style="width: 150px; height: 100px;" alt=""></td>
                     <td style="vertical-align: middle;"><?php echo $list['email'] ?></td>
                     <td style="vertical-align: middle;">
                       <button class="btn btn-danger"><a href="<?php echo $xoa ?>">Xóa</a></button>
                     </td>
                <?php   } 
          ?>
        
      </tbody>
    </table>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
