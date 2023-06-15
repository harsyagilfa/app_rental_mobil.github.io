<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url('assets/assets_customer/'); ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5"> 
      <div class="overlay"></div>
      <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                  <div class="col-md-9 ftco-animate pb-5">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread">Car Details</h1>
                  </div>
            </div>
      </div>
</section>
<section class="ftco-section ftco-car-details">
      <?php foreach ($detail as $dt) : ?>
            <div class="container">
                  <div class="row justify-content-center">
                        <div class="col-md-12">
                              <div class="car-details">
                                    <div class="img rounded" style="background-image: url(<?= base_url('assets/upload/' . $dt->gambar); ?>);"></div>
                                    <div class="text text-center">
                                          <span class="subheading"><?= $dt->kode_type; ?></span>
                                          <h2><?= $dt->merk; ?></h2>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                              <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                          <div class="d-flex mb-3 align-items-center">
                                                <div class="text">
                                                      <h3 class="heading mb-0 pl-3">
                                                            No Plat
                                                            <span><?= $dt->no_plat; ?></span>
                                                      </h3>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                              <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                          <div class="d-flex mb-3 align-items-center">
                                                <div class="text">
                                                      <h3 class="heading mb-0 pl-3">
                                                            Warna
                                                            <span><?= $dt->warna; ?></span>
                                                      </h3>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                              <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                          <div class="d-flex mb-3 align-items-center">
                                                <div class="text">
                                                      <h3 class="heading mb-0 pl-3">
                                                            Tahun
                                                            <span><?= $dt->tahun; ?></span>
                                                      </h3>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                              <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                          <div class="d-flex mb-3 align-items-center">
                                                <div class="text">
                                                      <h3 class="heading mb-0 pl-3">
                                                            Status
                                                            <span><?php if ($dt->status == "1") {
                                                                        echo "<h6 class='text text-success'>Tersedia</h6>";
                                                                  } else {
                                                                        echo "<h6 class='text text-danger'>Tidak Tersedia</h6>";
                                                                  } ?></span>
                                                      </h3>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class="col-md d-flex align-self-stretch ftco-animate">
                              <div class="media block-6 services">
                                    <div class="media-body py-md-4">
                                          <div class="d-flex mb-3 align-items-center">
                                                <div class="text">
                                                      <a href="<?= base_url('customer/data_mobil'); ?>"  class="btn btn-sm btn-primary">Kembali Ke Menu</a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      <?php endforeach; ?>
</section>