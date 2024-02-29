<?php
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$tanggal_penjualan = $_POST['tanggal_penjualan'];


mysqli_query($koneksi, "insert into pelanggan values('$id_pelanggan','$nama_pelanggan','$alamat','$nomor_telepon')");
mysqli_query($koneksi, "insert into penjualan values('','$tanggal_penjualan','','$id_pelanggan')");

header("location:pembelian.php?pesan=simpan");
?>