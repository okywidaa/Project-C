
<?php
//KONEKSI DATABASE
$koneksi = mysqli_connect("localhost", "root", "", "bluderku");

//menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$total = $_POST['total'];

$nama =  $_REQUEST['nama'];
$harga = $_REQUEST['harga'];
$jumlah =  $_REQUEST['jumlah'];
$total = $_REQUEST['total'];



//menginput data le database
mysqli_query($koneksi, "INSERT INTO user (nama,harga,jumlah,total) VALUES ('$nama', '$harga','$jumlah','$total')");

//mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>

<form action="actions/create_task.php" method="POST">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="harga">Harga per Unit  :</label><br>
        <input type="text" id="harga" name="harga"><br>

        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br>

        <label for="total">Total Harga:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br>

        <input type="submit" value="Tambah Tugas">
    </form>

    <link rel="stylesheet" type="text/css" href="assets/style.css">