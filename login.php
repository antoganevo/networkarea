<?php
require 'function.php';


//cek login, terdaftar
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    //data ada didatabase inputan manual
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password' and  level = '$level'");
    //jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        $_SESSION['email']=$email;
        $_SESSION['level']=$level;
        header('location:dashboard.php');
    } else {
        echo "<script>alert('USER TAK TERDAFTAR'); location='login.php';</script>";
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:dashboard.php');
}

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
        <title>Network Area & IS Operation</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <style>
    body
    {
        background-image:  url('telkom.jpg');
        background-size: cover;
        background-position-x: center;
        background-position-y: center;
    }
    </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-10 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Nama</label>
                                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="text" placeholder="Masukkan Nama" required/>
                                            </div>
                                            <select class="form-control" name="level" aria-label="Disabled select example" required>
                                                <option selected>Pilih Level User</option>
                                                <option value="admin">ADMIN</option>
                                                <option value="mitra">MITRA</option>
                                            </select>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Masukkan Password" required/>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">                                                
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
