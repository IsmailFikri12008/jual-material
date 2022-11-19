<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $material = query("SELECT * FROM material WHERE id = $id");
?>

<!DOCTYPE html>
  <html>
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css">
      <link rel="stylesheet" href="./materialize/css/materialize.min.css">
      <link rel="stylesheet" href="detail.css">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--My Css -->
    <style>
        body {
            background-color: white;
        } 
    </style>

</head>
<title>Detail</title>
    <body>

    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="red darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="./detail.php" class="brand-logo">Buku</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="registrasi.php">Registrasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
        <li><a href="login.php">Login</a></li>
        <li><a href="registrasi.php">Registrasi</a></li>
    </ul>

    <div class="container white">
        <div class="section">
            <div class="row">

            <div class="card">
                <a href="detail.php?id=<?= $material['id']; ?>"></a>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="./img/<?= $material['gambar']; ?>" class="responsive-img">
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card-content">
                        <p style="text-align:left;">Nama : <?= $material['nama']; ?></p>
                        <br>
                        <p style="text-align:left;">Merek : <?= $material['merek']; ?></p>
                        <br>
                        <p style="text-align:left;">Stok : <?= $material['stok']; ?></p>
                        <br>
                        <p style="text-align:left;">Categori : <?= $material['categori']; ?></p>
                        <br>
                        <p style="text-align:left;">Harga : <?= $material['harga']; ?></p>
                        <br>
                        <br>
                        <br> <br>
                        <div class="col m4 s12">
                            <div class="center">
                                <i class="material-icons medium">cached</i>
                            </div>
                            <div class="center">
                                <a href="#" class="center medium">10 Hari <br> Penggantian</a>
                            </div>
                        </div>

                        <div class="col m4 s12">
                            <div class="center">
                                    <i class="material-icons medium">local_shipping</i>
                            </div>
                            <div class="center">
                                    <a href="#" class="center medium">Pengiriman <br> Cepat</a>
                            </div>                    
                        </div>
                        <div class="col m4 s12">
                        <div class="center">
                                <i class="material-icons medium">done_all</i>
                            </div>
                            <div class="center">
                                <a href="#" class="center medium">1 Tahun <br> Garansi</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container white">
        <h2 class="center">Deskripsi</h2>
        <div class="row">
            <div class="col s12">
                <p style="text-align:left;"><?= $material['deskripsi']; ?></p>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container center">
        <a href="index.php" class="waves-effect waves-light btn-large">Kembali</a>
        <a href="https://wa.me/6281296875396" class="waves-effect waves-light btn-large">Beli</a>
    </div>
    <br>
    <br><br>
    <br>


    <!-- start #footer -->
 <footer class="grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        <h4 class="white-text">GRC CV.MULIA ABADI</h4>
            <p class="white-text">GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak
                dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan
                baru, bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan
                anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung
                serat alkali.</p>
        </div>
        <div class="col l3 s12">
        <h4 class="white-text">Information</h4>
            <ul>
                <li><a href="https://instagram.com/grc_cv.muliaabadi?igshid=YmMyMTA2M2Y=" class="white-text">About Us</a></li>
                <br>
                <li><a href="https://www.privacypolicyonline.com/" class="white-text">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col l3 s12">
            <h4 class="white-text">My Account</h4>
            <ul>
                <li><a href="#" class="white-text">Gmail</a></li>
                <br>
                <li><a href="https://instagram.com/grc_cv.muliaabadi?igshid=YmMyMTA2M2Y=" class="white-text">Instagram</a></li>
                <br>
            </ul>      
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="white-text center">
        Copyright &copy;<script>
        document.write(new Date().getFullYear());
        </script> All rights reserved | GRC CV.MULIA ABADI <br>
    </div>
    <br>
</footer>


</body>
</html>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize/js/materialize.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--My Javascript-->
<script src="javascript.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {
            edge: 'left',
            draggable: true,
            inDuration: 250,
            outDuration: 200,
            onOpenStart: null,
            onOpenEnd: null,
            onCloseStart: null,
            onCloseEnd: null,
            preventScrolling: true
        });
    });
</script>

    </body>      
    </body>