<?php
    $menu = ["Beranda", "Penulis", "Kontak"];
    if (empty($_GET["halaman"])) {
        $halaman = "beranda";
    }else{  
        $halaman = $_GET["halaman"];
    }
    
    for ($m=0; $m < count($menu); $m++) { 
        if ($halaman == strtolower($menu[$m])) {
            echo '<li class="nav-item"><a class="nav-link active" href="?halaman='.strtolower($menu[$m]).'">'.$menu[$m].'</a></li>';
        }else{
            echo '<li class="nav-item"><a class="nav-link" href="?halaman='.strtolower($menu[$m]).'">'.$menu[$m].'</a></li>';
        }
    }

?>