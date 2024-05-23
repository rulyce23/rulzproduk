<?= $this->extend('layouts/default2') ?>

<?= $this->section('main') ?>

            <!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
        <h1 class="h2">Transaksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-outline-primary" href="<?= site_url('transaksi/create') ?>"><i class="fa fa-plus"></i> Buat Transaksi</a>
        </div>
    </div>

    <div class="card p-3">
        <div class="table-responsive">
            <table width="100%" class="table table-hover table-responsive" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Transaksi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Nama Customer</th>
                         <th scope="col">Nama Barang</th>
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
                            <td><?= $transaksi['nama_barang'] ?></td>
                            <td><?= $transaksi['qty'] ?></td>
                            <td><?= $transaksi['subtotal'] ?></td>
                            <td><?= $transaksi['diskon'] ?></td>
                            <td><?= $transaksi['ongkir'] ?></td>
                            <td><?= $transaksi['total_bayar'] ?></td>
                            <td class="text-right">
                                <!-- Add edit and delete buttons here -->
                                <a href="<?= site_url('transaksi/delete/' . $transaksi['id']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <!-- Grand total row -->
                <tfoot>
                    <tr>
                        <td colspan="8" class="text-right"><strong>Grand Total:</strong></td>
                        <td>
                            <?php
                            // Calculate grand total
                            $grandTotal = array_sum(array_column($data, 'total_bayar'));
                            echo $grandTotal;
                            ?>
                        </td>
                        <td></td> <!-- Empty cell for button column -->
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>
