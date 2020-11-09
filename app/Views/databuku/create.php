<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="/databuku/save" method="post">
                <?php csrf_field(); ?>
                <div class="form-group">
                    <label for="InputBuku">Judul buku :</label>
                    <input type="text" class="form-control" id="InputBuku" placeholder="judul buku" name="judul">
                </div>
                <div class="form-group">
                    <label for="InputPenulis">Penulis :</label>
                    <input type="text" class="form-control" id="InputPenulis" placeholder="penulis buku" name="penulis">
                </div>
                <div class="form-group">
                    <label for="InputJumlah">Jumlah :</label>
                    <input type="text" class="form-control" id="InputJumlah" placeholder="jumlah buku" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="InputSinopsis">Sinopsis :</label>
                    <input type="text" class="form-control" id="InputSinopsis" placeholder="sinopsis buku" name="sinopsis">
                </div>
                <div class="form-group">
                    <label for="InputGambar">Nama file gambar :</label>
                    <input type="text" class="form-control" id="InputGambar" placeholder="file gambar buku" name="gambar">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>