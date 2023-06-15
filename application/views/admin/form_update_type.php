<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Form update type mobil</h1>
                  </div>
            </nav>
            <div class="card">
                  <div class="card-body">
                        <?php foreach ($type as $tp) : ?>
                              <form action="<?= base_url('admin/data_type/update_type_aksi'); ?>" method="post">
                                    <div class="row">
                                          <div class="col-md-5">
                                                <input type="hidden" name="id_type" value="<?= $tp->id_type ?>">
                                                <div class="form-group">
                                                      <label for="">Kode Type</label>
                                                      <input type="text" name="kode_type" class="form-control" value="<?= $tp->kode_type ?>">
                                                      <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>'); ?>

                                                </div>
                                                <div class="form-group">
                                                      <label for="">Nama Type</label>
                                                      <input type="text" name="nama_type" class="form-control" value="<?= $tp->nama_type ?>">
                                                      <?= form_error('nama_type', '<div class="text-small text-danger">', '</div>'); ?>

                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                          </div>
                                          <div class="col-md-6">

                                          </div>
                                    </div>
                              </form>
                        <?php endforeach; ?>
                  </div>
            </div>


      </div>