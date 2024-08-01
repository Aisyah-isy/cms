<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $judul; ?></title>
    <?php require_once('layout/_css.php'); ?>

</head>

<body>
    <header class="header-area">
        <!-- Top Header Area -->
        <?php require_once('layout/_header.php'); ?>


        <!-- Logo Area -->
        <?php require_once('layout/_logo.php'); ?>


        <!-- Nav Area -->
        <?php require_once('layout/_navbar.php'); ?>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(<?= base_url('assets/upload/yah.jpeg'); ?>);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>about me</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <h4><a class="post-headline mt-0">There All About Me<Menu></Menu></a></h4>
                            <p class="mb-3">Nama saya Nur A'isyah. Saya Bersekolah di SMK Negeri 2 Karanganyar jurusan Rekayasa Perangkat Lunak.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="<?= base_url('assets/upload/ai2.jpeg'); ?>" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="<?= $konfig->instagram; ?>">Ais yeah</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100 ">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <h4><a class="post-headline mt-0">Hobi<Menu></Menu></a></h4>
                            <p class="mb-3 mt-0">Ngegambar ma nonton anime</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->

            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
    <div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(<?= base_url('assets/upload/yy.jpeg'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-blog-area blog-style-2 text-center mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a class="post-tag">there</a>
                            <h4><a href="<?= $konfig->instagram; ?>" class="post-headline">About me</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">50</span></h2>
                        <p>Mental Health</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">140</span></h2>
                        <p>IG Followers</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">0</span></h2>
                        <p>Prestasi</p>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100">
                        <h2><span class="counter">15</span></h2>
                        <p>Hobi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5></h5>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <p></p>
                </div>
            </div>
        </div>


    </div>

    <?php require_once('layout/_footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <?php require_once('layout/_js.php'); ?>


</body>

</html>