<div class="col-12 col-lg-9 mb-3">
    <!-- Single Blog Area  -->
    <?php foreach ($konten as $konten) { ?>
        <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="w-160 h-90">
                        <img src="<?= base_url('assets/upload/konten/' . $konten['foto']) ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Blog Content -->
                    <div class="single-blog-content">
                        <div class="line"></div>
                        <a href="<?= base_url('home/kategori/' . $konten['id_kategori']); ?>" class="post-tag"><?= $konten['kategori'] ?></a>
                        <h4><a class="post-headline"><?= $konten['judul'] ?></a></h4>
                        <p><a href="<?= base_url('home/artikel/' . $konten['slug']) ?>" class="btn btn-sm">Baca Selengkapnya...</a></p>
                        <div class="post-meta">
                            <p class="text-black">By <?= $konten['nama'] ?></p>
                            <p class="text-black"><?= $konten['tanggal'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>