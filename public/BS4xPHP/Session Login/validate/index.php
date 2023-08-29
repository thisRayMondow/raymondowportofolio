<?php 
if (isset($_POST["send"])) {
    if ($_POST["send"] == 1) {
        include_once '../controller/controller.php';
        
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        $dLogin = new getData();
        $dataLogin = $dLogin->getDataUser($name, $pass);
        
        if ($dataLogin == 0) {
            header("Location: /public/BS4xPHP/Session Login/?".md5("fail"));
        }else {
            session_start();                       
            $_SESSION["pengguna"] = ucfirst($name);
            header("Location: /public/BS4xPHP/Session Login/halaman/");
            exit();
        }
    }else {
        header("Location: /public/BS4xPHP/Session Login/?".md5("login"));
    }
}else {
    header("Location: /public/BS4xPHP/Session Login/");
}
?>