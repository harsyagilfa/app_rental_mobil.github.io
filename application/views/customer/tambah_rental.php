<div class="hero-wrap ftco-degree-bg" style="background-image: url('<?= base_url('assets/assets_customer/'); ?>images/image_6.jpg');" data-stellar-background-ratio="0.5">
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

<div class="container">
    <div class="card" style="margin-top: 200px; margin-bottom:50px;">
        <div class="card-header">
            Form Rental Mobil
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <form action="<?= base_url('customer/rental/tambah_rental_aksi'); ?>"  method="post">
                    <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil; ?>">
                   
                    <div class="form-group">
                        <label for="">Harga Sewa/Hari</label>
                        <input type="text" name="harga" class="form-control" value="<?= number_format($dt->harga, 0, ',', '.')  ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda/Hari</label>
                        <input type="text" name="denda" class="form-control" value="<?= number_format($dt->denda, 0, ',', '.')  ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>