<table style="width: 60%;">
      <h2>invoice Pembayaran Anda</h2>
      <?php foreach ($transaksi as $tr) : ?>
            <tr>
                  <td>Nama Customer</td>
                  <td>:</td>
                  <td><?= $tr->nama_customer; ?></td>
            </tr>
            <tr>
                  <td>Merk Mobil :</td>
                  <td>:</td>
                  <td><?= $tr->merk; ?></td>
            </tr>
            <tr>
                  <td>Tanggal rental</td>
                  <td>:</td>
                  <td><?= $tr->tanggal_rental; ?></td>
            </tr>
            <tr>
                  <td>Tanggal Kembali</td>
                  <td>:</td>
                  <td><?= $tr->tanggal_kembali; ?></td>

            </tr>
            <?php $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jmlhari = abs(($x - $y) / (60 * 60 * 24));
            ?>

            <tr>
                  <td>Jumlah Hari Sewa</td>
                  <td>:</td>
                  <td><?= $jmlhari; ?> Hari</td>

            </tr>
            <tr>
                  <td>Status Pembayaran</td>
                  <td>:</td>
                  <td><?php
                        if ($tr->status_pembayaran == "0") {
                              echo "Belum Lunas";
                        } else {
                              echo "lunas";
                        }
                        ?></td>
            </tr>
            <tr>
                  <td>Biaya Sewa/Hari</td>
                  <td>:</td>
                  <td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>
                  
            </tr>
            <tr style="font-weight: bold; color: red;">
                  <td>Jumlah Pembayaran</td>
                  <td>:</td>
                  <td> Rp.<?= number_format($tr->harga * $jmlhari, 0, ',', '.') ?></td>
            </tr>
            <tr>
                  <td>Rekening Pembayaran</td>
                  <td>:</td>
                  <td>
                        <ul>
                              <li>Mandiri 45335433</li>
                              <li>BCA 44535435</li>
                              <li>BNI 35354543</li>
                        </ul>
                  </td>
            </tr>

      <?php endforeach; ?>
</table>

<script type="text/javascript" >
      window.print();
</script>