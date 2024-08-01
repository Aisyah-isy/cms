<footer class="footer-area text-center ">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <h5 class="mb-4"><?= $konfig->judul_website; ?></h5>
                <p><?= $konfig->profil_website; ?></p>

                <!-- Footer Nav Area -->
                <div class="classy-nav-container breakpoint-off">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-center">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?= base_url(); ?>">Home</a></li>
                                    <?php foreach ($kate as $k) { ?>
                                        <li><a href="<?= base_url('home/kategori/' . $k['id_kategori']); ?>">
                                                <?= $k['kategori'] ?>
                                            </a></li>
                                    <?php } ?>
                                    <li><a href="<?= base_url('home/saran'); ?>">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>

                <!-- Footer Social Area -->
                <div class="footer-social-area mt-30">
                    <a href="<?= $konfig->instagram; ?>" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->facebook; ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->no_wa; ?>" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->alamat; ?>" data-toggle="tooltip" data-placement="top" title="Location"><i class="fa fa-map-marker " aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

    </script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by @<a href="<?= $konfig->instagram;?>" target="_blank"><?= $konfig->judul_website; ?></a>

</footer>