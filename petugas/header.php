<?php
session_start();
 if($_SESSION['level']==""){
    header("location:../index.php?pesan=gagal");
 }
?>
<!DOCTYPE html>
<head>
    <title>Halaman Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">