<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id= $_GET['id'];
$material = query("SELECT * FROM material WHERE id = $id");

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
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

    <title>Material</title>
</head>
<body>
    <div class="container">

        <h3>Form Ubah Data Material</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $material['id']; ?>">
            <ul>
                <li>
                    <input type="hidden" name="gambar_lama" value="<?= $material["gambar"]; ?>">
                    <label for="gambar">Gambar :</label><br>
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()"><br><br>
                    <img src="img/<?= $material["gambar"]; ?>" width="120" style="display: block;" class="img-preview" alt="">
                </li>
                <li>
                    <label for="nama">Nama :</label><br>
                    <input type="text" name="nama" id="nama" require value="<?= $material['nama']; ?>"><br><br>
                </li>
                <li>
                    <label for="merek">Merek :</label><br>
                    <input type="text" name="merek" id="merek" require value="<?= $material['merek']; ?>"><br><br>
                </li>
                <li>
                    <label for="stok">Stok :</label><br>
                    <input type="text" name="stok" id="stok" require value="<?= $material['stok']; ?>"><br><br>
                </li>
                <li>
                    <label for="categori">Categori :</label><br>
                    <input type="text" name="categori" id="categori" require value="<?= $material['categori']; ?>"><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="harga" require value="<?= $material['harga']; ?>"><br><br>
                </li>
                <li>
                    <label for="deskripsi">Deskripsi :</label><br>
                    <input type="text" name="deskripsi" id="deskripsi" require value="<?= $material['deskripsi']; ?>"><br><br>
                </li>
                <br>
                <button type="submit" name="ubah" class="waves-effect waves-light btn-small">Ubah Data ! </button>
                <a href="admin.php" type="submit" class="waves-effect waves-light btn-small">Kembali</a>
            </ul>
        </form>
    </div>

<script src="./js/main.js"></script>
</body>
</html>