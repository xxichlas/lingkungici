<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>
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

        </div>
        <div class="row justify-content-end">
            <div class="col-4">

            </div>

        </div>
    </div>
</section>
<!-- End Featured Product -->


<?= $this->endSection(); ?>