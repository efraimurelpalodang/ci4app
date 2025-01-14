<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2 class="my-3">Daftar Komik</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">sampul</th>
            <th scope="col">judul</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; ?>
          <?php foreach($komik as $k) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><img src="/img/<?= $k['sampul']; ?>" alt="gambarSampul" class="sampul"></td>
            <td><?= $k['judul']; ?></td>
            <td><a href="#" class="btn btn-success">Detail</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>