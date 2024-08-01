<div class="original-nav-area" id="stickyNav">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between">

                <!-- Subscribe btn -->
                <div class="">
                    <a href="#" class=" " data-toggle="modal" data-target="#subsModal"></a>

                </div>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu" id="originalNav">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a>Catagory</a>
                                <ul class="dropdown">
                                    <?php foreach ($kate as $k) { ?>
                                        <li><a href="<?= base_url('home/kategori/' . $k['id_kategori']); ?>">
                                                <?= $k['kategori'] ?>
                                            </a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('home/galeri') ?>">Galery</a></li>
                            <li><a href="<?= base_url('home/saran') ?>">Contact Us</a></li>
                            <li><a href="<?= base_url('home/about_me') ?>">About Me</a></li>
                            <li><a class="me-2" href="<?= site_url('auth') ?>">loginn</a></li>
                        </ul>

                        <!-- Search Form  -->
                        <div id="search" class="mb-4 ms-4">
                            <form action="<?= base_url('home') ?>" method="post">
                                <input class="btn border border-secondary ms-3" type="text" placeholder="Cari Berita..." name="keyword" autofocus>
                                <input class="btn btn-secondary border" type="submit" name="submit" value="Cari"></input>
                            </form>
                        </div>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</div>