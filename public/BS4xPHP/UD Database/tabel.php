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
        echo "<td class='text-center'>
            <form action='/public/BS4xPHP/UD Database/Controller/' method='post'>
                <input type='number' name='id' hidden required readonly value='$d[0]'>
                <button type='submit' class='btn btn-sm btn-primary' name='submit' value='upd'>Ubah</button>
                <button type='submit' class='btn btn-sm btn-danger' name='submit' value='del'>Hapus</button>
            </form>
        </td>";
        echo "</tr>";
    }    
}

