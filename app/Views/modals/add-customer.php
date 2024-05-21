<div class="modal fade" id="createcustomerformmodal" tabindex="-1" role="dialog" aria-labelledby="createcustomerformmodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createcustomerformmodaltitle">Tambah Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('customer/create-customer'); ?>" method="POST" accept-charset="UTF-8" onsubmit="registerButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group row">
            <div class="col">
                    <label for="kode">Kode</label>
                    <input class="form-control" required type="text" name="kode" value="<?= old('kode') ?>" placeholder="A0391"/>
                </div>
                <div class="col">
                    <label for="nama">Nama</label>
                    <input class="form-control" required type="text" name="nama" value="<?= old('nama') ?>" maxlength="100" placeholder="Nama"/>
                </div>
                <div class="col">
                    <label for="nik">NIK</label>
                    <input class="form-control" required type="number" name="nik" value="<?= old('nik') ?>" maxlength="16" placeholder="320409xxxxxx"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Telepon</label>
                <input class="form-control" required type="number" name="telepon" maxlength="14" value="<?= old('telepon') ?>" placeholder="095185582"/>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input class="form-control" required type="date" name="tgl_lahir" value="<?= old('tgl_lahir') ?>" placeholder="09/09/1999"/>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
             <textarea name="alamat" id="alamat" class="form-control"></textarea>
                </div>
            <div class="form-group">
                <label for="goldar">Goldar</label>
                <select name="goldar" id="goldar" class="form-control">
                              <option value="O">O</option>
                              <option value="A">A</option>
                              <option value="AB">AB</option>
                              <option value="B">B</option>
             </select>
            </div>
            <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control">
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
             </select>
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

<script>
    // Fungsi untuk membatasi input sesuai maxlength
    document.querySelectorAll('input[maxlength]').forEach(input => {
        input.addEventListener('input', event => {
            const maxLength = input.getAttribute('maxlength');
            if (input.value.length > maxLength) {
                input.value = input.value.slice(0, maxLength);
            }
        });
    });

    // Untuk textarea
    document.querySelectorAll('textarea[maxlength]').forEach(textarea => {
        textarea.addEventListener('input', event => {
            const maxLength = textarea.getAttribute('maxlength');
            if (textarea.value.length > maxLength) {
                textarea.value = textarea.value.slice(0, maxLength);
            }
        });
    });
</script>