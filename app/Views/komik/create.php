<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mb-3">Tambah Data Komik</h2>
      <?= form_open('create/save') ?>
        <?= csrf_field(); ?>
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" name="judul" autofocus >
            <?= validation_list_errors() ?>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sampul" name="sampul">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Tambah Data</button>
        </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>