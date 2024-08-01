<div class="top-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Breaking News Area -->
            <div class="col-12 col-sm-8">
                <div class="breaking-news-area">
                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            <?php foreach ($kate as $k) { ?>
                                <li><a href="<?= base_url('home/kategori/' . $k['id_kategori']); ?>">
                                        <?= $k['kategori'] ?>
                                    </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Top Social Area -->
            <div class="col-12 col-sm-4">
                <div class="top-social-area">
                    <a href="<?= $konfig->instagram; ?>" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->facebook; ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->no_wa; ?>" data-toggle="tooltip" data-placement="top" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a href="<?= $konfig->alamat; ?>" data-toggle="tooltip" data-placement="top" title="Location"><i class="fa fa-map-marker " aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>