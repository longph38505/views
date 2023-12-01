<?php
    function add_gh($so_luong_gh, $ma_kh, $thanh_tien, $ma_sp){
        $sql = "INSERT INTO gio_hang(`so_luong_gh`, `ma_kh`, `thanh_tien`, `ma_sp`) 
        VALUES('$so_luong_gh', '$ma_kh', '$thanh_tien', '$ma_sp')";
        pdo_query($sql);
    }
    
    function show_cart(){
        $sql="SELECT*FROM gio_hang JOIN khach_hang ON gio_hang.ma_kh=khach_hang.ma_kh
        JOIN san_pham ON gio_hang.ma_sp=san_pham.ma_sp";
        $show=pdo_query($sql);
        return $show;
    }

    function delete_gh($ma_gh) {
        $sql="DELETE FROM gio_hang WHERE ma_gh=".$ma_gh;
        pdo_execute($sql);
    }

    function gh(){
        $sql="SELECT*FROM gio_hang WHERE ma_gh".$ma_gh;
        pdo_execute($sql);
    } 

?>