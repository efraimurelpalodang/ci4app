<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <h2 class="mb-3">Ubah Data Komik</h2>
      <?= form_open('/edit/update/'.$komik['id'], ['enctype' => 'multipart/form-data']) ?>
        <?= csrf_field(); ?>
        <input type="hidden" name="slug" value="<?= $komik["slug"]; ?>">
        <input type="hidden" name="sampulLama" value="<?= $komik["sampul"]; ?>">
        <div class="mb-3 row">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= (validation_show_error('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $komik['judul'] ?>">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              <?= validation_show_error('judul') ?>
            </div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= (old('penulis')) ? old('penulis') : $komik['penulis'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= (old('penerbit')) ? old('penerbit') : $komik['penerbit'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="sampul" name="sampul" value="<?= (old('sampul')) ? old('sampul') : $komik['sampul'] ?>">
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
              <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
            </div>
          </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Ubah Data</button>
        </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>