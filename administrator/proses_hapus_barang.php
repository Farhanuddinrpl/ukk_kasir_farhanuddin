<?php
include '../koneksi.php';

$id_produk = $_POST['id_produk'];


mysqli_query($koneksi, "delete from produk where id_produk='$id_produk'");
header("location:data_barang.php?pesan=hapus");
?>