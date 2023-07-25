<?php
    session_start();
    include "koneksi.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = mysqli_query($db, "SELECT email, password, posisi from akun where email= '$email' AND password='$password'");
    $count = mysqli_num_rows($sql);
    $fetchdata = mysqli_fetch_array($sql);
    if($count > 0){
        $posisi = $fetchdata['posisi'];
        If($posisi == '1'){
            $_SESSION['email'] = $email;
            $_SESSION['posisi'] = $posisi;
            $_SESSION['login1'] = true;
            echo"login staff";
            header('location: ./staff/staff.php');
        }
        else if($posisi == '0'){
            $_SESSION['email'] = $email;
            $_SESSION['posisi'] = $posisi;
            $_SESSION['login2'] = true;
            echo"login admin";
            header('location: ./admin/admin.php');
        }
    } else{
        echo "Username dan password Anda masukan salah. <br>";
        echo "<a href = 'Login.php'>Kembali</a>";
        }
  
    
?>