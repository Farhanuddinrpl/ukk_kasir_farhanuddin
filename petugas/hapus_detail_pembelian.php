<?php
include '../koneksi.php';

$detail_id = $_POST['detail_id'];
$id_pelanggan = $_POST['id_pelanggan'];

mysqli_query($koneksi, "delete from detailpenjualan where detail_id='$detail_id'");
header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");

?>