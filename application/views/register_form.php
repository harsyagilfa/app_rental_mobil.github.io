<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <img src="<?= base_url('assets/upload/camry.jpg'); ?>"  class="col-lg-7 d-none d-lg-block ">
                    <div class="col-lg-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h2 class="font-weight-bold mb-4"><Ri:a>Buat Akun</Ri:a></h2>
                            </div>
                            <form action="<?= base_url('register'); ?>"  class="user" method="post" >
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nama_customer"
                                            placeholder="nama_customer">
                                            <?= form_error('nama_customer', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username"
                                            placeholder="username">
                                            <?= form_error('username', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat"
                                        placeholder="alamat">
                                        <?= form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                   <select name="gender" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                   </select>
                                   <?= form_error('gender', '<div class="text-small text-danger">','</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="no_telepon"
                                        placeholder="No Telepon">
                                        <?= form_error('no_telepon', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="no_ktp"
                                        placeholder="No Ktp">
                                        <?= form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="Password">
                                            <?= form_error('password', '<div class="text-small text-danger">','</div>') ?>
                                </div>
                                
                                <button type="Submit" class="btn btn-success mt-3">Register</button>
                                <button type="reset" class="btn btn-warning mt-3 ml-2">Reset</button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login') ?>" >Sudah memiliki akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>