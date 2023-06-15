    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?= base_url('assets/assets_customer/'); ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                      <div class="col-md-9 ftco-animate pb-5">
                            <h1 class="mb-3 bread">Daftar Mobil</h1>
                      </div>
                </div>
          </div>
    </section>
    <section class="ftco-section bg-light">
          <div class="container">
            <?=$this->session->flashdata('flash'); ?>
                <div class="row">
                      <?php foreach ($mobil as $mb) : ?>
                            <div class="col-md-4">
                                  <div class="car-wrap rounded ftco-animate">
                                        <div class="img rounded d-flex align-items-end" style="background-image: url(<?= base_url('assets/upload/' . $mb->gambar); ?>);">
                                        </div>
                                        <div class="text">
                                              <h2 class="mb-0"><?= $mb->merk; ?></h2>
                                              <div class="d-flex mb-3">
                                                    <span class="cat"><?= $mb->kode_type; ?></span>
                                                    <p class="price ml-auto">Rp. <?= number_format($mb->harga, 0, ',', '.')  ?><span>/Hari</span></p>
                                              </div>
                                              
                                              <p class="d-flex mb-0 d-block">
                                              <?php if ($mb->status == "0") {
                                                      echo "<span class=' btn btn-danger mr-5' disable >Kosong</span>";
                                                }else{
                                                      echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil,'<button class="btn btn-primary">Sewa Mobil</button>');
                                                } ?>
                                                   
                                                    <a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil); ?>" class="btn btn-secondary py-2">Details</a>
                                              </p>
                                        </div>
                                  </div>
                            </div>
                      <?php endforeach; ?>
                </div>
          </div>
    </section>