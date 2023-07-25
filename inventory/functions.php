<?php
$db = mysqli_connect('localhost', 'root', '', 'inventory');

function signUp($data){
    global $db;
    $email = $data['email'];
    $nama =$data['nama'];
    $password =$data['password'];
    $sql = "INSERT INTO akun values('', '$nama', '$email', '$password', '1')";
    mysqli_query($db, $sql);
    return mysqli_affected_rows($db);
}

function pc($data){
    global $db;
    $lantai =$data['lantai'];
    $kelas =$data['kelas'];
    $no_pc =$data['no_pc'];
    $monitor =$data['monitor'];
    $motherboard =$data['motherboard'];
    $cpu =$data['cpu'];
    $gpu =$data['gpu'];
    $ram =$data['ram'];
    $hdd =$data['hdd'];
    $ssd =$data['ssd'];
    $status =$data['status'];
    $kendala =$data['kendala'];
    $id_ged =$data['id_ged'];
    $sql = "INSERT INTO device_pc values('', '$lantai', '$kelas', '$no_pc', '$monitor', '$motherboard', '$cpu', '$gpu', '$ram', '$hdd', '$ssd', '$status', '$kendala', '$id_ged' )";
    mysqli_query($db, $sql);
    return mysqli_affected_rows($db);
}
function update($data){
    global $db;
    $id_pc =$data['id_pc'];
    $lantai =$data['lantai'];
    $kelas =$data['kelas'];
    $no_pc =$data['no_pc'];
    $monitor =$data['monitor'];
    $motherboard =$data['motherboard'];
    $cpu =$data['cpu'];  
    $gpu =$data['gpu'];
    $ram =$data['ram'];
    $hdd =$data['hdd'];
    $ssd =$data['ssd'];
    $status =$data['status'];
    $kendala =$data['kendala'];
    $id_ged =$data['id_ged'];

    $sql = "UPDATE  device_pc SET  lantai='$lantai', kelas='$kelas', no_pc='$no_pc', monitor='$monitor', motherboard='$motherboard', cpu='$cpu', gpu='$gpu', ram='$ram', hdd='$hdd', ssd='$ssd', status='$status', kendala='$kendala', id_ged ='$id_ged'  WHERE id_pc='$id_pc'";
    mysqli_query($db, $sql);
    return mysqli_affected_rows($db);
}
function delete($data){
    global $db;
    $id_pc =$data['id_pc'];

    $sql = "DELETE FROM device_pc WHERE id_pc='$id_pc'";
    mysqli_query($db, $sql);
    return mysqli_affected_rows($db);
}
?>
