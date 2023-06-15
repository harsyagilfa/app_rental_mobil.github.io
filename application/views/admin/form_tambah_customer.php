<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Form Tambah Customer</h1>
                  </div>
            </nav>
            <div class="card">
                  <div class="card-body">
                              <form action="<?= base_url('admin/data_customer/tambah_customer_aksi'); ?>" method="post">
                              <div class="row">
                                    <div class="col-md-6">
                                          <div class="form-group">
                                                <label>Nama Customer</label>
                                                <input type="text" name="nama_customer" class="form-control">
                                                <?= form_error('nama_customer', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control">
                                                <?= form_error('username', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control">
                                                <?= form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <div class="form-group">
                                                <label>gender</label>
                                                <select name="gender" name="gender" class="form-control" >
                                                      <option value="">--Pilih Jenis Kelamin--</option>
                                                      <option value="Laki-laki">Laki-laki</option>
                                                      <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <?= form_error('gender', '<div class="text-small text-danger">','</div>'); ?>
                                          </div>
                                          <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="number" name="no_telepon" class="form-control">
                                                <?= form_error('no_telepon', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <div class="form-group">
                                                <label>No KTP</label>
                                                <input type="number" name="no_ktp" class="form-control">
                                                <?= form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control">
                                                <?= form_error('password', '<div class="text-small text-danger">','</div>') ?>
                                          </div>
                                          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                                          <button type="reset" class="btn btn-sm btn-success">Reset</button>
                                    </div>
                              </div>
                        </div>
                  </div>

            </form>
      </div>