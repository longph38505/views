<style>
    .tong{  

        display: grid;
        grid-template-columns: 250px 250px 250px 250px ;
        justify-content: space-evenly;
        margin-top: -62px;
        padding-left: 50px;      
    }
</style>
<h2 style="    margin-left: 89px; margin-top: 70px;">Kết quả</h2>
<section class="tong">
    
<?php
                       
        foreach($timkiem as $show){
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