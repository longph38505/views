<?php
if (isset($_GET['ma_loai'])) {
    $ma_loai = $_GET['ma_loai'];
    $sql = "SELECT * FROM loai_hang WHERE ma_loai='$ma_loai'";
    $chay = pdo_query_one($sql);
}
?>

<center>
    <h1>Sửa thông tin loại hàng</h1>
</center>
<form style="width: 450px; height: 400px; margin: 50px ; " action="index.php?page=sua_dm&ma_loai=<?php echo $ma_loai ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="">Nhập tên loại</label><br>
        <input type="text" name="ten_loai" class="form-control" value="<?php echo isset($chay['ten_loai']) ? $chay['ten_loai'] : ''; ?>" style="width: 400px;"><br>
        <input type="submit" name="sua_dm" class="btn btn-primary" value="Sửa thông loại hàng">
    </div>
</form>
