<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
        $i = 0;
        foreach ($events as $e) :
            $i++;
        ?>
            <div class="carousel-item  <?php if ($i == '1') {
                                            echo "active";
                                        } ?> ">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/uploads/<?= $e['image']; ?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-light"><?= $e['name']; ?></h1>
                                <h3 class="h2 text-light"><?= $e['category']; ?></h3>
                                <p class="text-light">
                                    <?= $e['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Evevnt Lingkungan Terbaru</h1>
                <p>
                    Cari Event Lingkungan Terbaru Sekitar Kamu!
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($events as $e) : ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="/uploads/<?= $e['image']; ?>" data-lightbox="gallery-mf">
                            <img src="/uploads/<?= $e['image']; ?>" class="card-img-top" alt="...">
                        </a>

                        <div class="card-body">

                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"><?= $e['name']; ?></a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                            </p>
                            <div class="row">
                                <div class="col">
                                    <span class="text-success d-inline me-2"><?= $e['category']; ?></span>/
                                    <span class="text-success d-inline me-2"><?= changeDateFormat('d-m-Y', $e['date']); ?></span>/
                                    <a href="<?= $e['link']; ?>" style="text-decoration: none;"> <span class="text-success d-inline me-2">Link</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="row justify-content-end">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <a href="/events" class="btn btn-success">Lebih lengkap...</a>
                </div>
            </div>
        </div>
</section>
<!-- End Featured Product -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Keja Sama dengan Lingkungi?</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                Lorem ipsum dolor sit amet.Jadika
            </p>
        </div>
    </div>
    <div class="row">

        <div class="col-12 col-md-6 pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-handshake"></i></div>
                <h2 class="h5 mt-4 text-center">Partnership</h2>
            </div>
        </div>

        <div class="col-12 col-md-6  pb-5">
            <div class="h-100 py-5 services-icon-wap shadow">
                <div class="h1 text-success text-center"><i class="fa fa-phone-alt"></i></div>
                <h2 class="h5 mt-4 text-center">Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<?= $this->endSection(); ?>