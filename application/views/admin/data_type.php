<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Type Mobil</h1>
                  </div>
            </nav>
            <a href="<?= base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary ml-2 mb-3">Tambah Type</a>
            <?php if ($this->session->flashdata('flash')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Type Mobil Berhasil <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped table-hover">
                  <thead>
                        <tr>
                              <th width="50px">No</th>
                              <th>Kode Type</th>
                              <th>Nama Type</th>
                              <th width="180px">Aksi</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($type as $tp) : ?>
                              <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tp->kode_type ?></td>
                                    <td><?= $tp->nama_type ?></td>
                                    <td>
                                          <a href="<?= base_url('admin/data_type/update_type/').$tp->id_type ?>" class="btn btn-sm btn-info"><i class="fa fas fa-edit"></i></a>
                                          <a href="<?= base_url('admin/data_type/delete_type/').$tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fa fas fa-trash"></i></a>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </tbody>
            </table>
      </div>