<?php
$select = "SELECT * FROM about ORDER BY id DESC";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);


$select2 = "SELECT * FROM aboutimage ORDER BY id DESC";
$query2 = mysqli_query($db, $select2);
$assoc2 = mysqli_fetch_assoc($query2);
?>
<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="uploads1/images1/<?php echo $assoc2['image_name'] ?>" class="img-fluid" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Me</h2>
                </div>
                <div class="about-content">
                    <p><?php echo $assoc['about'] ?></p>
                    <h3>Education:</h3>
                </div>
                <!-- Education Item -->
                <?php

                foreach ($query as $key => $about) {
                ?>

                    <div class="education">
                        <div class="year"><?php echo $about['year'] ?></div>
                        <div class="line"></div>
                        <div class="location">
                            <span><?php echo $about['skill_title'] ?></span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?php echo $about['skill_bar'] . '%' ?>" aria-valuenow="<?php echo $about['skill_bar'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>







                <?php
                }
                ?>





            </div>
            <!-- End Education Item -->

        </div>
    </div>
    </div>
</section>