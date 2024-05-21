<!-- load main layout -->
<?= $this->extend('layouts/default-table2') ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Edit Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= site_url('barang') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left"></i> Return</a>
        </div>
    </div>

    <div class="card p-3">
        <form action="<?= site_url('barang/update-barang'); ?>" method="POST" accept-charset="UTF-8" onsubmit="Button.disabled = true; return true;">
        <?= csrf_field() ?>
            <div class="form-group row">
                <div class="col">
                    <label for="nama">Nama</label>
                    <input class="form-control" required type="text" name="nama" value="<?= $barang['nama'] ?>"/>
                </div>
                <div class="col">
                    <label for="kode">Kode</label>
                    <input class="form-control" required type="text" name="kode" value="<?= $barang['kode'] ?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input class="form-control" required type="number" name="harga" value="<?= $barang['harga'] ?>"/>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input class="form-control" required type="text" name="jenis" value="<?= $barang['jenis'] ?>" />
            </div>
            
            <div class="text-right">
                <input name="id" type="hidden" value="<?= $barang['id'] ?>" readonly/>
                <button type="submit" class="btn btn-primary" name="Button"><i class="fas fa-check-circle"></i> Update</button>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>