<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Form Update Data Mobil</h1>
                  </div>

            </nav>
            <div class="card">
                  <div class="card-body">
                        <?php foreach ($mobil as $mb) : ?>

                              <form action="<?= base_url('admin/data_mobil/update_mobil_aksi'); ?>" enctype="multipart/form-data" method="post">
                                    <div class="row">
                                          <div class="col-md-6">
                                                <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil ?>">
                                                <div class="form-group">
                                                      <label for="">Type Mobil</label>
                                                      <select name="kode_type" id="" class="form-control">
                                                            <option value="<?= $mb->kode_type ?>"><?= $mb->nama_type ?></option>
                                                            <?php foreach ($type as $tp) : ?>
                                                                  <option value="<?= $tp->kode_type; ?>"><?= $tp->nama_type; ?></option>
                                                            <?php endforeach; ?>
                                                      </select>
                                                      <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Merk</label>
                                                      <input type="text" name="merk" class="form-control" value="<?= $mb->merk ?>">
                                                      <?= form_error('merk', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">No Plat</label>
                                                      <input type="text" name="no_plat" class="form-control" value="<?= $mb->no_plat ?>">
                                                      <?= form_error('no_plat', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Warna</label>
                                                      <input type="text" name="warna" class="form-control" value="<?= $mb->warna ?>">
                                                      <?= form_error('warna', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                          </div>
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                      <label for="">Tahun</label>
                                                      <input type="text" name="tahun" class="form-control" value="<?= $mb->tahun ?>">
                                                      <?= form_error('tahun', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Harga Sewa</label>
                                                      <input type="text" name="harga" class="form-control" value="<?= $mb->harga ?>">
                                                      <?= form_error('harga', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Denda</label>
                                                      <input type="text" name="denda" class="form-control" value="<?= $mb->denda ?>">
                                                      <?= form_error('denda', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Status</label>
                                                      <select name="status" id="" class="form-control">
                                                            <option <?php if ($mb->status == 1) {
                                                                              echo "selected='selected'";
                                                                        }
                                                                        echo $mb->status ?> value="1">Tersedia</option>
                                                            <option <?php if ($mb->status == 0) {
                                                                              echo "selected='selected'";
                                                                        }
                                                                        echo $mb->status ?> value="0">tidak Tersedia</option>
                                                      </select>
                                                      <?= form_error('status', '<div class="text-small text-danger">', '</div>'); ?>
                                                </div>
                                                <div class="form-group">
                                                      <label for="">Gambar</label>
                                                      <input type="file" name="gambar" class="form-control">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                                <button type="submit" class="btn btn-danger mt-4">Reset</button>
                                          </div>
                                    </div>
                              </form>
                        <?php endforeach; ?>
                  </div>
            </div>
      </div>