<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mb-3">Form Ubah Data Komik</h2>
      <form action="/edit/update/<?= $komik['id']; ?>" method="post">
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik['slug']; ?>" >
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" autofocus value="<?= $komik['judul']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $komik['penulis']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $komik['penerbit']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sampul" name="sampul" value="<?= $komik['sampul']; ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $komik['deskripsi']; ?>">
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Ubah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>