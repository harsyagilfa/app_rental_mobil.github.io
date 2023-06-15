<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 "> Laporan Transaksi</h1>
                  </div>
            </nav>
            <div class="card">
                  <div class="card-body">
                        <div class="col-md-4">

                              <form action="<?= base_url('admin/laporan'); ?>" method="post">
                                    <div class="form-group">
                                          <label for="">Dari Tanggal</label>
                                          <input type="date" name="dari" class="form-control">
                                          <?= form_error('dari', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                          <label for="">Sampai Tanggal</label>
                                          <input type="date" name="sampai" class="form-control">
                                          <?= form_error('sampai', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-eye"></i> Tampilkan Data</button>
                              </form>
                              <hr>
                              <div class="btn-group">
                                    <a href="<?= base_url('admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai')); ?>" class="btn btn-sm btn-success" target="_blank"> <i class="fas fa-print" ></i> Print</a>
                              </div>
                        </div>
                        <div class="table-responsive ml-3 mt-3">
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
                        </div>
                  </div>
            </div>
      </div>