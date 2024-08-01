<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $judul; ?></title>
    <?php require_once('layout/_css.php'); ?>
    <style>
        .ekko-lightbox-nav-overlay a {
            color: goldenrod;
        }
    </style>
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

    <div class="single-blog-wrapper section-padding-50 wow fadeInUp">
        <div class="mb-1">
            <h6 class="text-center">Galeri-</h6>
        </div>

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-5">

            <div class="container mt-3">
                <div class="row">
                    <!-- ##### Post Content Area ##### -->
                    <div class="col-12">
                        <div class="row">
                            <?php foreach ($galeri as $aa) { ?>
                                <div class="col-lg-4 col-md-3 col-6 my-3 ">
                                    <div class="card img-fluid bg-transparent border-0" style="width: 22rem;">
                                        <img src="<?= base_url('assets/upload/galeri/' . $aa['foto']) ?>" class="card-img-top gambar-galeri" alt="...">
                                        <div class="card-body p-2 ">
                                            <h5 class="card-title"><?= $aa['judul'] ?></h5>
                                            <a href="<?= base_url('assets/upload/galeri/' . $aa['foto']) ?>" class="btn btn-sm btn-secondary" target="_blank">Lihat Gambar</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">
                        <h5</h5>
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

    <!-- ##### Footer Area Start ##### -->
    <?php require_once('layout/_footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <?php require_once('layout/_js.php'); ?>

</body>

</html>