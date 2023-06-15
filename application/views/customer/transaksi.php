<div class="hero-wrap ftco-degree-bg" style="background-image: url('<?= base_url('assets/assets_customer/'); ?>images/transaksi.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                  <div class="col-lg-8 ftco-animate">
                        <div class="text w-100 text-center mb-md-5 pb-md-5">
                              <h1 class="mb-4">Transaksi Penyewaan Mobil</h1>
                              <p style="font-size: 18px;">Silahkan Melakukan transaksi disini</p>
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="container">
      <div class="card mx-auto" style="margin-top: 180px;">
            <div class="card-header">
                  Data Transaksi Anda
            </div>
            <div class="card-body">
                  <?= $this->session->flashdata('flash'); ?>
                  <table class="table table-bordered table-striped">
                        <tr>
                              <th width="50px">No</th>
                              <th>Nama Customer</th>
                              <th>Merk Mobil</th>
                              <th>No Plat</th>
                              <th>Harga Sewa</th>
                              <th>Action</th>
                              <th>Status</th>

                        </tr>

                        <?php $no = 1; ?>
                        <?php foreach ($transaksi as $tr) : ?>
                              <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $tr->nama_customer ?></td>
                                    <td><?= $tr->merk ?></td>
                                    <td><?= $tr->no_plat ?></td>
                                    <td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>
                                    <td>
                                          <?php if ($tr->status_rental == "selesai") { ?>
                                                <button class="btn btn-sm btn-primary">Rental Selesai</button>
                                          <?php } else { ?>
                                                <a href="<?= base_url('customer/transaksi/pembayaran/' . $tr->id_rental); ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                          <?php } ?>
                                    </td>
                                    <td><?php if ($tr->status_rental == 'belum Selesai') { ?>
                                                <a onclick=" return confirm('Apakah anda mau membatalkan transaksi ini?')" href="<?= base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental); ?>" class="btn btn-danger ml-3">Batal</a>
                                          <?php } else { ?>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                      Batal
                                                </button>
                                          <?php } ?>
                                    </td>
                              </tr>
                        <?php endforeach; ?>
                  </table>
            </div>
      </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf,Transaksi ini sudah tidak bisa dibatalkan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>