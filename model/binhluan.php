<?php
    function load_binhluan($idsp){
        $sql = "SELECT nd_bl, ngay_bl, khach_hang.ma_kh 
        FROM `binh_luan` 
        INNER JOIN khach_hang ON khach_hang.ma_bl = binh_luan.ma_bl
        INNER JOIN san_pham ON san_pham.ma_sp = binh_luan.ma_sp
        WHERE san_pham.ma_sp = '$idsp'";
        $result = pdo_query($sql);
        return $result;
    }
    function insert_binhluan($nd_bl, $ngay_bl, $ma_kh, $ma_sp){
        $sql = "INSERT INTO `binh_luan`(`nd_bl`, `ngay_bl`, `ma_kh`, `ma_sp`) VALUES ('$nd_bl', '$ngay_bl', '$ma_kh', '$ma_sp')";
        pdo_query($sql);

    }

    function show_bl(){
        $sql="SELECT*FROM binh_luan JOIN san_pham ON binh_luan.ma_sp=san_pham.ma_sp
            JOIN khach_hang ON binh_luan.ma_kh=khach_hang.ma_kh 
        ";
        $show_bl=pdo_query($sql);
        return $show_bl;
    }
    // function delete_binhluan($id){
    //     $sql = "DELETE FROM `binh_luan` WHERE `id` = '$id'";
    //     pdo_execute($sql);
    // }

    function loadall_binhluan($ma_sp){
        $sql = "SELECT *, khach_hang.ma_kh 
        FROM binh_luan 
        INNER JOIN khach_hang ON khach_hang.ma_kh = binh_luan.ten_kh 
        WHERE ma_sp = '$ma_sp'";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    } 

    // function loadall_xembinhluan(){
    //     $sql = "SELECT binh_luan.ma_bl, nd_bl, ngay_bl, khach_hang.trn_kh, san_pham.ten_sp
    //     FROM binh_luan 
    //     INNER JOIN khach_hang ON khach_hang.ma_kh = binh_luan.ma_sp 
    //     INNER JOIN san_pham ON san_pham.ma_sp = binh_luan.ma_sp 
    //     WHERE 1";
    //     $listbinhluan = pdo_query($sql);
    //     return $listbinhluan;
    // }
    function delete_bl($mabl) {
        $sql="DELETE FROM binh_luan WHERE ma_bl=".$mabl;
        pdo_execute($sql);
    }
?>