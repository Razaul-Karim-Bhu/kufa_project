<section id="home" class="banner-area banner-bg fix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="banner-content">
                    <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                    <?php
                    $select = "SELECT * FROM banner";
                    $query = mysqli_query($db, $select);
                    $assoc = mysqli_fetch_assoc($query);


                    ?>
                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?php echo $assoc['name'] ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $assoc['description'] ?></p>
                    <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                        <ul>
                            <?php
                            $select = "SELECT * FROM icon";
                            $query = mysqli_query($db, $select);

                            foreach ($query as $key => $value) {
                            ?>

                                <li><a target="_blank" href="<?php echo $value['link'] ?>"><i class="<?php echo $value['icon'] ?>"></i></a></li>


                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                    <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                <div class="banner-img text-right">
                    <img src="uploads/logo/<?php echo $assoc['img'] ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
</section>
<!-- banner-area-end -->