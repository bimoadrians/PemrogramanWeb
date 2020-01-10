    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-10">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="assets\img\sibarinum.png" alt="Sibarinum" style="width:700px">
                                        <h1 class="h4 text-gray-700 mb-3">Masukkan Nomor Pelanggan</h1>
                                    </div>
                                    <form action="<?php echo base_url('tagihan') ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="noPelanggan" name="noPelanggan" placeholder="Masukkan nomor pelanggan...">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Cek Tagihan
                                        </button>
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration') ?>">Daftar Sekarang!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>