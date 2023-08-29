<?php
include_once 'pages/controller/header.php';
?>
<div>
    <div class="Header">
    	<nav>
            <form action="/index.php" method="post">
                <?php include_once 'pages/view/nav.php';?>
            </form>
        </nav>
    </div>

    <div class="Body">
        <div class="beranda">
            <h3>Hai, Apa Kabar! Selamat Datang di halaman portofolio saya.</h3>
            <hr>
            <p style='font-size:18;'>
            Saya mengucapkan terimakasih atas kesediaan anda untuk mengkases halaman ini,
            halaman ini berisi beberapa informasi sederhana tentang saya, dan tidak lupa saya lampirkan  juga dokumen CV saya.
            </p>
            <hr>
            <button>Terimakasih</button> 
        </div>
        <div id="tentang">
            <h1 style="text-align: center;">Tentang Saya</h1>
            <hr>
            <section style="text-align: center;">
            <div>
                <!-- Change Pict -->
                <img src="asset/img/<?php echo $pict; ?>" width="200" height="200px"> 
                <h2><u>Ray Mondow Sagala</u></h2>
            </div>
            
            <article style="text-align: justify;">
                <h1 style="text-align: center;">Profil:</h1>
                <p>
                    <h4>
                        Perkenalkan, saya <b>Ray Mondow Sagala</b>, 
                        atau panggil saja saya dengan sebutan Ray, saya lahir di Pontianak pada 09 Agustus 1997.	
                        Saya sangat menyukai pemrograman Front-End dan Back-End, terutama pemrograman di bidang Back-End developer, 
                        Selain itu saya suka mencoba belajar hal-hal baru atau pengalaman-pengalaman baru di bidang pemrograman.
                        Sejauh ini saya mengerti dan memahami beberapa pemrograman Web seperti PHP, HTML, CSS, JavaScript.
                        dan juga memahami beberapa framework pemrograman seperti Laravel, ReactJs, Bootstrap.
                    </h4>                    
                </p>
            </section>
        </div>

        <div id="info">
            <h1 style="text-align: center;">Informasi Pribadi</h1>
            	<?php include_once 'pages/view/info.php';?>
            <hr>
            <h4>Lihat Lebih Lengkap => <button>
                <a href="./asset/file/CVRay Mondow Sagala.pdf" target="_blank" style="text-decoration: none;">CV Saya</a>
            </button></h4>
        </div>

        <div id="proyek">
            <h1 style="text-align: center;">Proyek Saya</h1>
            <?php include_once 'pages/view/proyek.php';?>
        </div>
    </div>

    <?php 
    echo '
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>
          $(window).load(function() {
            var hash = "#'.$page.'";
            $("html, body").animate({scrollTop:$(hash).offset().top});
          });
        </script>
    ';
    ?>
</div>