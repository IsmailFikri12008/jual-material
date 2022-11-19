<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.css" media="screen,projection" />

    <title>Tambah Data Material</title>
</head>
<body>
    <div class="container">

        <h4>Form Tambah Data Material</h4>

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <ul>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
                    <img src="img/nophoto.png" width="120" style="display: block;" class="img-preview" alt="">
                </li>
                <li>
                    <label for="nama">Nama :</label><br>
                    <input type="text" name="nama" id="nama" required><br><br>
                </li>
                <li>
                    <label for="merek">Merek :</label><br>
                    <input type="text" name="merek" id="merek" required><br><br>
                </li>
                <li>
                    <label for="stok">Stok :</label><br>
                    <input type="text" name="stok" id="stok" required><br><br>
                </li>
                <li>
                    <label for="categori">Categori :</label><br>
                    <input type="text" name="categori" id="categori" required><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="harga" required><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" required><br><br>
                </li>
                <br>
                <button type="submit" name="tambah" class="waves-effect waves-light btn-small">Tambah Data ! </button>
                <a href="admin.php" type="submit" class="waves-effect waves-light btn-small">Kembali</a>
            </ul>
            </div>
        </form>
    </div>

<script src="./js/main.js"></script>
</body>
</html>