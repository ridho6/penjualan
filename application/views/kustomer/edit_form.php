<main>
  <div class="container-fluid">
    <h1 class="mt-4"></h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active"><a href="<?php echo site_url('kustomer') ?>">Kustomer</a></li>
      <li class="breadcrumb-item active"><?php echo $title ?></li>
    </ol>
    <div class="card mb-4">
      <div class="card-body">
        <form action="<?php echo site_url('kustomer/edit') ?>" method="post">
          <div class="mb-3">
            <label>Nik <code>*</code></label>
            <input class="form-control" type="hidden" name="id" value="<?= $kustomer->id; ?>" required />
            <input class="form-control" name="nik" value="<?= $kustomer->nik; ?>" type="text" placeholder="Nik">
          </div>
          <div class="mb-3">
            <label>Nama <code>*</code></label>
            <input class="form-control" name="name" value="<?= $kustomer->name; ?>" type="text" placeholder="Nama">
          </div>
          <div class="mb-3">
            <label>Alamat <code>*</code></label>
            <input class="form-control" name="alamat" value="<?= $kustomer->alamat; ?>" type="text" placeholder="Alamat">
          </div>
          <div class="mb-3">
            <label>Telp <code>*</code></label>
            <input class="form-control" name="telp" value="<?= $kustomer->telp; ?>" type="text" placeholder="Telp">
          </div>
          <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i> Update</button>
        </form>
      </div>
    </div>
    <div style="height: 100vh"></div>
  </div>
</main>