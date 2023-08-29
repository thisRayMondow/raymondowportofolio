<?php
if (!$_POST) {
    header("Location: /public/BS4xPHP/UD Database/");
}else{
    if ($_POST['submit']== "upd") {
        $id = $_POST["id"];
        include_once "getData.php";
        $setData = new ReadData();
        $dataUpadate = $setData->dataUpadate($id);
        include "../View/index.php";
    }elseif($_POST['submit'] == "del"){
        $id = $_POST["id"];
        include "../View/Del/index.php";
    }else{
        header("Location: /public/BS4xPHP/UD Database/");
    }
}