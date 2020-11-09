<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h1>List Buku</h1>
            <a href="" class="btn btn-primary mb-3">+ Tambah</a>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Judul buku</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Selengkapnya ..</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($buku as $k) : ?>
                        <tr>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['jumlah']; ?></td>
                            <td><a href="/databuku/<?= $k['slug']; ?>" class="btn btn-info">Klik disini ..</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>