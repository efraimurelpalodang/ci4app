<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <a href="create" class="btn btn-secondary">Tambah Data Komik</a>
  <h2 class="my-3">Daftar Komik</h2>
  <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif; ?>
  <div class="d-flex gap-3 row mb-5">
    <?php foreach( $komik as $k ) : ?>
      <div class="card kartu position-relative col-sm-2">
        <a href="komik/<?= $k['slug']; ?>">
          <img src="/img/<?= $k['sampul']; ?>" alt="sampul"  class="card-img gambar">
          <div class="card-img-overlay overflow-hidden">
            <h5 class="card-title judul text-uppercase"><?= $k['judul']; ?></h5>
            <p class="card-text penulis"><small>Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?= $this->endSection(); ?>