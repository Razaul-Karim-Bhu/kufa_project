<!-- Services-area -->
<section id="service" class="services-area pt-120 pb-50">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-8">
        <div class="section-title text-center mb-70">
          <span>WHAT WE DO</span>
          <h2>Services and Solutions</h2>
        </div>
      </div>
    </div>
    <div class="row">

      <?php
      $select = "SELECT * FROM services ORDER BY id DESC limit 9";
      $query = mysqli_query($db, $select);
      foreach ($query as $key => $service) {
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
            <i class="<?php echo $service['icon']; ?>"></i>
            <h3><?php echo $service['title']; ?></h3>
            <p>
              <?php echo $service['summary']; ?>
            </p>
          </div>
        </div>
      <?php
      };
      ?>

    </div>
  </div>
</section>