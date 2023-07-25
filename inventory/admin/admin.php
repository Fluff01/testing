<?php
include "../koneksi.php";
session_start();
$email = $_SESSION['email'];
$level = $_SESSION['posisi'];

if(!isset($_SESSION['login2'])){
    header("location: ../login.php");
    exit;
} 
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top ">
      <div class="container">
      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <a class="navbar-brand me-auto text-light" href="#">Admin Page</a>
          <ul class="navbar-nav ">
          <li class="nav-item me-3">
              <a class="nav-link active text-light hovered" aria-current="page" href=""></a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link active text-light hovered" aria-current="page" href="tambahmenu.php">tambah device</a>
            </li>
            <li class="nav-item me-3 hovered">
              <a class="nav-link text-light" href="hapusM.php">edit/hapus device</a>
            </li>
            <li class="nav-item me-3 hovered">
              <a class="nav-link text-light" href="add.php">Add</a>
            </li>

            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            setting
          </a>
          <ul class="dropdown-menu me-3" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item me-2" href="tampilStaff.php">profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item me-2" href="../logout.php">Logout</a></li>
          </ul>
        </li>
          </ul>
        </div>
      </div>
    </nav>

<center>
<h2>DASHBOARD</h2>

<div class="container">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Falkutas</th>
      <th scope="col">Gedung</th>
      <th scope="col">ruang</th>
      <th scope="col">Action</th>
      <!-- <th scope="col">No PC</th>
      <th scope="col">tipe</th>
      <th scope="col">monitor</th>
      <th scope="col">OS</th>
      <th scope="col">CPU</th>
      <th scope="col">GPU</th>
      <th scope="col">RAM</th>
      <th scope="col">Drives</th> -->
      
    </tr>

  </thead>
  <tbody>
  <?php
            
        
                ?>
                <tr>
                    
                </tr>
              
                    
                    

  </tbody>
  <tr></tr>
</table>
</div>
</center>
  





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>