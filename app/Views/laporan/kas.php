<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>
<div class="container-fluid">

  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="table-dark">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
        </tr>
      </thead>
      <tbody>
        <th scope="row">1</th>
        <td></td>
        <td></td>
        <td></td>
      </tbody>
    </table>
  </div>

</div>

<?= $this->endSection(); ?>