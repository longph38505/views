<?php
session_start();
include "views/header.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/timkiem.php";
include "model/giohang.php";
include "model/dathang.php";
include "model/binhluan.php";
include "model/pdo.php";


if(isset($_GET['page'])){
    $page = $_GET['page'];

    // Chuyển đổi các đường dẫn trong URL thành các đường dẫn trong hệ thống file.
    $page_path = str_replace('/views/', '', $page);
    
    switch ($page_path) {
        case 'home':
            include "views/home.php";
            break;
        
        case 'blog':
            include "views/blog.php";
            break;

        case 'shop':
            
            include "views/shop.php";
            break;

        case 'timkiem':
            if(isset($_GET['submit'])&&($_GET['submit'])){
                $ten_sr=$_GET['search'];
                $search=search_sp();
                if($search ->rowCount() > 0){
                    header('location: index.php?page=');
                }else{
                    echo "không tìm thấy sản phẩm";
                }
            }
            break;

        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $ten_kh=$_POST['ten_kh'];
                $email=$_POST['email'];
                
                $img_name = $_FILES['hinh_anh']['name'];
                $tmp_img = $_FILES['hinh_anh']['tmp_name'];
                move_uploaded_file($tmp_img, "./img/" . $img_name);
                        
                $pass=$_POST['pass'];
                
                insert_taikhoan($ten_kh, $email, $img_name, $pass);
                $thongbao="Đăng ký tài khoản thành công";
                header('location: index.php?page=login');
            }
            include "taikhoan/register.php";
            break;
            
        case 'login':
            if(isset($_POST['login'])&&($_POST['login'])){
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $checktk=login_taikhoan($email, $pass);
                
                if(is_array($checktk)){
                    $_SESSION['email']=$checktk;
                    // $thongbao="Đăng nhập tài khoản thành công";
                    header('location: index.php');
                }else{
                    $thongbao="Tài khoản không tồn tại";
                }

                
                
            }
            include "taikhoan/login.php";
            break;
        
        case 'taikhoan':
            include "taikhoan/qltk.php";
            break;

        case 'logout':
            session_start(); // Bắt đầu phiên
            session_unset(); // Hủy tất cả các biến phiên
            session_destroy(); // Hủy phiên

            // Chuyển hướng về trang chủ hoặc trang đăng nhập
            header("location: index.php");
            exit();
            break;
        
        
            include "taikhoan/login-admin.php";
            break;
            
        case 'login-admin':

            if(isset($_POST['login'])&&($_POST['login'])){
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $login_admin=loginadmin_taikhoan($email, $pass);
                
                if(is_array($login_admin)){
                    $_SESSION['email'] = $login_admin['email'];
                    $_SESSION['vai_tro'] = $login_admin['vai_tro'];
                    if($login_admin['vai_tro'] == 1){
                        header('location: admin/index.php');
                    }else{
                        echo "người dùng không tồn tại";
                    }
                }else{
                    echo "Tài khoản không tồn tại";
                }
                
            }
            include "taikhoan/login-admin.php";
            break;
            
        case 'product':
            if(isset($_GET['product'])&&($_POST['product'])){
                ctsp($_GET['ma_sp']);
            }
            include "views/product.php";
            break;
        
        case 'sua_tk':
            if (isset($_POST['submit'])) {
                $ma_kh = $_GET['ma_kh']; 
                $ten_kh = $_POST['ten_kh'];
                $email = $_POST['email'];
            
                 
                if ($_FILES['hinh_anh']['error'] == 0) {
                    $img_name = $_FILES['hinh_anh']['name'];
                    $tmp_img = $_FILES['hinh_anh']['tmp_name'];
                    move_uploaded_file($tmp_img, "./../img/" . $img_name);
                } else {
                        
                    $img_name = $chay['hinh_anh'];
                }
            
                   
                update_tk($ma_kh, $ten_kh, $email, $img_name);
                
                  
                header('location: index.php?page=taikhoan');
            }
            
            include "taikhoan/sua_tk.php";
            break;
            

        
        case 'cart':
            include "views/cart.php";
            break;

        case 'add_cart':
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $so_luong_gh=$_POST['so_luong_gh'];
                $gia=$_POST['gia'];
                $thanh_tien=$gia*$so_luong_gh;
                $ma_sp=$_POST['ma_sp'];
                $ma_kh=$_POST['ma_kh'];

                add_gh($so_luong_gh, $ma_kh, $thanh_tien, $ma_sp);
                header('location: index.php?page=cart');

            }
            break;
            


        case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!=0)){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                $timkiem=search_sp($kyw);
                include("views/sanpham.php");
                break;

        case 'xoa_cart':
                if(isset($_GET['ma_gh'])&&($_GET['ma_gh']>0)){
                    delete_gh($_GET['ma_gh']);
                }
                $listgh=show_cart();
                include "views/cart.php";
                break;
        
        case 'donhang':
            
            include "taikhoan/donhang.php";
            break;
        case 'add_dh':
            
            include "views/dathang.php";
            break;
        
        case 'add_donhang':
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $ngay_dat= date('Y-m-d');
                $ten_ng_nhan=$_POST['ten_ng_nhan'];
                $sdt_ng_nhan=$_POST['sdt_ng_nhan'];
                $dia_chi_nhan=$_POST['dia_chi_nhan'];
                $ghi_chu=$_POST['ghi_chu'];
                $ma_kh=$_POST['ma_kh'];
                $ma_sp=$_POST['ma_sp'];
                $so_luong_dh=$_POST['so_luong_dh'];
                $gia=$_POST['gia'];
                $tong_tien=$gia*$so_luong_dh;
                add_dh($ngay_dat, $ten_ng_nhan, $sdt_ng_nhan, $dia_chi_nhan, $ghi_chu, $tong_tien, $ma_kh, $ma_sp, $so_luong_dh);

                header('location: index.php?page=donhang');
            }
            break;


        case 'binhluan':
                if(isset($_POST['submit'])&&($_POST['submit'])){
                    $nd_bl=$_POST['nd_bl'];
                    
                    $ngay_bl = date("Y-m-d");
                    $ma_kh=$_POST['ma_kh'];
                    $ma_sp=$_POST['ma_sp'];
                    insert_binhluan($nd_bl, $ngay_bl, $ma_kh, $ma_sp);
                    header('location: index.php?page=product&ma_sp='.$ma_sp);
                }
                break;

                

        case 'danhmuc':
            if(isset($_GET['danhmuc'])&&($_POST['danhmuc'])){
                
            }
            include "views/danhmuc.php";
            break;










            default:
            // Nếu không phải trang nào được xác định, chẳng hạn trang không tồn tại, chuyển hướng hoặc xử lý theo ý bạn.
            break;
    
        }
} else {
    include "views/home.php";
}

include "views/footer.php";
?>
