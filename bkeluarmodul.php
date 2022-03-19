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
                    <center><h4 class="mt-1">Data Modul</h4></center><br>
                    <?php
                                        $ambilidmax = mysqli_query($conn, "SELECT * FROM bkeluar ORDER BY idkeluar DESC LIMIT 1");
                                        while($data=mysqli_fetch_array($ambilidmax)){
                                            $kebutuhan = $data['kebutuhan'];
                                            $dari = $data['dari'];
                                            $kepada = $data['kepada'];
                                            $hasil = $data['hasil'];
                                            $nymenerima = $data['nymenerima'];
                                            $nikmenerima = $data['nikmenerima'];
                                            $nymenyerahkan = $data['nymenyerahkan'];
                                            $nikmenyerahkan = $data['nikmenyerahkan'];
                                            $tanggal = $data['tanggal'];
                                            $iduniq = $data['iduniq'];
                                            
                                    ?>
                                    <dl class="row">
                                        <dt class="col-sm-3">ID Uniq</dt>
                                            <dd class="col-sm-9">: <b><?=$iduniq;?></b></dd>

                                        <dt class="col-sm-3">Kebutuhan</dt>
                                            <dd class="col-sm-9">: <?=$kebutuhan;?></dd>

                                        <dt class="col-sm-3">Dari</dt>
                                            <dd class="col-sm-9">: <?=$dari;?></dd>

                                        <dt class="col-sm-3">Kepada</dt>
                                            <dd class="col-sm-9">: <?=$kepada;?></dd>
                                        
                                        <dt class="col-sm-3">Nama Yang Menerima</dt>
                                            <dd class="col-sm-9">: <?=$nymenerima;?></dd>
                                        
                                        <dt class="col-sm-3">NIK Yang Menerima</dt>
                                            <dd class="col-sm-9">: <?=$nikmenerima;?></dd>
                                        
                                        <dt class="col-sm-3">Nama Yang Menyerahkan</dt>
                                            <dd class="col-sm-9">: <?=$nymenyerahkan;?></dd>
                                        
                                        <dt class="col-sm-3">NIK Yang Menyerahkan</dt>
                                            <dd class="col-sm-9">: <?=$nikmenyerahkan;?></dd>
                                        
                                        <dt class="col-sm-3">Hasil</dt>
                                            <dd class="col-sm-9">: <?=$hasil;?></dd>
                                        
                                        <dt class="col-sm-3">Tanggal</dt>
                                            <dd class="col-sm-9">: <?=$tanggal;?></dd>
                        </dl>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Vendor</th>
                                    <th>Type Board</th>
                                    <th>Serial Number</th>
                                    <th>ID Uniq</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                        $ambilsemuadatamodul = mysqli_query($conn, "SELECT * FROM modul ORDER BY tanggal DESC");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatamodul)){
                                    
                                            $vendor = $data['vendor'];
                                            $tboard = $data['tboard'];
                                            $sn = $data['sn'];
                                            $idmodul = $data['idmodul'];        
                                            $iduniq1 = $data['iduniq'];        
                                    ?>

                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?=$vendor;?></td>
                                                <td><?=$tboard;?></td>
                                                <td><?=$sn;?></td>
                                                <td><?=$iduniq1;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ambil<?=$idmodul;?>">
                                                    Ambil
                                                    </button>
                                                </td>
                                            </tr>
                                     <!-- ambil -->
                                     <div class="modal fade" id="ambil<?=$idmodul;?>">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                                                                                                
                                                    <!-- ambil Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Ambil Modul</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                                                                                                    
                                                    <!-- ambil body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                    Anda yakin mengambil Modul Vendor <b><?=$vendor;?></b> dengan Type Board <b><?=$tboard;?></b>, dan SN <b><?=$sn;?></b>  ?
                                                    <input type="hidden" name="idmodul" value="<?=$idmodul;?>">
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="btn btn-success" name="smodulkeluar">Ambil</button>
                                                    </div>
                                                    </form>                                       
                                                </div>
                                                </div>
                                        </div>
                                    <?php
                                    };
                                    ?>   
                                </tbody>
                            </table>
                        </div><br><br>
                        <div class="table-responsive">
                            <center><h4>Data Yang Telah di Ambil</h4></center>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Vendor</th>
                                    <th>Type Board</th>
                                    <th>Serial Number</th>
                                    <th>ID Uniq</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                            </thead>
                                <tbody>
                                    <?php
                                        $ambilsemuadatamodulk = mysqli_query($conn, "SELECT * FROM modulk WHERE iduniq = '$iduniq'");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatamodulk)){
                                    
                                            $vendor = $data['vendor'];
                                            $tboardk = $data['tboardk'];
                                            $snk = $data['snk'];
                                            $idmodulk = $data['idmodulk'];        
                                            $iduniq2 = $data['iduniq'];        
                                    ?>

                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?=$vendor;?></td>
                                                <td><?=$tboardk;?></td>
                                                <td><?=$snk;?></td>
                                                <td><?=$iduniq2;?></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ambil<?=$idmodulk;?>">
                                                    Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                     <!-- ambil -->
                                     <div class="modal fade" id="ambil<?=$idmodulk;?>">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                                                                                                
                                                    <!-- ambil Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Modul</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                                                                                                    
                                                    <!-- ambil body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                    Anda yakin tidak mengambil Modul Vendor <b><?=$vendor;?></b> dengan Type Board <b><?=$tboardk;?></b>, dan SN <b><?=$snk;?></b>  ?
                                                    <input type="hidden" name="idmodulk" value="<?=$idmodulk;?>">
                                                    <br>
                                                    <br>
                                                    <button type="submit" class="btn btn-danger" name="smodulhapus">Hapus</button>
                                                    </div>
                                                    </form>                                       
                                                </div>
                                                </div>
                                        </div>
                                    <?php
                                    };
                                    ?>
                                   
                                </tbody>
                            </table>
                            <?php
                            };
                            ?>
                        </div>
                    </div>
                    <div class="card-header mt-1">
                    <center><a href="bkmodul.php"><button class="btn btn-primary">Tampil Cetak</button></a></center>
                    </div>
                    <div class="card-header mt-3">
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