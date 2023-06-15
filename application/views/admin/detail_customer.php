<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Detail Customer</h1>
                  </div>
                  </nav>

                  <?php foreach ($detail as $dt) : ?>
                  <div class="card">
                        <div class="card-body">
                              <div class="row">
                  
                                    
                                    <div class="col-md-7">
                                          <table class="table table-hover table-border">
                                                <tr>
                                                      <td>Nama Customer :</td>
                                                      <td><?=$dt->nama_customer;?></td>
                                                </tr>
                                                <tr>
                                                      <td>Username :</td>
                                                      <td><?=$dt->username;?></td>
                                                </tr>
                                                <tr>
                                                      <td>Alamat :</td>
                                                      <td><?=$dt->alamat;?></td>
                                                </tr>
                                                <tr>
                                                      <td>Jenis Kelamin :</td>
                                                      <td><?=$dt->gender;?></td>
                                                </tr>
                                                <tr>
                                                      <td>No telepon :</td>
                                                      <td><?=$dt->no_telepon;?></td>
                                                </tr>
                                                <tr>
                                                      <td>No KTP :</td>
                                                      <td><?=$dt->no_ktp;?></td>
                                                </tr>
                                                <tr>
                                                      <td>Password :</td>
                                                      <td><?=$dt->password;?></td>
                                                </tr>
                                                
                                          </table>
                                          <a href="<?= base_url('admin/data_customer') ?>" class="btn btn-sm btn-primary ml-2">Kembali</a>
                                    </div> 
                              </div>
                        </div>
                  </div>
            <?php endforeach; ?>
      </div>