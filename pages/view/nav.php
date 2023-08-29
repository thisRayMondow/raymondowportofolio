<?php
include_once 'pages/controller/handler.php';

$getNav = new handler();
$nav = $getNav->getNav();

/** Create Menu*/
for ($i = 0; $i < count($nav); $i++) {
    if (strtolower($nav[$i])==strtolower($page) ) {
        if (strtolower($nav[$i])=='tentang') {
            echo '<button type="submit" name="submit" value="'.strtolower($nav[$i]).'" class="active">Tentang Saya</button>';
        }else {
            echo '<button type="submit" name="submit" value="'.strtolower($nav[$i]).'" class="active">'.ucwords($nav[$i]).'</button>';
        }
        
    }else {
        if (strtolower($nav[$i])=='tentang') {
            echo '<button type="submit" name="submit" value="'.strtolower($nav[$i]).'">Tentang Saya</button>';
        }else {
            echo '<button type="submit" name="submit" value="'.strtolower($nav[$i]).'">'.ucwords($nav[$i]).'</button>';
        }
    }
}