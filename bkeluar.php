<?php

require 'function.php';
require 'cek.php';
$iduniq=getUniqueId();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/png" href="kop.png">
        <title>Barang Keluar</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Network Area</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" >
                        <a class="dropdown-item" href="logout.php">Logout <b><?php echo $_SESSION['email'];?></b></a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Mutasi Logistik
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="bmasukpc.php">Barang Masuk</a>
                                    <a class="nav-link" href="bkeluar.php">Barang Keluar</a>
                                    <a class="nav-link" href="inputarsip.php">Input Arsip</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Logistik
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="lsfp.php">SFP</a>
                                    <a class="nav-link" href="lpc.php">Patchcore</a>
                                    <a class="nav-link" href="lmodul.php">Modul</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArsip" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                History
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseArsip" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="asfp.php">SFP</a>
                                    <a class="nav-link" href="apc.php">Patchcore</a>
                                    <a class="nav-link" href="amodul.php">Modul</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="arsip.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Arsip
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <div class="card-header mt-4">
                        <center><h4 class="mt-1">Form Barang Keluar</h4></center><br>
                        <form method="post">
                            <div class="mb-3">
                                <label class="form-label">ID Uniq</label>
                                <input type="text" name="iduniq" readonly class="form-control" value="<?=$iduniq;?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kebutuhan</label>
                                <input type="text" name="kebutuhan" placeholder="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dari</label>
                                <input type="text" name="dari" placeholder="Pemberi" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kepada</label>
                                <input type="text" name="kepada" placeholder="Penerima" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Yang Menerima</label>
                                <input type="text" name="nymenerima" placeholder="Nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nik Yang Menerima</label>
                                <input type="text" name="nikmenerima" placeholder="NIK" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Yang Menyerahkan</label>
                                <input type="text" name="nymenyerahkan" placeholder="Nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nik Yang Menyerahkan</label>
                                <input type="text" name="nikmenyerahkan" placeholder="NIK" class="form-control" required>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Hasil</label>
                                <select class="form-control" name="hasil" aria-label="Disabled select example" required>
                                    <option selected>Pilih Jenis</option>
                                    <option value="BAIK">BAIK</option>
                                    <option value="KURANG BAIK">KURANG BAIK</option>
                                    <option value="BURUK">BURUK</option>
                                </select>
                            </div>
                            <br>
                            <button type="submit"  class="btn btn-primary" name="submitformk" href="dashboard.php">Submit</button>
                        </form>
                    </div>
                    <div class="card-header mt-4">
                            <center><h4>PILIH KELUAR</h4></center><br>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <a href="bkeluarpc.php">  
                                    <div class="card bg-primary text-white mb-4">
                                        <center><div class="card-body">Patchcore</div></center>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <a href="bkeluarsfp.php">  
                                    <div class="card bg-danger text-white mb-4">
                                        <center><div class="card-body">SFP</div></center>
                                    </div>
                                    </a>  
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <a href="bkeluarmodul.php">  
                                    <div class="card bg-success text-white mb-4">
                                        <center><div class="card-body">Modul</div></center>
                                    </div>
                                    </a>  
                                </div>
                            </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="dist/sweetalert2.all.min.js"></script>
    </body>
</html>