<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Print Laporan</title>
</head>

<body>
      <h3 style="text-align: center;">Laporan Transaksi Rental Mobil</h3>
      <table>
            <tr>
                  <td>Dari Tanggal</td>
                  <td>:</td>
                  <td><?= date('d-M-Y', strtotime($_GET['dari'])); ?></td>
            </tr>
            <tr>
                  <td>Sampai Tanggal</td>
                  <td>:</td>
                  <td><?= date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
            </tr>
      </table>

      <table class="table">
            <tr>
                  <th>No.</th>
                  <th>Nama Customer</th>
                  <th>Nama Mobil</th>
                  <th>Harga Sewa</th>
                  <th width="50px">Denda Keterlambatan</th>
                  <th>Tanggal Rental</th>
                  <th>Tanggal Kembali</th>
                  <th width="50px">Tanggal Dikembalian</th>
                  <th>Status Rental</th>
                  <th width="30px">Status Kembali</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($laporan as $lp) : ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $lp->nama_customer ?></td>
                        <td><?= $lp->merk ?></td>
                        <td>Rp.<?= number_format($lp->harga, 0, ',', '.') ?></td>
                        <td>Rp. <?php if ($lp->tanggal_pengembalian > $lp->tanggal_kembali) { ?>
                                    <?= number_format($lp->total_denda, 0, ',', '.') ?>
                              <?php } else {
                                          echo "0";
                                    } ?>
                        </td>
                        <td><?= date('d-m-Y', strtotime($lp->tanggal_rental)); ?></td>
                        <td><?= date('d-m-Y', strtotime($lp->tanggal_kembali)); ?></td>
                        <td>
                              <?php if ($lp->tanggal_pengembalian == "0000-00-00") {
                                    echo "-";
                              } else {
                                    echo date('d-m-Y', strtotime($lp->tanggal_pengembalian));
                              } ?>
                        </td>
                        <td> <?= $lp->status_rental; ?></td>
                        <td><?= $lp->status_pengembalian; ?></td>
                  </tr>
            <?php endforeach; ?>
      </table>
</body>

</html>

<script type="text/javascript" >
      window.print();
</script>