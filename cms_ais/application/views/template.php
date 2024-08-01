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
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <?php require_once('layout/_header.php'); ?>


        <!-- Logo Area -->
        <?php require_once('layout/_logo.php'); ?>


        <!-- Nav Area -->
        <?php require_once('layout/_navbar.php'); ?>

    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php require_once('layout/_carousel.php'); ?>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row">
                <?php require_once('layout/_konten.php'); ?>
                <!-- ##### Sidebar Area ##### -->
                <?php require_once('layout/_lastest_post.php'); ?>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="insta-title">

                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">

                </div>
            </div>
        </div>


    </div>

    <!-- ##### Footer Area Start ##### -->
    <?php require_once('layout/_footer.php'); ?>


    <?php require_once('layout/_js.php'); ?>

</body>

</html>