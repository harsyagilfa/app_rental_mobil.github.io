<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Data Transaksi</h1>
                  </div>
            </nav>
            <div class="table-responsive">
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
                              <th width="30px">Cek Pembayaran</th>
                              <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                              <tr>


                                    <td><?= $no++; ?></td>
                                    <td><?= $tr->nama_customer ?></td>
                                    <td><?= $tr->merk ?></td>
                                    <td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>
                                    <td>Rp. <?php if ($tr->tanggal_pengembalian > $tr->tanggal_kembali) { ?>
                                                <?= number_format($tr->total_denda, 0, ',', '.') ?>
                                          <?php } else {
                                                      echo "0";
                                                } ?>
                                    </td>
                                    <td><?= date('d-m-Y', strtotime($tr->tanggal_rental)); ?></td>
                                    <td><?= date('d-m-Y', strtotime($tr->tanggal_kembali)); ?></td>
                                    <td>
                                          <?php if ($tr->tanggal_pengembalian == "0000-00-00") {
                                                echo "-";
                                          } else {
                                                echo date('d-m-Y', strtotime($tr->tanggal_pengembalian));
                                          } ?>
                                    </td>
                                    <td> <?= $tr->status_rental; ?>
                                    <td><?= $tr->status_pengembalian; ?></td>
                                    </td>
                                    <td>
                                          <center>
                                                <?php if (empty($tr->bukti_pembayaran)) { ?>
                                                      <button class="btn btn-sm btn-danger"> <i class="fas fa-times-circle"></i> </button>
                                                <?php } else { ?>
                                                      <a href="<?= base_url('admin/transaksi/pembayaran/' . $tr->id_rental); ?>" class="btn btn-sm btn-success"> <i class="fas fa-check-circle"></i> </a>
                                                <?php } ?>
                                          </center>
                                    </td>
                                    <td>
                                          <?php if ($tr->status == "1") {
                                                echo '<button type="muted" class="btn btn-sm btn-secondary" ><i class="fas fa-ban"></i></button>';
                                          } else { ?>
                                                <a href="<?= base_url('admin/transaksi/transaksi_selesai/' . $tr->id_rental); ?>" class="btn btn-sm btn-primary"><i class="fas fa-check"></i></a>
                                          <?php } ?>
                                          <a href="<?= base_url('admin/transaksi/transaksi_batal/' . $tr->id_rental); ?>" class="btn btn-sm btn-danger"><i class="fa fas fa-times"></i></a>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </table>
                  </table>
            </div>

      </div>