<?php
require '../functions.php';
if(isset($_POST["submit"])){
    if(pc($_POST) > 0){
        echo "berhasil di tambah";
    }else{
        var_dump($_POST);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
  <a class="navbar-brand" href="staff.php">Kembali</a>
    
  </div>
</nav>
<h2 class="text-center text-info">Tambah device pc</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">lantai</label>
            <input type="text" name="lantai" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="formGroupExampleInput2" placeholder="">
        </div>
        <select name="id_ged" id="">
        <option value="">---</option>
        <?php
        include "../koneksi.php";
        $sql = mysqli_query($db, "SELECT * FROM gedung");
        while($data = mysqli_fetch_array($sql)){
            echo " <option value=$data[id_ged]>$data[nama_ged]</option>";
        }
        ?>
        
       </select>
        <div class="mb-3">
             <label for="formGroupExampleInput3" class="form-label">No PC</label>
            <input type="text" name="no_pc" class="form-control" id="formGroupExampleInput3">
        </div>
        
       
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">monitor</label>
            <input type="text" name="monitor" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">motherboard</label>
            <input type="text" name="motherboard" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">cpu</label>
            <input type="text" name="cpu" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">gpu</label>
            <input type="text" name="gpu" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ram</label>
            <input type="text" name="ram" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">hdd</label>
            <input type="text" name="hdd" class="form-control" id="formGroupExampleInput">
        </div>
        
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">ssd</label>
            <input type="text" name="ssd" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">status</label>
            <input type="text" name="status" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">kendala</label>
            <input type="text" name="kendala" class="form-control" id="formGroupExampleInput">
        </div>
       
       <div class="mt-3">
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Confirm</button>
            </div>
        </div>
    </div>
</form>     

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>