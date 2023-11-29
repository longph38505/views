<?php
    function add_sp($ten_sp, $ngay_nhap, $trang_thai, $img, $mo_ta, $ma_loai, $so_luong, $gia){
        $sql="INSERT INTO san_pham(ten_sp, ngay_nhap, trang_thai, img, mo_ta,ma_loai, so_luong, gia)        
        VALUES('$ten_sp', '$ngay_nhap', '$trang_thai', '$img', '$mo_ta', '$ma_loai', '$so_luong', '$gia')";
        pdo_query($sql);
    }

    function update_sp($ma_sp, $ten_sp, $ngay_nhap, $trang_thai, $img, $mo_ta, $ma_loai, $so_luong, $gia)
        {
        $sql = "UPDATE san_pham SET 
                ten_sp = '$ten_sp', 
                ngay_nhap = '$ngay_nhap', 
                trang_thai = '$trang_thai', 
                img = '$img', 
                mo_ta = '$mo_ta', 
                ma_loai = '$ma_loai', 
                so_luong = '$so_luong', 
                gia = '$gia' 
                WHERE ma_sp = '$ma_sp'";
    
        pdo_query($sql);
    }
   
    function delete_sp($masp) {
        $sql="DELETE FROM san_pham WHERE ma_sp=".$masp;
        pdo_execute($sql);
    }
    function loadall_sp(){
        $sql="select * from san_pham order by ma_sp desc";
        $listsp=pdo_query($sql);
        return $listsp;
    
    }

    function show_sp(){
        $sql="select * from san_pham join loai_hang ON san_pham.ma_loai=loai_hang.ma_loai";
        $listsp=pdo_query($sql);
        return $listsp;
    
    }
    
    function ctsp(){
        $sql="SELECT*FROM san_pham WHERE ma_sp".$ma_sp;
        pdo_execute($sql);
    }    

?>