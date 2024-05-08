<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
</head>
<body>
  <h2>Keranjang Belanja</h2>
  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Harga per Unit</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php
      session_start();
      // Mengambil data keranjang belanja dari localStorage
      $cart = json_decode($_COOKIE['cart'], true);

      // Menampilkan produk pada keranjang belanja
      foreach($cart as $produk) {
        $totalHarga = $produk['price'] * $produk['quantity'];
        echo "<tr>";
        echo "<td>{$produk['name']}</td>";
        echo "<td>Rp {$produk['price']}</td>";
        echo "<td>{$produk['quantity']}</td>";
        echo "<td>Rp $totalHarga</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>




<?php
session_start();

// Koneksi ke database

$koneksi = mysqli_connect("localhost","root","","bluderku");


// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Ambil data keranjang belanja dari session
$cart = $_SESSION['cart'];

// Simpan data keranjang belanja ke database
foreach ($cart as $produk) {
    $nama_produk = $produk['name'];
    $harga = $produk['price'];
    $jumlah = $produk['quantity'];

    // Query SQL untuk menyimpan data ke tabel cart_items
    $sql = "INSERT INTO cart_items (product_name, price, quantity) VALUES ('$nama_produk', '$harga', '$jumlah')";

    // Jalankan query
    if (mysqli_query($koneksi, $sql)) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
