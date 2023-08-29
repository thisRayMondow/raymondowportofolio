<?php
include_once 'pages/controller/handler.php';

$proyekData = new handler();

$proyek = $proyekData->getProyek();

// var_dump($proyek);

foreach ($proyek as $v) {
    echo "<div class='title'>".$v["title"]."</div>";
    foreach ($v["data"] as $key => $val) {
        $no = $key+1;
        echo "<table>";
        echo "<tr>";
        echo "<td class='col1'>".$no."</td>";
        for ($data = 0; $data < count($val); $data++) {
            if ($data == 0) {
                echo "<td style='padding-left:10px;'>".$val[$data]."</td>";
            }else {
                if ($data == 3) {
                    echo "<td class='col2'><button style='background:#fff;border:transparent;'><a href='".$val[$data]."' target='_blank'><i class='bi bi-play-btn-fill' style='color:red;'></i></a></button></td>";
                }else {
                    if ($data == 1) {
                        echo "<td class='col2'><button style='background:whitesmoke;border:transparent;'><a href='".$val[$data]."' target='_blank'><i class='bi bi-file-earmark'></i></a></button></td>";
                    }else{
                        echo "<td class='col2'><button style='background:whitesmoke;border:transparent;'><a href='".$val[$data]."' target='_blank'><i class='bi bi-stack'></i></a></button></td>";
                    }
                }
            }
        }
        echo "</tr>";
        echo "</table>";
    }
}