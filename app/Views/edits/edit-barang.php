<!-- load main layout -->
<?= $this->extend('layouts/default2') ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Edit Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= site_url('barang') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Return</a>
        </div>
    </div>

    <div class="card p-3">
      <form action="<?= site_url('barang/update-barang'); ?>" method="POST" accept-charset="UTF-8" onsubmit="Button.disabled = true; return true;">
      <?= csrf_field() ?>
    <input type="hidden" name="id" value="<?= $barang['id'] ?>">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input class="form-control" required type="text" name="nama" value="<?= $barang['nama'] ?>" placeholder="Nama"/>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input class="form-control" required type="number" name="harga" value="<?= $barang['harga'] ?>" placeholder="500000"/>
    </div>
    <div class="form-group">
        <label for="kode">Kode</label>
        <input class="form-control" required type="text" name="kode" value="<?= $barang['kode'] ?>" placeholder="A031994"/>
    </div>
    <div class="form-group">
        <label for="jenis">Jenis</label>
        <input class="form-control" required type="text" name="jenis" value="<?= $barang['jenis'] ?>" placeholder="Meja"/>
    </div>
    <div class="text-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
        <button type="submit" class="btn btn-primary" name="registerButton"><i class="fa fa-check"></i> Save</button>
    </div>
</form>

    </div>

<?= $this->endSection() ?>