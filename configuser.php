<?php
//membatasi user mitra untuk masuk ke beberapa halaman
if($_SESSION['level'] == 'mitra'){
    echo "<script>alert('Hanya Admin Yang Bisa Mengakses Halaman Ini !'); location='dashboard.php';</script>";
}
?>