<?php
session_start();

include "header.php";
include "./../model/pdo.php";
include "./../model/sanpham.php";
include "./../model/taikhoan.php";
include "./../model/dathang.php";
include "./../model/binhluan.php";
include "./../model/danhmuc.php";
// if(isset($_SESSION['email'])&&(is_array($_SESSION['email']))&&(count($_SESSION['email'])>0)){

// }


if(isset($_GET['page'])){
    $page = $_GET['page'];

    // Chuyển đổi các đường dẫn trong URL thành các đường dẫn trong hệ thống file.
    $page_path = str_replace('/admin/', '', $page);
    
    switch ($page_path) {
        case 'home':
            include "home.php";
            break;
        case 'sanpham':
            include "sanpham/sanpham.php";
            break;

        case 'them_sp':
            if(isset($_POST['submit'])&&($_POST['submit'])){
                $ten_sp=$_POST['ten_sp'];
                $ngay_nhap=$_POST['ngay_nhap'];
                $trang_thai=$_POST['trang_thai'];

                $img_name = $_FILES['img']['name'];
                $tmp_img = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_img, "./../img/" . $img_name);

                $mo_ta=$_POST['mo_ta'];
                $ma_loai=$_POST['ma_loai'];
                $so_luong=$_POST['so_luong'];
                $gia=$_POST['gia'];
                // $giam_gia=$_POST['giam_gia'];

                add_sp($ten_sp, $ngay_nhap, $trang_thai, $img_name, $mo_ta, $ma_loai, $so_luong, $gia);
                header('location: index.php?page=sanpham');
            }
            include "./sanpham/them_sp.php";
            break;

        case 'xoa_sp':
            if(isset($_GET['ma_sp'])&&($_GET['ma_sp'] >0)){
                delete_sp($_GET['ma_sp']);
            }
            $listsp=loadall_sp();
            header('location: index.php?page=sanpham');
            break;
        case 'sua_sp':
                if(isset($_POST['submit']) && $_POST['submit']){
                    $ma_sp = $_GET['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $ngay_nhap = $_POST['ngay_nhap'];
                    $trang_thai = $_POST['trang_thai'];
            
                    $img_name = $_FILES['img']['name'];
                    $tmp_img = $_FILES['img']['tmp_name'];
                    $mo_ta = $_POST['mo_ta'];
                    $ma_loai = $_POST['ma_loai'];
                    $so_luong = $_POST['so_luong'];
                    $gia = $_POST['gia'];
            
                    // Check if an image is selected
                    if(!empty($img_name)){
                        // Upload the new image
                        move_uploaded_file($tmp_img, "./../img/" . $img_name);
                    } else {
                        
                    }
            
                    // Update the product with the new information
                    update_sp($ma_sp, $ten_sp, $ngay_nhap, $trang_thai, $img_name, $mo_ta, $ma_loai, $so_luong, $gia);
                    header('location: index.php?page=sanpham');
                }
            
                include "sanpham/sua_sp.php";
                break;
            

        case 'xoa_dm':
            if(isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)){
                delete_loai_hang($_GET['ma_loai']);
            }
            include "danhmuc/list.php";
            break;



        case 'loaihang':
            include "danhmuc/list.php";
            break;
        case 'add_dm':
            if(isset($_POST['adddm'])&& ($_POST['adddm'])){
            $ten_loai=$_POST['ten_loai'];

            

            insert_loai_hang($ten_loai);
            header('location: index.php?page=loaihang');

            }
            include "./danhmuc/add.php";
            break;    
        case 'sua_dm':
            if (isset($_POST['sua_dm']) && ($_POST['sua_dm'])) {
                $ma_loai = $_GET['ma_loai'];  // Thêm dòng này để lấy ma_loai từ tham số trên URL
                $ten_loai = $_POST['ten_loai'];
            
                update_dm($ma_loai, $ten_loai); // Thêm $ma_loai vào tham số của hàm update_dm
                header('location: index.php?page=loaihang');
            }
            include "./danhmuc/sua.php";
            break;
                

        case 'khachhang':
                    
            include "khachhang/qltk.php";
            break;

        // case 'xoatkkh':
        //     if(isset($_GET['ma_kh'])&&($_GET['ma_kh'] >0)){
        //         delete_kh($_GET['ma_kh']);
        //     }
        //     $listtk=show_kh();
        //     header('location: index.php?page=qltk');
        //     include "khachhang/qltk.php";
        //     break;

        case 'xoa_kh':
                if(isset($_GET['ma_kh'])&&($_GET['ma_kh'] >0)){
                    delete_kh($_GET['ma_kh']);
                }
                $listsp=show_kh();
                header('location: index.php?page=khachhang');
                break;


        case 'xoa_bl':
                if(isset($_GET['ma_bl'])&&($_GET['ma_bl'] >0)){
                    delete_bl($_GET['ma_bl']);
                }
                header('location: index.php?page=binhluan');
                break;

            
    
        case 'logout':
            session_destroy();
            header('location: ./../index.php');
            exit();
        
        case 'donhang':
            include "donhang/donhang.php";
            break;

        case 'binhluan':
            include "binhluan/binhluan.php";
            break;
    
        case 'xoa_dh':
            if(isset($_GET['ma_dh'])&&($_GET['ma_dh'] >0)){
                delete_dh($_GET['ma_dh']);
            }
            $listsp=show_kh();
            header('location: index.php?page=donhang');
            break;

        default:
                    // Nếu không phải trang nào được xác định, chẳng hạn trang không tồn tại, chuyển hướng hoặc xử lý theo ý bạn.
        break;

        }
} else {
    include "home.php";
}
?>
