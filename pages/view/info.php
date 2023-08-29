<?php
include_once 'pages/controller/handler.php';
$getInfo = new handler();
$info = $getInfo->getInfoData();

// var_dump($info);

foreach ($info as $val) {
    echo "<div class='title'>".$val["title"]."</div>";
    echo "<table>";
    foreach ($val["data"] as $data) {
        echo "<tr>";
        for ($d = 0; $d < count($data); $d++) {
            if ($d == 1) {
                echo "<th style='width:250px;'>";
                include 'pages/rating/'.$data[$d].'star.php';
                echo "</th>";
            }elseif ($d == 0){
                echo "<th style='width:200px;'>".$data[$d]."</td>";
            }else {
                echo "<th>".$data[$d]."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}