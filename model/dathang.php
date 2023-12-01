<?php
    function add_dh($ngay_dat, $ten_ng_nhan, $sdt_ng_nhan, $dia_chi_nhan, $ghi_chu, $tong_tien, $ma_kh, $ma_sp, $so_luong_dh){
        $sql="INSERT INTO don_hang(ngay_dat, ten_ng_nhan, sdt_ng_nhan, dia_chi_nhan, ghi_chu, tong_tien, ma_kh, ma_sp, so_luong_dh) 
        VALUES('$ngay_dat', '$ten_ng_nhan', '$sdt_ng_nhan', '$dia_chi_nhan', '$ghi_chu', '$tong_tien', '$ma_kh', '$ma_sp', '$so_luong_dh')";
        pdo_query($sql);
    }

    function delete_dh($madh) {
        $sql="DELETE FROM don_hang WHERE ma_dh=".$madh;
        pdo_execute($sql);
    }
?>