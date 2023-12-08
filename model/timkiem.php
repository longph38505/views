<?php
    function search_sp($ten_sr){
        $sql="SELECT*FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai
        WHERE ten_sp LIKE '%$ten_sr%'";
        $timkiem=pdo_query($sql);
        return $timkiem;
    }
?>