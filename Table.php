<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>

<?php
if(isset($_GET['status']) && $_GET['status']=="sukses"){
    echo "Data Berhasil Di tambahkan";
}
else if(isset($_GET['status']) && $_GET['status']=="gagal"){
    echo "Data Donasi Gagal Di tambhankan";
}
?>

    <a href="formdonasi.php">{+}</a>
    <table border="1">
        <thead>
            <th>no.</th>
            <th>nama</th>
            <th>telepon</th>
            <th>email</th>
            <th>jenisDonasi</th>
            <th>pengkhususanDonasi</th>
            <th>metodePembayaran</th>
            <th>jumlahRp</th>
        </thead>
        <tbody>
            <?php
            $mysql = "SELECT * FROM formdonasi ORDER BY nomor ASC";
            $result = mysqli_query($db,$mysql) or die(mysqli_error($db));
            while ($donasi = mysqli_fetch_assoc($result)) {
            echo "<tr>";
                echo "<td>" . $donasi['nomor'] . "</td>";
                echo "<td>" . $donasi['nama'] . "</td>";
                echo "<td>" . $donasi['telepon'] . "</td>";
                echo "<td>" . $donasi['email'] . "</td>";
                echo "<td>" . $donasi['jenisDonasi'] . "</td>";
                echo "<td>" . $donasi['pengkhususanDonasi'] . "</td>";
                echo "<td>" . $donasi['metodePembayaran'] . "</td>";
                echo "<td>" . $donasi['jumlahRp'] . "</td>";
                ?>
  <td>
              <a href="update-donasi.php?id=<?php echo $donasi['nomor']; ?>">Edit</a> |
              <a href="proses-hapus-donasi.php?id=<?php echo $donasi['nomor']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
  <?php
          
                echo "</tr>";
            }

            ?>

        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($result) ?></p>*
</body>

</html>