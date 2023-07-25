<?php
include "../koneksi.php";
require '../functions.php';

$id=$_GET['id_pc'];

$sqlb= "SELECT * FROM device_pc INNER JOIN gedung ON device_pc.id_ged = gedung.id_ged WHERE id_pc=$id";
$queryb= mysqli_query($db, $sqlb);
$data= mysqli_fetch_assoc($queryb);

    if(mysqli_num_rows($queryb) < 1){
        die("data tidak ditemukan");
    }

    
    if(isset($_POST["submit"])){
      
      if(update($_POST) > 0){
        echo "<script>alert('berhasil di update');window.location='staff.php' </script>";
      }
      else{
        echo "gagal haus";
      }
    }



  if(isset($_POST["delete"])){
    if(delete($_POST) > 0){
      echo "<script>alert('berhasil di hapus');window.location='staff.php' </script>";
    }
    else{
      echo "gagal hapus";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <table>
      <tr>
        <td><input type="hidden" name="id_pc" value="<?php echo $data['id_pc'] ?>"></td>
      </tr>
      <tr>
        <td>
          <select name="id_ged" id="" required>
          <option value=<?php echo$data['id_ged']?>><?php echo $data['nama_ged'] ?></option>;
          <?php
       
        include "../koneksi.php";
        $sql = mysqli_query($db, "SELECT * FROM gedung");
        while($dt = mysqli_fetch_array($sql)){
            echo " <option value=$dt[id_ged]>$dt[nama_ged]</option>";
        
        ?>
        <?php
        }
        ?>
          </select>
        </td>
      </tr>
    
     
      <tr>
        <td>lantai <br> <input type="text" name="lantai" id="" value="<?php echo $data['lantai'] ?>"></td>
      </tr>
      <tr>
        <td>kelas <br> <input type="text" name="kelas" id="" value="<?php echo $data['kelas'] ?>"></td>
      </tr>
      <tr>
        <td>no_pc <br> <input type="text" name="no_pc" id="" value="<?php echo $data['no_pc'] ?>"></td>
      </tr>
      <tr>
        <td>monitor <br> <input type="text" name="monitor" id="" value="<?php echo $data['monitor'] ?>"></td>
      </tr>
      <tr>
        <td>motherboard <br> <input type="text" name="motherboard" id="" value="<?php echo $data['motherboard'] ?>"></td>
      </tr>
      <tr>
        <td>cpu <br> <input type="text" name="cpu" id="" value="<?php echo $data['cpu'] ?>"></td>
      </tr>
      <tr>
        <td>gpu <br> <input type="text" name="gpu" id="" value="<?php echo $data['gpu'] ?>"></td>
      </tr>
      <tr>
        <td>ram <br> <input type="text" name="ram" id="" value="<?php echo $data['ram'] ?>"></td>
      </tr>
      <tr>
        <td>hdd <br> <input type="text" name="hdd" id="" value="<?php echo $data['hdd'] ?>"></td>
      </tr>
      <tr>
        <td>ssd <br> <input type="text" name="ssd" id="" value="<?php echo $data['ssd'] ?>"></td>
      </tr>
      <tr>
        <td>status <br> <input type="text" name="status" id="" value="<?php echo $data['status'] ?>"></td>
      </tr>
      <tr>
        <td>kendala <br> <input type="text" name="kendala" id="" value="<?php echo $data['kendala'] ?>"></td>
      </tr>
      <tr>
          <td><button type="submit" name="submit">update</button> <button type="submit" name="delete">hapus</button></td>
      </tr>
    </table>
  </form>
</body>
</html>