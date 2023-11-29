<?php
    session_start(); // Bắt đầu phiên
    session_unset(); // Hủy tất cả các biến phiên
    session_destroy(); // Hủy phiên

    // Chuyển hướng về trang chủ hoặc trang đăng nhập
    header("location: ./../index.php");
    exit();
?>