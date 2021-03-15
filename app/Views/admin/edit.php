<?php

use Config\Validation;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- /My Css -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title; ?></title>
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="my-3"> Edit event</h1>
                <form action="/admin/update/<?= $events['id']; ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= $events['id']; ?>">

                    <input type="hidden" name="imageLama" value="<?= $events['image']; ?>">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('name')) ?  'is-invalid' : ''; ?>" id="name" name="name" autofocus value="<?= (old('name')) ? old('name') : $events['name'] ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('name'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Kategori Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('category')) ?  'is-invalid' : ''; ?>" id="category" name="category" autofocus value="<?= (old('category')) ? old('category') : $events['category'] ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('category'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Deskripsi Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="description" name="description" value="<?= (old('description')) ? old('description') : $events['description'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Tanggal Event</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" value="<?= (old('date')) ? old('date') : $events['date'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="admission" class="col-sm-2 col-form-label">Keterangan Admission Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('admission')) ?  'is-invalid' : ''; ?>" id="admission" name="admission" autofocus value="<?= (old('admission')) ? old('admission') : $events['admission'] ?>">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('admission'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="link" class="col-sm-2 col-form-label">link Event</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link" name="link" value="<?= (old('link')) ? old('link') : $events['link'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-2">
                            <img src="/uploads/<?= $events['image']; ?>" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <input class="form-control <?= ($validation->hasError('image')) ?  'is-invalid' : ''; ?>" for="image" type="file" id="image" name="image" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('image'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah data</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <script>
        function previewImg() {

            const image = document.querySelector('#image');
            // const sampulLabel = document.querySelector('.')
            const imgPreview = document.querySelector('.img-preview');

            const fileImage = new FileReader();
            fileImage.readAsDataURL(image.files[0]);

            fileImage.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        };
    </script>

</body>

</html>