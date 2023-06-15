<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Transaksi Selesai</h1>
                  </div>
            </nav>
            <div class="card">
                  <div class="card-body ml-3">
                        <div class="col-md-4">

                              <?php foreach ($transaksi as $tr) : ?>
                                    <form action="<?= base_url('admin/transaksi/transaksi_selesai_aksi'); ?>" method="post">
                                          <input type="hidden" name="id_rental" value="<?= $tr->id_rental; ?>">
                                          <input type="hidden" name="tanggal_kembali" value="<?= $tr->tanggal_kembali; ?>">
                                          <input type="hidden" name="denda" value="<?= $tr->denda; ?>">
                                          <div class="form-group">
                                                <label>Tanggal Pengembalian</label>
                                                <input type="date" name="tanggal_pengembalian" class="form-control" value="<?= $tr->tanggal_pengembalian; ?>">
                                          </div>
                                          <div class="form-group">
                                                <label for="">Status Pengembalian</label>
                                                <select name="status_pengembalian" class="form-control">
                                                      <option value="<?= $tr->status_pengembalian; ?>"><?= $tr->status_pengembalian; ?></option>
                                                      <option value="kembali">Kembali</option>
                                                      <option value="belum_kembali">Belum Kembali</option>
                                                </select>
                                          </div>
                                          <div class="form-group">
                                                <label for="">Status Rental</label>
                                                <select name="status_rental" class="form-control">
                                                      <option value="<?= $tr->status_rental; ?>"><?= $tr->status_rental; ?></option>
                                                      <option value="selesai">Selesai</option>
                                                      <option value="belum_selesai">Belum Selesai</option>
                                                </select>
                                                <button type="submit" class="btn btn-success mt-2">Simpan</button>
                                          </div>
                                    </form>
                              <?php endforeach; ?>
                        </div>
                  </div>
            </div>
      </div>