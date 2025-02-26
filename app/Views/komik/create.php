<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mb-3">Form Tambah Data Komik</h2>
      <?= form_open('create/save', ['enctype' => 'multipart/form-data']) ?>
        <?= csrf_field(); ?>
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (validation_show_error('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= old('judul') ?>">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              <?= validation_show_error('judul') ?>
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis') ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit') ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="input-group mb-3">
            <label class="input-group-text" for="sampul">Pilih sampul</label>
            <input type="file" class="form-control <?= (validation_show_error('sampul')) ? 'is-invalid' : '' ?>" id="sampul" name="sampul" onchange="previewImg()">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              <?= validation_show_error('sampul') ?>
            </div>
            <div class="col-sm-2">
              <img src="/img/index.png" class="img-thumbnail img-preview">
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= old('deskripsi') ?>">
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