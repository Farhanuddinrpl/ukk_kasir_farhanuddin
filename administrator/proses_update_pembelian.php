<?php
include '../koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];


mysqli_query($koneksi, "update pelanggan set nama_pelanggan='$nama_pelanggan', nomor_telepon='$nomor_telepon', alamat='$alamat' where id_pelanggan='$id_pelanggan'");

header("location:pembelian.php?pesan=update");
?>