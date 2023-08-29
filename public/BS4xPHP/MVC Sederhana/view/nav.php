<?php
include_once './controller/controller.php';

$navData = new get();
$nav = $navData->getNav();

if (empty($_GET["halaman"])) {
    $halaman = "beranda";
}else{
    $halaman = $_GET["halaman"];
}

for ($n = 0; $n < count($nav); $n++) {
    if ($halaman == strtolower($nav[$n])) {
        echo '<li class="nav-item"><a class="nav-link text-dark active" href="?halaman='.strtolower($nav[$n]).'">'.$nav[$n].'</a></li>';
    }else{
        echo '<li class="nav-item"><a class="nav-link text-dark" href="?halaman='.strtolower($nav[$n]).'">'.$nav[$n].'</a></li>';
    }
}