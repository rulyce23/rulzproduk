<div class="modal fade" id="createbarangformmodal" tabindex="-1" role="dialog" aria-labelledby="createbarangformmodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createbarangformmodaltitle">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('barang/create-barang'); ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group row">
                <div class="col">
                    <label for="nama">Nama</label>
                    <input class="form-control" required type="text" name="nama" value="<?= old('nama') ?>" placeholder="Nama"/>
                </div>
                <div class="col">
                    <label for="harga">Harga</label>
                    <input class="form-control" required type="number" name="harga" value="<?= old('harga') ?>" placeholder="500000"/>
                </div>
            </div>

            <div class="form-group">
                <label for="kode">Kode</label>
                <input class="form-control" required type="text" name="kode" value="<?= old('kode') ?>" placeholder="A031994"/>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input class="form-control" required type="text" name="jenis" value="<?= old('jenis') ?>" placeholder="Meja"/>
            </div>

            <div class="text-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="registerButton"><i class="fas fa-plus-circle"></i>Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>