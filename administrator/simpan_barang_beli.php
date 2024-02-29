<?php
include '../koneksi.php';

$id_produk = $_POST['id_produk'];
$detail_id = $_POST['detail_id'];
$id_pelanggan = $_POST['id_pelanggan'];

mysqli_query($koneksi, "update detailpenjualan set id_produk='$id_produk' where detail_id='$detail_id'");
header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");

?>