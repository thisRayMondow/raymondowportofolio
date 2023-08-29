<?php
include_once "Controller/getData.php";
$data = new ReadData();
if (!$data->Data() || count($data->Data()) == 0 ) {
    echo "<tr>";
        echo "<td colspan='4' class='text-center'>=== Tidak Ada Data ===</td>";
    echo "</tr>";
}else {
    foreach ($data->Data() as $d) {
        echo "<tr>";
        for ($data=0; $data < count($d); $data++) { 
            echo "<td>".$d[$data]."</td>";
        }
        echo "</tr>";
    }    
}

