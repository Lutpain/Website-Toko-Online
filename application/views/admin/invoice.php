<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
            
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?= $inv->id ?></td>
            <td><?= $inv->nama ?></td>
            <td><?= $inv->alamat ?></td>
            <td><?= $inv->tgl_pesan ?></td>
            <td><?= $inv->batas_bayar ?></td> 
            <td><?= anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>'); ?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</td>