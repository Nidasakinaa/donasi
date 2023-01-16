<?php
include("config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//cek apakah tombol donasi sudah diklik atau belum?
   //ambil data dari form-donasi 
    $id = $_GET['id'];


// buat query 
$sql = "DELETE FROM formdonasi WHERE nomor='$id'";
 $query = mysqli_query($db,$sql) or  die(mysqli_error($db));;

//apakah query simpan berhasil?
if($query) {
    //kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: table.php?status=sukses');
}else {
    //kalau gagal alihkan ke halaman index.php dengan status=gagal
    header('Location: index.php?status=gagal');
}

?>