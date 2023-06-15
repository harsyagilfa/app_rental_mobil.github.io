<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Topbar Search -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <h1 class="h3 mb-0 text-gray-800 ">Data Customer</h1>
                  </div>
            </nav>
            <a href="<?= base_url('admin/data_customer/tambah_customer'); ?>" class="btn btn-primary mb-3 ml-2">Tambah Customer</a>
            <?php if ($this->session->flashdata('flash')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Customer Berhasil <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
            <?php endif; ?>
            <table class="table table-bordered table-striped table-hover">
                  <thead>
                        <tr>

                              <th>No</th>
                              <th>Nama Customer</th>
                              <th>No. Telepon</th>
                              <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($customer as $cs) : ?>
                              <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $cs->nama_customer ?></td>
                                    <td><?= $cs->no_telepon ?></td>
                                    <td>
                                          <a href="<?= base_url('admin/data_customer/detail_customer/'. $cs->id_customer); ?>"  class="btn btn-sm btn-success"><i class="fa fas fa-eye"></i></a>
                                          <a href="<?= base_url('admin/data_customer/update_customer/'. $cs->id_customer); ?>" class="btn btn-sm btn-info"><i class="fa fas fa-edit"></i></a>
                                          <a href="<?= base_url('admin/data_customer/delete_customer/'. $cs->id_customer); ?>" class="btn btn-sm btn-danger"><i class="fa fas fa-trash"></i></a>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </tbody>
            </table>
      </div>