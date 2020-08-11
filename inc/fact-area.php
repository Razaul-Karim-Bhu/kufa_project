<?php
$select = "SELECT * FROM feature ORDER BY id DESC";
$query = mysqli_query($db, $select);

?>
<section class="fact-area">
    <div class="container">
        <div class="fact-wrap">
            <div class="row justify-content-between">
                <?php
                foreach ($query as $key => $value) {
                ?>


                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="fact-box text-center mb-50">
                            <div class="fact-icon">
                                <i class="<?php echo $value['icon'] ?>"></i>
                            </div>
                            <div class="fact-content">
                                <h2><span class="count"><?php echo $value['number'] ?></span></h2>
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
</section>