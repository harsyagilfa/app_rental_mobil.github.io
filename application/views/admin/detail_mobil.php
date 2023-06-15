<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bolder ">Detail Mobil</h1>
                  </div>
            </nav> 

            <?php foreach ($detail as $dt) : ?>
                  <div class="card">
                        <div class="card-body">
                              <div class="row">
                                    <div class="col-md-5">
                                          <img src="<?= base_url('assets/upload/' . $dt->gambar); ?>" alt="" width="600px">
                                    </div>
                                    
                                    <div class="col-md-7">
                                          <table class="table table-hover table-border">
                                                <tr>
                                                      <td>Type Mobil</td>
                                                      <td>
                                                      <?php if ($dt->kode_type == "SDN") {
                                                            echo "Sedan";
                                                      }elseif($dt->kode_type == "SUV") {
                                                            echo"Sport Utility Vehicle";
                                                      }elseif($dt->kode_type == "MPV"){
                                                            echo "Multi Purpose Vehicle";
                                                      }else {
                                                            echo "<span class='text-danger'>Tipe mobil belum Terdaftar</span>";
                                                      } ?>
                                                      </td>
                                                </tr>
                                                <tr>
                                                      <td>Merk</td>
                                                      <td><?=$dt->merk; ?></td>
                                                </tr>
                                                <tr>
                                                      <td>No Plat</td>
                                                      <td><?=$dt->no_plat; ?></td>
                                                </tr>
                                                      <td>Warna</td>
                                                      <td><?=$dt->warna; ?></td>
                                                </tr>
                                                </tr>
                                                      <td>tahun</td>
                                                      <td><?=$dt->tahun; ?></td>
                                                </tr>
                                                </tr>
                                                      <td>Status</td>
                                                      <td><?php if ($dt->status == "0") {
                                                            echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                                      }else {
                                                            echo "<span class='badge badge-success'>Tersedia</span>";
                                                      } ?></td>
                                                </tr>
                                          </table>
                                          <a href="<?= base_url('admin/data_mobil') ?>" class="btn btn-sm btn-primary ml-2">Kembali</a>
                                          <a href="<?= base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>" class="btn btn-sm btn-warning ml-2">Update</a>
                                    </div> 
                              </div>
                        </div>
                  </div>
            <?php endforeach; ?>
      </div>