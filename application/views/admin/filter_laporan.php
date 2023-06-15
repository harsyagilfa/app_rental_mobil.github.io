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
                                    <button type="submit" class="btn btn-primary"> <i class="fas fa-eye" ></i> Tampilkan Data</button>
                              </form>
                        </div>
                  </div>
            </div>
      </div>