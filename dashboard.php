<?php
require 'function.php';
require 'cek.php';

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
        <title>Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="dashboard.php">Network Area</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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
                        <center><h2 class="mt-3">Dashboard</h2></center><br>
                        <div class="row">
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-LC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclclc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-LC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclclc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-LC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclclc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-SC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcsc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-SC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcsc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-SC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcsc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-FC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcfc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-FC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcfc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore LC-FC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pclcfc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-SC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscsc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-SC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscsc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-SC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscsc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-FC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscfc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-FC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscfc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore SC-FC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcscfc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore FC-FC 10M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcfcfc10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore FC-FC 20M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcfcfc20;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <center><div class="card-body">Patchcore FC-FC 25M</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $pcfcfc25;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 1G-10KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfpjarak1g10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 1G-40KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfpjarak1g40;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 1G-80KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfpjarak1g80;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 10G-10KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfp10g10;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 10G-40KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfp10g40;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <center><div class="card-body">SFP 10G-80KM</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $sfp10g80;?></b> pcs</div>
                                    </div></center>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <center><div class="card-body">Jumlah Modul</div>
                                    <div class="card-footer">
                                        <div class="text-white"><b><?php echo $jumlahmodul;?></b> pcs</div>
                                    </div></center>
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
    </body>
</html>
