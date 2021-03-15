<?= $this->extend('layout/navbar'); ?>

<?= $this->section('content'); ?>


<section class="bg-light">
    <div class="container py-5">

        <div class="row">
            <div class="col">
                <h1 class="">Daftar Event</h1>
                <div class="row">
                    <div class="col-4">
                        <a href="/admin/create" class="btn btn-primary ml-5 mb-5 d-inline">Tambah Event Baru</a>
                        <a href="/logout" class="btn btn-danger mr-3 ml-5 mb-5 d-inline">Logout</a>
                    </div>
                </div>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success my-3" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <table class="table table-dark mt-4" style="vertical-align: middle;">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Admission</th>
                            <th scope="col">Link</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events as $e) : ?>
                            <tr>
                                <th scope="row"><?= $e['id']; ?></th>
                                <td><?= $e['name']; ?></td>
                                <td><?= $e['category']; ?></td>
                                <td><?= $e['description']; ?></td>
                                <td><?= $e['date']; ?></td>
                                <td><?= $e['admission']; ?></td>
                                <td><?= $e['link']; ?></td>
                                <td><img src="/uploads/<?= $e['image']; ?>" alt="" class="sampul"></td>
                                <td>
                                    <a href="/admin/edit/<?= $e['id']; ?>" class="btn btn-warning">Edit</a>
                                </td>
                                <td>

                                    <form action="/admin/<?= $e['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin akan menghapus event <?= $e['name']; ?>?');">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--/ Section list events End /-->

    </div>

</section>
<!--/ Section Events End /-->
<?= $this->endSection(); ?>