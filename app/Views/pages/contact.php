<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h2>Contact Us</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">tipe</th>
            <th scope="col">alamat</th>
            <th scope="col">kota</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 ?>
          <?php foreach($alamat as $a) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $a['tipe']; ?></td>
              <td><?= $a['alamat']; ?></td>
              <td><?= $a['kota']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>