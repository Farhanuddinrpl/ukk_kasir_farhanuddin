<?php
include '../koneksi.php';

$stok = $_POST['stok'];
$id_produk = $_POST['id_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$harga = $_POST['harga'];
$detail_id = $_POST['detail_id'];
$id_pelanggan = $_POST['id_pelanggan'];
$subtotal = $jumlah_produk * $harga;
$stok_total = $stok - $jumlah_produk;


mysqli_query($koneksi, "update detailpenjualan set subtotal='$subtotal', jumlah_produk='$jumlah_produk' where detail_id='$detail_id'");
mysqli_query($koneksi, "update produk set stok='$stok_total' where id_produk='$id_produk'");

header("location:detail_pembelian.php?id_pelanggan=$id_pelanggan");
?>