<!-- load main layout with datatable -->
<?= $this->extend('layouts/default-table') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    <!-- create user modal form -->
    <?= view('App\Views\modals\add-barang') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Barang</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createbarangformmodal"><i class="fa fa-plus"></i> Tambah Barang</button>
        </div>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jenis</th>
                       
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['kode'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['harga'] ?></td>
                        <td><?= $item['jenis'] ?></td>
                       
                        <td class="text-right">
                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('barang/edit/').$item['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('barang/delete/').$item['id'] ?>"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br>
<?= $this->endSection() ?>