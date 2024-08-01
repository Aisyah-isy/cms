<div class="col-12 col-md-4 col-lg-3">
    <div class="post-sidebar-area">

        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Recent Posts</h5>

            <div class="widget-content">
                <?php foreach ($this->Home_model->late_post() as $pp) { ?>
                    <!-- Single Blog Post -->
                    <div class="single-blog-post d-flex align-items-center widget-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail" style="height:auto; object-fit: cover !important;">
                            <img src="<?= base_url('assets/upload/konten/' . $pp['foto']) ?>" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="<?= base_url('home/kategori/' . $pp['id_kategori']); ?>" class="post-tag"><?= $pp['kategori'] ?></a>
                            <h4><a href="<?= base_url('home/artikel/' . $pp['slug']) ?>" class="post-headline"><?= $pp['judul'] ?></a></h4>
                            <div class="post-meta">
                                <p class="text-black"><?= $pp['tanggal'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Widget Area -->
    <div class="sidebar-widget-area ms-3">
        <form action="<?= base_url('home') ?>" method="post">
            <input class="btn-sm border border-secondary" type="text" placeholder="Cari Berita..." name="keyword" autofocus>
            <input class="btn btn-secondary border" type="submit" name="submit" value="Cari"></input>
        </form>
    </div>


    <!-- Widget Area -->
    <div class="sidebar-widget-area">
        <h5 class="title">Categori</h5>
        <div class="widget-content">
            <?php foreach ($kate as $k) { ?>
                <ul class="tags">
                    <li><a href="<?= base_url('home/kategori/' . $k['id_kategori']); ?>"><?= $k['kategori'] ?></a></li>
                </ul>
            <?php } ?>
        </div>
    </div>
</div>
</div>