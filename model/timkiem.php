<?php
    function search_sp($ten_sr){
        $sql="SELECT*FROM san_pham WHERE ten_sp LIKE '%$ten_sr%'";
        pdo_query($sql);
    }
?>