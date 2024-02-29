<?php
include '../koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];


mysqli_query($koneksi, "delete from pelanggan where id_pelanggan='$id_pelanggan'");
mysqli_query($koneksi, "delete from penjualan where id_pelanggan='$id_pelanggan'");

header("location:pembelian.php?pesan=hapus");
?>