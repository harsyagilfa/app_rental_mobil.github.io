<div class="hero-wrap ftco-degree-bg" style="background-image: url('<?= base_url('assets/assets_customer/'); ?>images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                  <div class="col-lg-8 ftco-animate">
                        <div class="text w-100 text-center mb-md-5 pb-md-5">
                              <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                              <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                              <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                          <span class="ion-ios-play"></span>
                                    </div>
                                    <div class="heading-title ml-5">
                                          <span>Easy steps for renting a car</span>
                                    </div>
                              </a>
                        </div>
                  </div>
            </div>
      </div>
</div>

<div class="container mt-5 mb-5">
      <div class="row">
            <div class="col-md-9">
                  <div class="card mx-auto" style="margin-top: 150px">
                        <div class="card-header alert alert-success">
                              Invoice Pembayaran Anda
                        </div>
                        <div class="card-body">
                              <table class="table">
                                    <?php foreach ($transaksi as $tr) : ?>
                                          <tr>
                                                <th>Merk Mobil :</th>
                                                <td><?= $tr->merk; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tanggal rental</th>
                                                <td><?= $tr->tanggal_rental; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tanggal Kembali</th>
                                                <td><?= $tr->tanggal_kembali; ?></td>

                                          </tr>
                                          <?php $x = strtotime($tr->tanggal_kembali);
                                          $y = strtotime($tr->tanggal_rental);
                                          $jmlhari = abs(($x - $y) / (60 * 60 * 24));
                                          $total_harga =$tr->harga *$jmlhari;
                                          ?>

                                          <tr>
                                                <th>Jumlah Hari Sewa</th>
                                                <td><?= $jmlhari; ?> Hari</td>

                                          </tr>
                                          <tr>
                                                <th>Biaya Sewa/Hari</th>
                                                <td>Rp.<?= number_format($tr->harga, 0, ',', '.') ?></td>

                                          </tr>
                                          <tr class="text-success">
                                                <th>Jumlah Pembayaran</th>
                                                <td> <button class="btn-btn sm btn-success">Rp.<?= number_format($total_harga, 0, ',', '.') ?></button></td>
                                          </tr>
                                          <tr>
                                                <td></td>
                                                <td>
                                                      <a href="<?= base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental); ?>"  class="btn btn-primary">Print Invoice</a>
                                                </td>

                                          </tr>
                                    <?php endforeach; ?>
                              </table>
                        </div>
                  </div>
            </div>

            <div class="col-md-3">
                  <div class="card-header alert alert-primary" style="margin-top: 150px">
                        Informasi Pembayaran
                  </div>
                  <div class="card">

                        <div class="card-body ">
                              <p class="text-success">Silahkan Melakukan Pembayaran Melalui Nomor Rekeninng di bawah ini</p>
                              <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Mandiri 45335433</li>
                                    <li class="list-group-item">BCA 44535435</li>
                                    <li class="list-group-item">BNI 35354543</li>
                              </ul>
                              <?php if (empty($tr->bukti_pembayaran)) { ?>
                                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                          Upload Bukti Pembayaran
                                    </button>
                              <?php } elseif ($tr->status_pembayaran == '0') { ?>

                                    <button class="btn btn-sm btn-danger"><i class="fa fa-clock-o"></i> Menunggu Konfirmasi</button>

                              <?php } elseif ($tr->status_pembayaran == '1') { ?>
                                    <button class="btn btn-sm btn-success"><i class="fas fa-check"></i> Pembayaran Selesai</button>
                              <?php } ?>

                        </div>
                  </div>
            </div>
      </div>
</div>

<!-- Button trigger modal -->


<!-- Modal upload bukti pembayarn -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <form action="<?= base_url('customer/transaksi/pembayaran_aksi'); ?>"  method="post" enctype="multipart/form-data"> 
                        <div class="modal-body">
                              <input type="hidden" name="id_rental" value="<?=$tr->id_rental; ?>"  class="form-control">
                              <div class="form-group">
                                    <label for="">Upload Bukti Pembayaran</label>
                                    <input type="file" name="bukti_pembayaran" class="form-control">
                              </div>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-sm btn-primary">Kirim</button>
                        </div>
                  </form>
            </div>
      </div>
</div>