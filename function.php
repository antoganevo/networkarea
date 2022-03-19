<?php

session_start();

//koneksi ke database
$conn = mysqli_connect("juan5684_logan","juan5684_logan","mksjuarayya","networkarea");

// Dashboard
    $query1 = $conn->query("SELECT * FROM patchcore");
    $query2 = $conn->query("SELECT * FROM Patchcore where connector='LC-LC' AND jarak='10'");
    $query3 = $conn->query("SELECT * FROM Patchcore where connector='LC-LC' AND jarak='20'");
    $query4 = $conn->query("SELECT * FROM Patchcore where connector='LC-LC' AND jarak='25'");
    $query5 = $conn->query("SELECT * FROM Patchcore where connector='LC-SC' AND jarak='10'");
    $query6 = $conn->query("SELECT * FROM Patchcore where connector='LC-SC' AND jarak='20'");
    $query7 = $conn->query("SELECT * FROM Patchcore where connector='LC-SC' AND jarak='25'");
    $query8 = $conn->query("SELECT * FROM Patchcore where connector='LC-FC' AND jarak='10'");
    $query9 = $conn->query("SELECT * FROM Patchcore where connector='LC-FC' AND jarak='20'");
    $query10 = $conn->query("SELECT * FROM Patchcore where connector='LC-FC' AND jarak='25'");
    $query11 = $conn->query("SELECT * FROM Patchcore where connector='SC-SC' AND jarak='10'");
    $query12 = $conn->query("SELECT * FROM Patchcore where connector='SC-SC' AND jarak='20'");
    $query13 = $conn->query("SELECT * FROM Patchcore where connector='SC-SC' AND jarak='25'");
    $query14 = $conn->query("SELECT * FROM Patchcore where connector='SC-FC' AND jarak='10'");
    $query15 = $conn->query("SELECT * FROM Patchcore where connector='SC-FC' AND jarak='20'");
    $query16 = $conn->query("SELECT * FROM Patchcore where connector='SC-FC' AND jarak='25'");
    $query17 = $conn->query("SELECT * FROM Patchcore where connector='FC-FC' AND jarak='10'");
    $query18 = $conn->query("SELECT * FROM Patchcore where connector='FC-FC' AND jarak='20'");
    $query19 = $conn->query("SELECT * FROM Patchcore where connector='FC-FC' AND jarak='25'");
    $query20 = $conn->query("SELECT * FROM sfp where bandwidth<'10' AND jarak='10'");
    $query21 = $conn->query("SELECT * FROM sfp where bandwidth<'10' AND jarak='40'");
    $query22 = $conn->query("SELECT * FROM sfp where bandwidth<'10' AND jarak='80'");
    $query23 = $conn->query("SELECT * FROM modul");
    $query24 = $conn->query("SELECT * FROM sfp where bandwidth>='10' AND jarak='10'");
    $query25 = $conn->query("SELECT * FROM sfp where bandwidth>='10' AND jarak='40'");
    $query26 = $conn->query("SELECT * FROM sfp where bandwidth>='10' AND jarak='80'");

    $jumlahpatchcore = mysqli_num_rows($query1);
    $pclclc10 = mysqli_num_rows($query2);
    $pclclc20 = mysqli_num_rows($query3);
    $pclclc25 = mysqli_num_rows($query4);
    $pclcsc10 = mysqli_num_rows($query5);
    $pclcsc20 = mysqli_num_rows($query6);
    $pclcsc25 = mysqli_num_rows($query7);
    $pclcfc10 = mysqli_num_rows($query8);
    $pclcfc20 = mysqli_num_rows($query9);
    $pclcfc25 = mysqli_num_rows($query10);
    $pcscsc10 = mysqli_num_rows($query11);
    $pcscsc20 = mysqli_num_rows($query12);
    $pcscsc25 = mysqli_num_rows($query13);
    $pcscfc10 = mysqli_num_rows($query14);
    $pcscfc20 = mysqli_num_rows($query15);
    $pcscfc25 = mysqli_num_rows($query16);
    $pcfcfc10 = mysqli_num_rows($query17);
    $pcfcfc20 = mysqli_num_rows($query18);
    $pcfcfc25 = mysqli_num_rows($query19);
    $sfpjarak1g10 = mysqli_num_rows($query20);
    $sfpjarak1g40 = mysqli_num_rows($query21);
    $sfpjarak1g80 = mysqli_num_rows($query22);
    $jumlahmodul = mysqli_num_rows($query23);
    $sfp10g10 = mysqli_num_rows($query24);
    $sfp10g40 = mysqli_num_rows($query25);
    $sfp10g80 = mysqli_num_rows($query26);

//Tambah barang
    //menambah barang Patchcore
    if(isset($_POST['submitpc'])){
        $jenis = $_POST['jenis'];
        $connector = $_POST['connector'];
        $jarak = $_POST['jarak'];
        $tkabel = $_POST['tkabel'];

        $submitpc = mysqli_query($conn,"INSERT INTO patchcore (jenis, connector, jarak, tkabel) VALUE('$jenis','$connector','$jarak','$tkabel')");
    }
    //menambah barang SFP
    if(isset($_POST['submitsfp'])){
        $jenis = $_POST['jenis'];
        $vendor = $_POST['vendor'];
        $bandwidth = $_POST['bandwidth'];
        $lambda = $_POST['lambda'];
        $jarak = $_POST['jarak'];
        $sn = $_POST['sn'];

        $submitsfp = mysqli_query($conn,"INSERT INTO sfp (jenis, vendor, bandwidth, lambda, jarak, sn) VALUE('$jenis','$vendor','$bandwidth','$lambda','$jarak','$sn')");
    }
    //menambah barang Modul
    if(isset($_POST['submitmodul'])){
        $vendor = $_POST['vendor'];
        $tboard = $_POST['tboard'];
        $sn = $_POST['sn'];

        $submitmodul = mysqli_query($conn,"INSERT INTO modul (vendor, tboard, sn) VALUE('$vendor','$tboard','$sn')");
    }
    //menambah record bkeluar(form keluar)
    if(isset($_POST['submitformk'])){
        $kebutuhan = $_POST['kebutuhan'];
        $dari = $_POST['dari'];
        $kepada = $_POST['kepada'];
        $hasil = $_POST['hasil'];
        $iduniq = $_POST['iduniq'];
        $nymenerima = $_POST['nymenerima'];
        $nikmenerima = $_POST['nikmenerima'];
        $nymenyerahkan = $_POST['nymenyerahkan'];
        $nikmenyerahkan = $_POST['nikmenyerahkan'];

        $submitformk = mysqli_query($conn,"INSERT INTO bkeluar (iduniq ,kebutuhan, dari, kepada, hasil, nymenerima, nikmenerima, nymenyerahkan, nikmenyerahkan) VALUE('$iduniq','$kebutuhan','$dari','$kepada','$hasil','$nymenerima','$nikmenerima','$nymenyerahkan','$nikmenyerahkan')");
        $submitformk = mysqli_query($conn,"UPDATE patchcore SET iduniq = '$iduniq'");
        $submitformk = mysqli_query($conn,"UPDATE sfp SET iduniq = '$iduniq'");
        $submitformk = mysqli_query($conn,"UPDATE modul SET iduniq = '$iduniq'");
    }
     //menambah record Arsip
     if(isset($_POST['submitarsip'])){
        $jenisarsip = $_POST['jenisarsip'];
        $judul = $_POST['judul'];
        $vendor = $_POST['vendor'];
        $noarsip = $_POST['noarsip'];
        $tanggalarsip = $_POST['tanggalarsip'];
        $filearsip = $_FILES['filearsip'];

        $submitarsip = mysqli_query($conn,"INSERT INTO arsip (jenisarsip, judul, vendor, noarsip, tanggalarsip, filearsip) VALUE('$jenisarsip','$judul','$vendor','$noarsip','$tanggalarsip','$filearsip')");
    }
//memindahkan data dari tabel ----k ke tabel ----(Hapus data)
    //(patchcorek)
    if(isset($_POST['spchapus'])){
        $idpck = $_POST['idpck'];

        $spchapus = mysqli_query($conn,"INSERT INTO patchcore (iduniq, jenis, connector, jarak, tkabel, tanggal) SELECT iduniq, jenisk, connectork, jarakk, tkabelk, tanggal FROM patchcorek WHERE idpck = '$idpck'");
        $deletepc = mysqli_query($conn,"DELETE FROM patchcorek WHERE idpck = '$idpck'");
    }
    //(sfpk)
    if(isset($_POST['ssfphapus'])){
        $idsfpk = $_POST['idsfpk'];

        $ssfpkeluar = mysqli_query($conn,"INSERT INTO sfp (iduniq, jenis, vendor, bandwidth, lambda, jarak, sn, tanggal) SELECT iduniq, jenisk, vendork, bandwidthk, lambdak, jarakk, snk, tanggal FROM sfpk WHERE idsfpk = '$idsfpk'");
        $deletesfp = mysqli_query($conn,"DELETE FROM sfpk WHERE idsfpk = '$idsfpk'");
    }
    //(modulk)
    if(isset($_POST['smodulhapus'])){
        $idmodulk = $_POST['idmodulk'];

        $smodulhapus = mysqli_query($conn,"INSERT INTO modul (iduniq, vendor, tboard, sn, tanggal) SELECT iduniq, vendor, tboardk, snk, tanggal FROM modulk WHERE idmodulk = '$idmodulk'");
        $delete = mysqli_query($conn,"DELETE FROM modulk WHERE idmodulk = '$idmodulk'");
        
    }
    //memindahkan data dari tabel ---- ke tabel ----k(ambil data)
    //(patchcorek)
    if(isset($_POST['spckeluar'])){
        $idpc = $_POST['idpc'];

        $spckeluar = mysqli_query($conn,"INSERT INTO patchcorek (iduniq, jenisk, connectork, jarakk, tkabelk, tanggal) SELECT iduniq, jenis, connector, jarak, tkabel, tanggal FROM patchcore WHERE idpc = '$idpc'");
        $deletepc = mysqli_query($conn,"DELETE FROM patchcore WHERE idpc = '$idpc'");
    }
    //(sfpk)
    if(isset($_POST['ssfpkeluar'])){
        $idsfp = $_POST['idsfp'];

        $ssfpkeluar = mysqli_query($conn,"INSERT INTO sfpk (iduniq, jenisk, vendork, bandwidthk, lambdak, jarakk, snk, tanggal) SELECT iduniq, jenis, vendor, bandwidth, lambda, jarak, sn, tanggal FROM sfp WHERE idsfp = '$idsfp'");
        $deletesfp = mysqli_query($conn,"DELETE FROM sfp WHERE idsfp = '$idsfp'");
    }
    //(modulk)
    if(isset($_POST['smodulkeluar'])){
        $idmodul = $_POST['idmodul'];

        $smodulkeluar = mysqli_query($conn,"INSERT INTO modulk (iduniq, vendor, tboardk, snk, tanggal) SELECT iduniq, vendor, tboard, sn, tanggal FROM modul WHERE idmodul = '$idmodul'");
        $delete = mysqli_query($conn,"DELETE FROM modul WHERE idmodul = '$idmodul'");
        
    }

//input arsip
if(isset($_POST["btn_zip"])){
    $output = '';
    if($_FILES['zip_file']['name'] != ''){
       $file_name = $_FILES['zip_file']['name'];
       $array = explode(".", $file_name);
       $name = $array[0];
       $ext = $array[1];
       if($ext == 'zip'){
          $path = 'upload/';
          if (!file_exists($path))
            mkdir($path);
          
          $location = $path . $file_name;
          if(move_uploaded_file($_FILES['zip_file']['tmp_name'], $location)){
             $zip = new ZipArchive;
             if($zip->open($location)){
                $zip->extractTo($path);
                $zip->close();
             }
             unlink($location);
   
             echo "<script>alert('Data berhasil diupload'); location='arsip.php';</script>";
          }
       } else {
          echo "<script>alert('Hanya .zip yang diperbolehkan'); location='arsip.php';</script>";
       }
    }
  }

//uniq
function getUniqueId()
{
    $strength=16;
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;  
    }
?>