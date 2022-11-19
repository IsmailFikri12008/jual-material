<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$material = query("SELECT * FROM material");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css">
    <title>Admin Material</title>
</head>
<body>
    

<input type="checkbox" name="" id="check">
<header>
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Dash<span>board</span></h3>
    </div>
    <div class="right-area">
        <a href="logout.php" class="logout_btn">Logout</a>
    </div>
</header>

<div class="sidebar">
    <center>
        <img src="" class="profile_image" alt="">
        <h1>Hello Admin</h1>
    </center>
    <a href="./admin.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="tambah.php"><i class="fas fa-cogs"></i><span>Tambah Data</span></a>
    <a href=""><i class="fas fa-info-circle"></i><span>About</span></a>
</div>


    
<div class="content">
    <br><br><br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword Perncarian....." autocomplete="off" autofocus class="keyword"> 
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>

    <div class="container">
        <table class="border-1" cellpadding="13" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Stok</th>
                <th>Categori</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
            
            <?php if (empty($material)) : ?>
                <tr>
                    <td colspan="8">
                        <h1>Bahan Tidak Ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($material as $mt) : ?>
            <tr>
                <td class="table-primary"><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mt['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $mt ['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="./img/<?= $mt['gambar']; ?>"></td>
                <td><?= $mt['nama']; ?></td>
                <td><?= $mt['merek']; ?></td>
                <td><?= $mt['stok']; ?></td>
                <td><?= $mt['categori']; ?></td>
                <td><?= $mt['harga']; ?></td>
                <td><?= $mt['deskripsi']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>

        </table>
    </div>
</div>


<script src="../js/script.js"></script>
</body>
</html>