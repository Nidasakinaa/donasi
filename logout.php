<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
    <link rel="stylesheet" href="menu.php">
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
<?php

include("index.php");


//cek apakah tombol donasi sekarang sudah diklik atau belum?
if(isset($_POST['Donasi sekarang'])){

    //ambil data dari formulir 
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $jenisDonasi = $_POST['JenisDonasi'];
    $pengkhususanDonasi = $_POST['PengkhususanDonasi'];
    $metodePembayaran = $_POST['MetodePembayaran'];
    $jumlahRp = $_POST['JumlahRp'];

    // buat query
    $sql = "INSERT INTO Donasi (nama, telepon, email, JenisDonasi, MetodePembayaran, JumlahRp)
    VALUE ($nama, $telepon, $email, $JenisDonasi, $MetodePembayaran)";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: indeks.html?status=sukses');
    }else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: indeks.html?status=gagal');
    }


} 

else{
    die('Terima Kasih Telah Menyisihkan Uang Sakunya Untuk Donasi!');

}

?>
<nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

</nav>    


</body>
</html>




