<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <h2 class="my-3">Daftar Komik</h2>
  <div class="d-flex gap-3">
    <?php foreach( $komik as $k ) : ?>
      <div class="card kartu position-relative">
        <a href="komik/<?= $k['slug']; ?>">
          <img src="/img/<?= $k['sampul']; ?>" alt="sampul"  class="card-img gambar">
          <div class="card-img-overlay">
            <h5 class="card-title judul"><?= $k['judul']; ?></h5>
            <p class="card-text penulis"><small>Last updated 3 mins ago</small></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?= $this->endSection(); ?>