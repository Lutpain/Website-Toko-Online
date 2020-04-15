<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                    <?php
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach ($keranjang as $items)
                        {
                            $grand_total = $grand_total + $items['subtotal'];
                        }

                        echo "<h5>Total belanja anda : Rp. ".number_format($grand_total, 0,',','.');
                    ?>
                </div><br><br>
                <h3>Input alamat pengiriman dan pembayaran</h3>

                <form method="post" action="<?= base_url('dashboard/proses_pesanan'); ?>" autocomplete="off">
                    
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Tulis nama lengkap anda.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Tulis alamat lengkap anda.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telp" placeholder="Tulis telepon anda.." class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>POS Indonesia</option>
                            <option>GOJEK</option>
                            <option>GRAB</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih BANK</label>
                        <select class="form-control">
                            <option>BCA - XXXXXX</option>
                            <option>BNI - XXXXXX</option>
                            <option>BRI - XXXXXX</option>
                            <option>MANDIRI - XXXXXX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                </form>
                
                <?php
                } else {
                    echo "<h5>Keranjang Belanja Anda Masih Kosong";
                }
                ?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>