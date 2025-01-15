<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Daftar Komik</h2>
      <div class="d-flex gap-2 row">
        <?php foreach($komik as $k) : ?>
        <div class="card">
          <img src="/img/<?= $k["sampul"]; ?>" class="card-img-top sampul" alt="sampul col-sm-3">
          <div class="card-body">
            <h5 class="card-title"><?= $k["judul"]; ?></h5>
            <p class="card-text"><?= $k["penulis"]; ?></p>
            <a href="/komik/<?= $k["slug"]; ?>" class="btn btn-primary">Detail</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>