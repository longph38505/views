<div class="container d-flex ">
    <div class="row justify-content-center py-2 my-2">
        <?php
            foreach ($timkiem as $key) {
                echo '
                <div class="col-2 ">
                <a href="index.php?page=product&ma_sp='.$key['ma_sp'].'"><img src="view/user/asset/image/'.$key['img'].'" width="100%" >
                </a>
                <a href="index.php?page=product&ma_sp='.$key['ma_sp'].'"><p  class="text-center m-1">'.$key['ten_sp'].'</p></a>
                <a href="index.php?page=product&ma_sp='.$key['ma_sp'].'"><h4 class="">Giá: '.$key['gia'].'</h4></a>
            </div>';
            }
            ?>
        </div>
    </div>