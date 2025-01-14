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
          <tr>
            <th scope="row">1</th>
            <td><img src="" alt=""></td>
            <td>Naruto</td>
            <td><a href="#" class="btn btn-success">Detail</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>