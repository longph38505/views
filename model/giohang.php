<?php
    function add_gh($so_luong, $ma_kh, $thanh_tien, $ma_sp){
        $sql = "INSERT INTO gio_hang(so_luong, ma_kh, thanh_tien, ma_sp) 
                VALUES('$so_luong', '$ma_kh', '$thanh_tien', '$ma_sp')";
        pdo_query($sql);
    }
    
?>