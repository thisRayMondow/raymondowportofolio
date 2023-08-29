<?php
if (isset($_POST["submit"])) {
    if ($_POST["submit"]== 1) {
        $id = $_POST["id"];
        include_once "../Controller/delete.php";
        $delData = new deleteData();
        $delData->checkData($id);
    }else{
        header("Location: /public/BS4xPHP/UD Database/");
    }
}else{
    header("Location: /public/BS4xPHP/UD Database/");
}