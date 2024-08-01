<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<style>
    @media only screen and (max-width: 400px) {
        .gambar-carousel {
            height: 200px !important;
            object-fit: cover !important;
        }
    }

    @media only screen and (min-width: 400px) {
        .gambar-carousel {
            height: 300px !important;
            object-fit: cover !important;
        }
    }

    @media only screen and (min-width: 768px) {
        .gambar-carousel {
            height: 400px !important;
            object-fit: cover !important;
        }
    }

    @media only screen and (min-width: 992px) {
        .gambar-carousel {
            height: 500px !important;
            object-fit: cover !important;
        }
    }

    @media only screen and (min-width: 1200px) {
        .gambar-carousel {
            height: 600px !important;
            object-fit: cover !important;
        }
    }
</style>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php
        $no = 1;
        foreach ($cara as $i) {
            if ($no = 1) {
                echo '<div class="carousel-item active">';
                echo '<img src="' . base_url('assets/upload/caraousel/') . $i['foto'] . '" class="d-block w-100 gambar-carousel" alt="...">';
                echo '</div>';
                $no += 1;
            } else {
                echo '<div class="carousel-item">';
                echo '<img src="' . base_url('assets/upload/caraousel/') . $i['foto'] . '" class="d-block w-100 gambar-carousel" alt="...">';
                echo '</div>';
            };
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->
<div class="hero-area">
    <!-- Hero Slides Area -->
    <div class="hero-slides owl-carousel">
        <!-- Single Slide -->
        <?php foreach ($cara as $i){?>
        <div class="single-hero-slide bg-img" style="background-image: url('<?= base_url('assets/upload/caraousel/') . $i['foto']?>');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="slide-content text-center">
                            <div class="post-tag">
                                <a data-animation="fadeInUp"><?= $i['judul']?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>