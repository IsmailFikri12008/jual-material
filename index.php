<?php

require 'functions.php';
$material = query("SELECT * FROM material");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Material</title>
    <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.css" media="screen,projection" />

    <!--My CSS-->
    <link rel="stylesheet" href="/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!-- <br>
    <h1>Buku</h1>

    <br><br>

    <br> -->


    <!--Navbar-->
    <div class="navbar-fixed">
        <nav class="red darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Material</a>
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

    <section id="services" class="services white lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-2">Tentang</h3>
                <br>
                <div class="col s12 center">
                    <p class="black-text">GRC.MULIA ABADI adalah jasa pembuatan dan GRC cetak, dimana GRC cetak
                        dapat di aplikasikan untuk ornamen penutup dinding bangunan lama atau bangunan
                        baru, bisa juga sebagai ornamen tambahan untuk mempercantik tampilan bangunan
                        anda. GRC memiliki ketahanan terhadap cuaca atau suhu tertentu karena mengandung
                        serat alkali.</p>
                        <br>
                        <p class="black-text">Beberapa produk kami antara lain:</p>
                        <p class="black-text">- GRC Kubah masjid</p>
                        <p class="black-text">- GRC Menara masjid</p>
                        <p class="black-text">- GRC krawangan</p>
                        <p class="black-text">- GRC Relief</p>
                        <p class="black-text">- GRC Panel</p>
                        <p class="black-text">- GRC Cladding</p>
                        <p class="black-text">- GRC Lisplang</p>
                        <p class="black-text">- GRC Ornament Interior/Exterior</p>
                        <p class="black-text">- Vent-block (Roster beton) dll.</p>
                        <br>
                        <p class="black-text">Keunggulan produk GRC.Mulia Abadi:</p>
                        <p class="black-text">- Mampu memproduksi bahan-bahan yang rumit</p>
                        <p class="black-text">- Bisa di cetak dalam bentuk apapun</p>
                        <p class="black-text">- Ringan,Kuat, dan mudah dalam pemasangan</p>
                        <p class="black-text">- Dapat mengurangi beban dalam kontruksi gedung</p>
                        <p class="black-text">- Tahan terhadap cucaca lembab,panas(api),perubahan cuaca</p>
                        <p class="black-text">- Tahan lama serta mudah dalam pemeliharaan.</p>
                </div>
            </div>
        </div>
    </section>

    
 <section id="about" class="about scrollspy">
        <div class="container">
            <div class="about">
                <br>
                <h3 class="center light grey-text text-darken-2">Product Material</h3>
                <br>
                <br>
                <div class="row">
                <?php foreach ($material as $mt) :?>
                    <div class="col m4 s12">
                        <div class="card" style="width: 200px; height: 600px;">
                            <div class="card-image">
                                <img src="./img/<?= $mt['gambar']; ?>" style="width: 500px; height: 300px" class="responsive-img materialboxed">
                            </div>
                            <br><br>
                            <div class="card-content">
                                <p style="text-align:center;"><?= $mt['nama']; ?></p>
                                <p style="text-align:center;"><?= $mt['merek']; ?></p>
                                <p style="text-align:center;"><?= $mt['stok']; ?></p>
                                <br>
                                <br>
                                <button type="button" class="btn btn-secondary"><a href="detail.php?id=<?= $mt['id'] ?>" style="color: white; text-decoration: none; margin-left: 7px; margin-right: 10px; text-align: center;">Selengkapnya</a></button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div> 
    </section>


    <!--Contact Us-->
    <section id="contact" class="scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Contact Us</h3>
            <div class="row">
                <div class="col s12 center">
                    <div class="card-panel red darken-4 center white-text">
                        <i class="material-icons">email</i>
                        <h5>Contact</h5>
                        <p>Jika ingin lebih tahu, contact:</p>
                    </div>
                    <ul class="collection width-header">
                        <li class="collection-header">
                            <h4>Our Office</h4>
                        </li>
                        <li class="collection-item">GRC CV.MULIA ABADI</li>
                        <li class="collection-item">Cibereum Cisarua Puncak Bogor</li>
                        <li class="collection-item">Jawa Barat, Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


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

    <script type="text/javascript" src="./materialize/js/materialize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/js/script.js"></script>
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

</html>