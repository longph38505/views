<?php
function insert_loai_hang($ten_loai)
{
    $sql = "INSERT INTO `loai_hang`( `ten_loai`) VALUES ('$ten_loai')";
    pdo_query($sql);
}

function delete_loai_hang($maloai) {
    $sql="DELETE FROM loai_hang WHERE ma_loai=".$maloai;
    pdo_execute($sql);
}
function loadall_loai_hang(){
    $sql="select * from loai_hang order by ma_loai desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;

}
function update_dm($ma_loai, $ten_loai)
{
    $sql = "UPDATE loai_hang SET ten_loai='$ten_loai' WHERE ma_loai=$ma_loai";
    pdo_query($sql);
}



function loadone_loai_hang($maloai ){
    $sql="select * from danhmuc where ma_loai =".$maloai;
    $dm= pdo_query_one($sql);
    return $dm;
}
$sql= "SELECT * FROM `loai_hang`";
$listdanhmuc= pdo_query($sql);
return $listdanhmuc;



?>