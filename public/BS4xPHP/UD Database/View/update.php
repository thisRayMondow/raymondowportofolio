<?php
if (isset($_POST["submit"])) {
    if ($_POST["submit"] == "1") {
        $ID = $_POST["id"];
        $NAME = $_POST["name"];
        $PRIV = $_POST["priv"];
        include_once "../Controller/update.php";
        $setData = new updateData();
        $setData->checkData($ID, $NAME, $PRIV);
    }else{
        header("Location: /public/BS4xPHP/UD Database/");
    }
}else{
    header("Location: /public/BS4xPHP/UD Database/");
}
