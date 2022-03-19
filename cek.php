<?php 
//cek apakah sudah login atau tidak
if(isset($_SESSION['log'])){
    
 
} else {
    header('location:login.php');
}

?>