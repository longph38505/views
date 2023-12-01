<section id="hero">
        <h4>Trao đổi ưu đãi</h4>
        <h2>Ưu đãi siêu giá trị</h2>
        <h1>Trên tất cả các produects</h1>
        <p>Tiết kiệm hơn với phiếu giảm giá & giảm giá tới 70%!</p>
        <button>Mua ngay</button>
    </section>


    <section id="product1" class="section-p1">
            <h2>Sản phẩm chính</h2>
            <?php
        
        $sql= "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai 
        WHERE trang_thai ='chinh' ORDER BY ma_sp DESC LIMIT 4";
        $showsp= pdo_query($sql);               
        foreach($showsp as $show){
          extract($show);
          $ma_sp=$show['ma_sp'];
          $id="index.php?page=product&ma_sp=".$ma_sp;
          ?>
        
        <div class="Pro-container">
            <div class="pro">
                <img src="img/<?php echo $show['img'] ?>" alt="" style="height: 200px">
                <div class="des">
                    <span><?php echo $show['ten_loai'] ?></span>
                    <h5><?php echo $show['ten_sp'] ?></h5>
                    
                    <h4><?php echo $show['gia'] ?>Đ</h4>

                </div>
                <a href="<?php echo $id ?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <?php }?>
    
            
<!-- --------------------------------------------------------------------------------- -->
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore more</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Sản phẩm khuyến mại</h2>
        <?php
    $sql = "SELECT * FROM san_pham JOIN loai_hang ON san_pham.ma_loai=loai_hang.ma_loai WHERE trang_thai ='sale' ORDER BY ma_sp DESC LIMIT 4";
    $showspdb = pdo_query($sql);
    foreach ($showspdb as $showsp) {
        extract($showsp);
        $ma_sp = $showsp['ma_sp'];
        $id = "index.php?page=product&ma_sp=" . $ma_sp;
    ?>

        <div class="Pro-container">
            <div class="pro">
                <img src="img/<?php echo $showsp['img'] ?>" alt="" style="height: 200px">
                <div class="des">
                    <span><?php echo $showsp['ten_loai'] ?></span>
                    <h5><?php echo $showsp['ten_sp'] ?></h5>

                    <h4><?php echo $showsp['gia'] ?>Đ</h4>

                </div>
                <a href="<?php echo $id ?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
        <?php
         } 
        ?>
            
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

    