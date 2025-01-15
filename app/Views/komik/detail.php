<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="sampul">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $komik['judul']; ?></h5>
              <p class="card-text"><?= $komik['deskripsi']; ?></p>
              <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
              <p class="card-text"><strong>Penerbit : </strong><small class="text-body-secondary"><?= $komik['penerbit']; ?></small></p>

              <a href="#" class="btn btn-secondary">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
              <br>
              <a href="/komik">Kembali kedaftar komik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>