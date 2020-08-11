<section class="testimonial-area primary-bg pt-115 pb-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>testimonial</span>
                    <h2>happy customer quotes</h2>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">


                <div class="testimonial-active">
                    <?php
                    $select = "SELECT * FROM testimonial";
                    $query = mysqli_query($db, $select);
                    foreach ($query as $key => $value) {
                    ?>
                        <div class="single-testimonial text-center">
                            <div class="testi-avatar">
                                <img src="uploads/logo/<?php echo $value['img'] ?>" alt="img" class="img-fluid" height="100px" width="100px" style=>
                            </div>
                            <div class="testi-content">
                                <h4><span>“</span> <?php echo $value['message'] ?> <span>”</span></h4>
                                <div class="testi-avatar-info">
                                    <h5><?php echo $value['name'] ?></h5>
                                    <span><?php echo $value['title'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>



    </div>
</section>
<!-- testimonial-area-end -->