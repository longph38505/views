<?php
    function insert_taikhoan($ten_kh, $email, $hinh_anh, $pass){
        $sql = "INSERT INTO khach_hang(ten_kh, email, hinh_anh, pass) VALUES('$ten_kh', '$email', '$hinh_anh', '$pass')";
        pdo_execute($sql);
    }

    function login_taikhoan($email, $pass){        
        $sql="SELECT *FROM khach_hang WHERE email='".$email."'AND pass='".$pass."'";
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function loginadmin_taikhoan($email, $pass){        
        $sql="SELECT *FROM khach_hang WHERE email='".$email."'AND pass='".$pass."' ";
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function qltk($email, $ten_kh){
        $sql="SELECT * FROM khach_hang WHERE email='".$email."' AND ten_kh='".$ten_kh."'";
        $show=pdo_query_once($sql);
        return $show;
    }

    function delete_kh($makh) {
        $sql="DELETE FROM khach_hang WHERE ma_kh=".$makh;
        pdo_execute($sql);
    }

    function show_kh(){
        $sql= "SELECT * FROM khach_hang";
        $listtk= pdo_query($sql);
        return $listtk;
    }

    function update_tk($ma_kh, $ten_kh, $email, $hinh_anh)
    {
    $sql = "UPDATE khach_hang SET 
            ten_kh = '$ten_kh', 
            email = '$email', 
            hinh_anh = '$hinh_anh'
            WHERE ma_kh = '$ma_kh'";

    pdo_query($sql);
}

?>