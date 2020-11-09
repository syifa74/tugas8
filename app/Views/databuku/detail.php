<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container text-center mt-3">
    <div class="row">
        <div class="col text-left">
            <a href="/databuku" class="btn btn-primary">Kembali ke list buku</a>
            <a href=""></a>
        </div>
        <div class="col text-right">
            <a href="" class="btn btn-warning">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a>

        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col">
            <div class="card mb-5" style="width: 70%;margin:auto;">
                <img src="/img/<?= $buku['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1><?= $buku['judul']; ?></h1>
                    <p>Penulis : <?= $buku['penulis']; ?></p>
                    <p>Jumlah : <?= $buku['jumlah']; ?></p>
                    <p class="card-text"><?= $buku['sinopsis']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>