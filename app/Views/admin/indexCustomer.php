<!-- load main layout with datatable -->
<?= $this->extend('layouts/default-table') ?>

<!-- load modals -->
<?= $this->section('modals') ?>

    <!-- create user modal form -->
    <?= view('App\Views\modals\add-customer') ?>

<?= $this->endSection() ?>

<!-- load main content -->
<?= $this->section('main') ?>
 
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Customer</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#createcustomerformmodal"><i class="fa fa-plus"></i> Tambah Customer</button>
        </div>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $item):?>
                    <tr>
                        <td><?= $item['kode'] ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['nik'] ?></td>
                        <td><?= $item['telepon'] ?></td>
                        <td><?= $item['alamat'] ?></td>
                        <td><?= $item['jk'] ?></td>
                      
                        <td class="text-right">
                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('customer/edit/').$item['id'] ?>"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-outline-secondary btn-sm" href="<?= site_url('customer/delete/').$item['id'] ?>"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
<br><br><br><br><br><br><br><br><br>
<?= $this->endSection() ?>