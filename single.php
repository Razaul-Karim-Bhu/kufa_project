<?php require 'inc/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM projects WHERE id = '$id'";
$query = mysqli_query($db, $select);
$assoc = mysqli_fetch_assoc($query);


?>
<main>
    <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="breadcrumb-content text-center">
                        <h2><?php echo $assoc['title'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-details-area -->
    <section class="portfolio-details-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 ">
                    <div class="single-blog-list">
                        <div class="blog-list-thumb mb-35 text-center">
                            <img src="uploads3/images3/<?php echo $assoc['thumbnail'] ?>" alt="img" class="w-25">
                        </div>
                        <div class="blog-list-content blog-details-content portfolio-details-content">
                            <p><?php echo $assoc['description'] ?></p>
                            <div class="blog-list-meta">
                                <ul>
                                    <li class="blog-post-date">
                                        <h3>Share On</h3>
                                    </li>
                                    <li class="blog-post-share">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="avatar-post mt-70 mb-60">
                            <ul>
                                <li>
                                    <div class="post-avatar-img">
                                        <img src="img/blog/post_avatar_img.png" alt="img">
                                    </div>
                                    <div class="post-avatar-content">
                                        <h5>Thomas Herlihy</h5>
                                        <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                            condimem
                                            egestliberos dolor auctor
                                            tellus.</p>
                                        <div class="post-avatar-social mt-15">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=devaplexbd.com"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main-area-end -->

<!-- Footer Section -->
<?php require 'inc/footer.php'; ?>