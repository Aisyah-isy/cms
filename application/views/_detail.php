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
    <?php

            use function PHPSTORM_META\type;

 require_once('layout/_css.php'); ?>
    <!-- <style>
        @media only screen and (max-width: 400px) {
            .gambar-konten {
                height: 200px !important;
                object-fit: cover !important;
            }
        }

        @media only screen and (min-width: 400px) {
            .gambar-konten {
                height: 300px !important;
                object-fit: cover !important;
            }
        }

        @media only screen and (min-width: 768px) {
            .gambar-konten {
                height: 400px !important;
                object-fit: cover !important;
            }
        }

        @media only screen and (min-width: 992px) {
            .gambar-konten {
                height: 500px !important;
                object-fit: cover !important;
            }
        }

        @media only screen and (min-width: 1200px) {
            .gambar-konten {
                height: 600px !important;
                object-fit: cover !important;
            }
        }
        body{
            background-color: #f2f4f8 !important;
        }
    </style> -->
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
   
    <div class="single-blog-wrapper section-padding-0-100 clearfix">
        <div class=" mb-3">
            <h6 class="text-center">Detail Artikel-</h6>
        </div>

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-5">
            <div class="single-blog-thumbnail w-100">
                <img class="gambar-konten" src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" alt="">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <!-- ##### Post Content Area ##### -->
                    <div class="col-12 col-lg-9">
                        <!-- Single Blog Area  -->
                        <div class="single-blog-area blog-style-2 mb-50">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                <a href="#" class="post-tag"><?= $konten->kategori; ?></a>
                                <h4><a href="#" class="post-headline mb-0"><?= $konten->judul; ?></a></h4>
                                <div class="post-meta mb-50">
                                    <p class="text-black">By <?= $konten->nama; ?></p>
                                    <p class="text-black"><?= $konten->tanggal; ?></p>
                                </div>
                                <p><?= $konten->keterangan; ?></p>
                                
                                <div class="col-12">
                                    <a href="<?= base_url() ?>" class="btn original-btn">Kembali...</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ##### Sidebar Area ##### -->
                    <?php require_once('layout/_lastest_post.php'); ?>
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

    <!-- ##### Footer Area Start ##### -->
    <?php require_once('layout/_footer.php'); ?>


    <?php require_once('layout/_js.php'); ?>

</body>

</html>