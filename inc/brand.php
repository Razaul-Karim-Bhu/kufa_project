<?php
$select = "SELECT * FROM brand_image ORDER BY id DESC";
$query = mysqli_query($db, $select);

?>
<div class="barnd-area pt-100 pb-100">
    <div class="container">
        <div class="row brand-active">
            <?php
            foreach ($query as $key => $value) {
            ?>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="uploads2/images2/<?php echo $value['brand'] ?>" alt="img">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- brand-area-end -->