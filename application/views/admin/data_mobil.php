<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 font-weight-bolder ">Data Mobil</h1>
                  </div>
            </nav>
            <a href="<?= base_url('admin/data_mobil/tambah_mobil'); ?>" class="btn btn-primary mb-3 ml-2">Tambah Data</a>
            <?php if ($this->session->flashdata('flash')) : ?>

                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mobil Berhasil <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>

            <?php endif; ?>
            <table class="table table-hover table-striped table-borderd">
                  <thead>
                        <tr>
                              <th>No</th>
                              <th>Gambar</th>
                              <th>Type</th>
                              <th>Merk</th>
                              <th>No Plat</th>
                              <th>Tahun</th>
                              <th>Harga Sewa</th>
                              <th>Denda</th>
                              <th>Status</th>
                              <th>Aksi</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php $no = 1;
                        foreach ($mobil as $mb) : ?>
                              <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                          <img width="60px" src="<?= base_url().'assets/upload/'.$mb->gambar ?>">
                                    </td>
                                    <td><?= $mb->kode_type; ?></td>
                                    <td><?= $mb->merk; ?></td>
                                    <td><?= $mb->no_plat; ?></td>
                                    <td><?= $mb->tahun; ?></td>
                                    <td>Rp. <?= number_format($mb->harga, 0, ',', '.')  ?></td>
                                    <td>Rp. <?= number_format($mb->denda, 0, ',', '.')  ?></td>
                                    <td><?php
                                          if ($mb->status == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                          } else {
                                                echo "<span class='badge badge-success'>Tersedia</span>";
                                          } ?></td>
                                    <td>
                                          <a href="<?= base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil ?> " class="btn btn-sm btn-success"><i class="fa fas fa-eye"></i></a>
                                          <a href="<?= base_url('admin/data_mobil/update_mobil/').$mb->id_mobil ?> " class="btn btn-sm btn-info"><i class="fa fas fa-edit"></i></a>
                                          <a href="<?= base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil ?> " class="btn btn-sm btn-danger"><i class="fa fas fa-trash"></i></a>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </tbody>
            </table>
      </div>