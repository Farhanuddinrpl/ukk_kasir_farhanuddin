<?php
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$id_penjualan = $_POST['id_penjualan'];

mysqli_query($koneksi, "INSERT INTO detailpenjualan (id_penjualan, id_produk, jumlah_produk, subtotal)  VALUES ('$id_penjualan', NULL, 0, 0)");
header("location:detail_pembelian.php?id_pelanggan='$id_pelanggan'");
?>