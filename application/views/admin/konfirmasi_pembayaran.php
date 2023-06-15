<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Konfirmasi Pembayaran</h1>
                  </div>
            </nav>
            <center class="card" style="width: 55%;">
                  <div class="card-header">
                        Konfirmasi Pembayaran
                  </div>
                  <div class="card-body">
                        <form action="<?= base_url('admin/transaksi/cek_pembayaran'); ?>" method="post">
                              <?php foreach ($pembayaran as $pmb) : ?>
                                    <a href="<?= base_url('admin/transaksi/download_pembayaran/' . $pmb->id_rental); ?>" class="btn btn-sm btn-success"> <i class="fas fa-download"></i> Download Bukti Pembayaran </a>

                                    <div class="custom-control custom-switch mt-3">
                                          <input type="hidden" class="custom-control-input" value="<?=$pmb->id_rental; ?>"  name="id_rental">
                                          <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                                          <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                              <?php endforeach; ?>
                        </form>
                  </div>
            </center>
      </div>