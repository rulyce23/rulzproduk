<!-- Load main layout with datatable -->
<?= $this->extend('layouts/default-table') ?>

<!-- Load modals -->
<?= $this->section('modals') ?>
<?= $this->endSection() ?>

<!-- Load main content -->
<?= $this->section('main') ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Transaksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <a class="btn btn-outline-primary" href="<?= site_url('transaksi/create/')?>"><i class="fas fa-plus"></i> Buat Transaksi</a>
        </div>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Transaksi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Jumlah Barang</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Ongkir</th>
                        <th scope="col">Total Bayar</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $key => $transaksi): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $transaksi['kode'] ?></td>
                            <td><?= $transaksi['tgl'] ?></td>
                            <td><?= $transaksi['nama'] ?></td>
                            <td><?= $transaksi['qty'] ?></td>
                            <td><?= $transaksi['subtotal'] ?></td>
                            <td><?= $transaksi['diskon'] ?></td>
                            <td><?= $transaksi['ongkir'] ?></td>
                            <td><?= $transaksi['total_bayar'] ?></td>
                            <td class="text-right">
                                <!-- Add edit and delete buttons here if needed -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>
