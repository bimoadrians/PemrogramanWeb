<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hitung Tagihan</title>
    <link rel="icon" href="assets/img/ico.png" type="image/ico">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-light">

    <?php foreach ($pelanggan as $u) { ?>


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
                                        <div id="dataPelanggan">
                                            <h2 class="text-primary">Informasi Pelanggan</h2>
                                            <hr>
                                            <p><strong>Nomor Pelanggan : </strong><?php echo $noPelanggan ?> </p>
                                            <p><strong>Nama Pelanggan : </strong><?php echo $u->namaPelanggan ?> </p>
                                            <p><strong>Alamat Pelanggan : </strong><?php echo $u->alamat ?> </p>
                                            <p><strong>Nomor Rumah : </strong><?php echo $u->noRumah ?> </p>
                                            <p><strong>Nomor KK : </strong><?php echo $u->noKK ?> </p>
                                            <p><strong>Nomor Handphone : </strong><?php echo $u->hpPelanggan ?> </p>
                                            <p><strong>Nomor Telepon : </strong><?php echo $u->teleponPelanggan ?> </p>
                                        </div>
                                        <br>
                                        <h2 class="text-primary">Hitung Tagihan</h2>
                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" id="harga" placeholder="Grup Tarif">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" id="pemakaian" placeholder="Jumlah Pemakaian">
                                            </div>
                                        </div>
                                        <div class="row  mb-3 mb-sm-0">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control form-control-user" id="total" placeholder="Total Tagihan" disabled>
                                            </div>
                                        </div>
                                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-user btn-block mt-3" name="daftar">
                                            Tampilkan Daftar Tarif
                                        </button>
                                        <div class="modal" tabindex="-1" role="dialog" id="myModal">
                                          <div class="modal-dialog" role="document" style="max-width: 800px">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Informasi Tarif</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <?php 
                                                $sql = "SELECT * FROM tarif";
                                                $result = $this->db->query($sql)->result_array();

                                                if (count($result)> 0) {
                                                    // output data of each row
                                                    foreach($result as $row) {
                                                        echo "Tipe: " . $row["tipe"]."->" . $row["nama"]." | Harga per Kubik = ".$row["tarifAir"]." | Batas Bawah = ".$row['batasBawah']." | Batas Atas = ".$row['batasAtas']. "<br>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block mt-3" name="hitung">
                                            Hitung Total Tagihan
                                        </button>

                                        <div class="row mb-3 mb-sm-0">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <a target="__blank" href="<?= base_url().'history/index?noPelanggan='.$noPelanggan ?>">
                                                <button type="submit" class="btn btn-warning btn-user btn-block mt-3" name="hitung">
                                                    Cek Riwayat
                                                </button></a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a target="__blank" href="<?= base_url().'history/tunggakan?noPelanggan='.$noPelanggan ?>">
                                                <button type="submit" class="btn btn-warning btn-user btn-block mt-3" name="tunggakan">
                                                    Cek Tunggakan
                                                </button></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <a href="auth" class="btn btn-danger btn-block mt-3" name="hitung">
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

        <script>
            $(document).ready(function () {

                $("body > div > div > div > div > div > div > div > div > button").on('click', () => {
                    var type = $('#harga').val();
                    var pemakaian = $('#pemakaian').val();

                    var data = <?=json_encode($tarif);?>;

                    for (var tarif of data) {
                        if (tarif.tipe == type) {
                            var currentTarif = tarif;

                            $("#total").val("Rp. "+currentTarif.tarifAir * parseInt(pemakaian));
                        }
                    }
                })

            })
        </script>
    <?php } ?>

</body>

</html>