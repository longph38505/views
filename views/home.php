<style>
    .tong{  

        display: grid;
        grid-template-columns: 250px 250px 250px 250px ;
        justify-content: space-evenly;
        padding-top: 40px;
        padding-left: 50px;      
    }
</style>

<section id="hero">
        <h4>Trao đổi ưu đãi</h4>
        <h2>Ưu đãi siêu giá trị</h2>
        <h1>Trên tất cả các produects</h1>
        <p>Tiết kiệm hơn với phiếu giảm giá & giảm giá tới 70%!</p>
        <button>Mua ngay</button>
    </section>

    <!-- <section id="banner" class="section-m1">
        <h4>Khuyến mãi</h4>
        <h2>Giảm giá tới 70% - Tất cả áo thun &; phụ kiện</h2>
    </section> -->


        <center>
        <h2 style="margin-top: 50px;">Sản phẩm chính</h2>
        </center>
    <section class="tong">
    
<?php
        
        $sql= "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai WHERE trang_thai like '%chinh%' ORDER BY ma_sp DESC LIMIT 4";
        $showsp= pdo_query($sql);               
        foreach($showsp as $show){
          extract($show);
          $ma_sp=$show['ma_sp'];
          $id="index.php?page=product&ma_sp=".$ma_sp;
          ?>
            <section id="product1" class="section-p1">
            <div class="Pro-container">
                <div class="pro" >
                    <img style="width: 230px; height: 200px;" src="img/<?php echo $show['img'] ?>" alt="">
                    <div class="des">
                        <span style="color: red;"><?php echo $show['ten_loai'] ?></span>
                        <h4><?php echo $show['ten_sp'] ?></h4>
                        <p style="font-size: 10px;">Số lượng: <?php echo $show['so_luong'] ?></p>
                        <h5><?php echo $show['gia'] ?> VNĐ</h5>
                        </div>
                            <a href="<?php echo $id ?>"><i class="fas fa-shopping-cart cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <?php } ?>
</section>
    
            
<!-- --------------------------------------------------------------------------------- -->
    <section id="banner" class="section-m1">
        <h2>Khuyến mãi</h2>
        <h4>Giảm giá tới 70% - Tất cả áo thun</h4>
    </section>

    <center>
        <h2 style="margin-top: 50px;">Sản phẩm Sale</h2>
    </center>

    <section class="tong">
    
<?php
        
        $sql= "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai WHERE trang_thai like '%sale%' ORDER BY ma_sp DESC LIMIT 4";
        $showsp= pdo_query($sql);               
        foreach($showsp as $show){
          extract($show);
          $ma_sp=$show['ma_sp'];
          $id="index.php?page=product&ma_sp=".$ma_sp;
          ?>
            <section id="product1" class="section-p1">
            <div class="Pro-container">
                <div class="pro" >
                    <img style="width: 230px; height: 200px;" src="img/<?php echo $show['img'] ?>" alt="">
                    <div class="des">
                        <span style="color: red;"><?php echo $show['ten_loai'] ?></span>
                        <h4><?php echo $show['ten_sp'] ?></h4>
                        <p style="font-size: 10px;">Số lượng: <?php echo $show['so_luong'] ?></p>
                        <h5><?php echo $show['gia'] ?> VNĐ</h5>
                        </div>
                            <a href="<?php echo $id ?>"><i class="fas fa-shopping-cart cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <?php } ?>
</section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    