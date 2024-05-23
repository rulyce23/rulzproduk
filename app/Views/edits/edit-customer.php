<!-- load main layout -->
<?= $this->extend('layouts/default2') ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Edit Customer</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="<?= site_url('customer') ?>" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Return</a>
        </div>
    </div>

    <div class="card p-3">
        <form action="<?= site_url('customer/update-customer'); ?>" method="POST" accept-charset="UTF-8" onsubmit="Button.disabled = true; return true;">
        <?= csrf_field() ?>
            <div class="form-group row">
              <div class="col">
                    <label for="kode">Kode</label>
                    <input class="form-control" required type="text" name="kode" value="<?= $customer['kode'] ?>" placeholder="Kode"/>
                </div>
                <div class="col">
                    <label for="nama">Nama</label>
                    <input class="form-control" required type="text" name="nama" value="<?= $customer['nama']  ?>" placeholder="Nama"/>
                </div>
                <div class="col">
                    <label for="nik">NIK</label>
                    <input class="form-control" required type="number" name="nik" value="<?= $customer['nik']  ?>" placeholder="320409xxxxxx"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Telepon</label>
                <input class="form-control" required type="number" name="telepon" value="<?= $customer['telepon']  ?>" placeholder="095185582"/>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" required type="date" name="tgl_lahir" value="<?= $customer['tgl_lahir'] ?>" placeholder="09/09/1999"/>
            </div>
            <div class="form-group">
    <label for="goldar">Goldar</label>
    <select name="goldar" id="goldar" class="form-control">
        <?php
        $bloodTypes = ['O', 'AB', 'B', 'A'];
        $selectedType = $customer['goldar'] ?? null; // Default to null if not set

        foreach ($bloodTypes as $type) {
            $isSelected = ($selectedType === $type) ? 'selected' : '';
            echo "<option value=\"$type\" $isSelected>$type</option>";
        }
        ?>
    </select>
</div>

            <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                <?php
        $jkTypes = ['Laki-laki', 'Perempuan'];
        $selectedType = $customer['jk'] ?? null; // Default to null if not set

        foreach ($jkTypes as $type) {
            $isSelected = ($selectedType === $type) ? 'selected' : '';
            echo "<option value=\"$type\" $isSelected>$type</option>";
        }
        ?>
             </select>
            </div>
            <div class="text-right">
            <input name="id" type="hidden" value="<?= $customer['id'] ?>" readonly/>
             <button type="submit" class="btn btn-primary" name="Button"><i class="fa fa-check"></i> Update</button>
            </div>
        </form>
    </div>

<?= $this->endSection() ?>