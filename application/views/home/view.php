<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz Pemrograman Web 2</title>
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">Quiz-0910169</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-4" style="padding-bottom:100px;">
        <div class="row justify-content-center">
            <div class="col-lg-2">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">
                            Menu
                        </h6>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-danger"
                            onclick="window.location.href=('<?php echo site_url('login/keluar') ?>')">
                            Log-Out
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-info">
                            Data Pemesanan
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No.Pemesanan</th>
                                    <th>Tgl.Pemesanan</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga(Rp.)</th>
                                    <th>Jumlah</th>
                                    <th>Sub.Total (Rp.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $total = 0;
                                foreach ($datapemesanan->result_array() as $row) {
                                    $no++;
                                    $subtotal = $row['pesanharga'] * $row['pesanjml'];
                                    $total = $total + $subtotal;
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['pesanno']; ?></td>
                                    <td><?php echo $row['pesantgl']; ?></td>
                                    <td><?php echo $row['pesankdbrg']; ?></td>
                                    <td><?php echo $row['pesannmbrg']; ?></td>
                                    <td align="right"><?php echo number_format($row['pesanharga'], 0); ?></td>
                                    <td><?php echo $row['pesanjml']; ?></td>
                                    <td align="right"><?php echo number_format($subtotal, 0); ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="7">Total Keseluruhan</th>
                                    <td align="right"><?php echo number_format($total, 0); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>