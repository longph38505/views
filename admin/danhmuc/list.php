<center>
    <h1>loại hang</h1>
</center>

    <table class="table" style="width: 800px; margin: 0 auto; float: left; margin-left: 30px;">
            <thead>
                <tr>
                    <th>MÃ loại</th>
                    <th scope="col">tên loại</th>
                    <th colspan="2" scope="col"><a href="index.php?page=add_dm">thêm mới</a></th>
                </tr>
            </thead>

            <tbody>
            <?php
            $sql="SELECT*FROM loai_hang";
            $listdanhmuc=pdo_query($sql);
foreach ($listdanhmuc as $list) {
    extract($list);
    $xoa = "index.php?page=xoa_dm&ma_loai=" . $ma_loai;
    $sua = "index.php?page=sua_dm&ma_loai=" . $ma_loai; // Thêm dòng này để tạo đường dẫn cho trang sửa
    ?>
    <tr>
        <td><?php echo $list['ma_loai'] ?></td>
        <td><?php echo $list['ten_loai'] ?></td>
        <td><a href="<?php echo $sua ?>">Sửa</a></td> <!-- Thêm biến $sua vào đường dẫn -->
        <td><a href="<?php echo $xoa ?>">Xóa</a></td>
    </tr>
    <?php
}
?>




            </tbody>
            
           
            
    </table>