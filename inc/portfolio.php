<section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <span>Portfolio Showcase</span>
                    <h2>My Recent Best Works</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $select = "SELECT * FROM projects ORDER BY id DESC";
            $query = mysqli_query($db, $select);
            foreach ($query as $key => $project) {
            ?>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="uploads3/images3/<?php echo $project['thumbnail'] ?>" alt="<?php echo $project['title'] ?>">
                        </div>
                        <div class="speaker-overlay">
                            <span>Design</span>
                            <h4><a href="single.php?id=<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a></h4>
                            <a href="single.php?id=<?php echo $project['id'] ?>" class="arrow-btn"> <span></span>More Description</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>