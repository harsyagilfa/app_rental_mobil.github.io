<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Detail Customer</h1>
                  </div>
            </nav>
            <?php foreach ($transaksi as $tr) : ?>
                  <div class="card">
                        <div class="card-body">
                              <div class="row">
                                    <div class="col-md-6">
                                          <table class="table table-hover table-border">
                                                <tr>
                                                      <td class="font-weight-bold">Nama Customer :</td>
                                                      <td><?= $tr->nama_customer; ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">No Telepon</td>
                                                      <td><?= $tr->no_telepon; ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Nama Mobil :</td>
                                                      <td><?= $tr->merk; ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Harga Sewa</td>
                                                      <td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Denda</td>
                                                      <td>Rp.<?= number_format($tr->denda, 0, ',', '.') ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Tanggal Rental</td>
                                                      <td><?= date('d-m-Y', strtotime($tr->tanggal_rental)); ?></td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Tanggal Kembali</td>
                                                      <td><?= date('d-m-Y', strtotime($tr->tanggal_kembali)); ?></td>
                                                </tr>
                                                <tr>

                                                      <td class="font-weight-bold">Tanggal Pengembalian</td>
                                                      <td>
                                                            <?php if ($tr->tanggal_pengembalian == "0000-00-00") {
                                                                  echo "-";
                                                            } else {
                                                                  echo date('d-m-Y', strtotime($tr->tanggal_pengembalian));
                                                            } ?>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td class="font-weight-bold">Status Pengmbalian :</td>
                                                      <td><?php if ($tr->status == "1") {
                                                            echo "Kembali";
                                                      }else{
                                                            echo"Belum Kembali";
                                                      } ?></td>
                                                </tr>

                                          </table>
                                          <a href="<?= base_url('admin/transaksi'); ?>" class="btn btn-primary ml-2">Kembali</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            <?php endforeach; ?>
      </div>