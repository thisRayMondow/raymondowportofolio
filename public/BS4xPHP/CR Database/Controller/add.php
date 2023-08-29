<?php
if (isset($_POST["submit"])) {
    if ($_POST["submit"]== 1) {
        include_once "../Controller/sendData.php";
        $data = new CreateData();
        $data->Data($_POST["name"], $_POST["pass"], $_POST["priv"]);
    }else{
        echo "Tombol Berhasil Ditekan, ";
        echo "Akses Dibatasi";
    }
}else{
    header("Location: /public/BS4xPHP/CR Database/");
}