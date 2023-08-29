<?php 
if (isset($_POST["send"])) {
    if ($_POST["send"] == 1) {
        
        $name = $_POST["name"];
        $pass = $_POST["pass"];
        
        if ($name != "admin") {
            header("Location: /public/BS4xPHP/Session Logout/?".md5("fail"));
        }else {
            if ($pass == "admin") {
                session_start();
                $_SESSION["pengguna"] = ucfirst($name);
                header("Location: /public/BS4xPHP/Session Logout/Halaman/");
            }else{
                header("Location: /public/BS4xPHP/Session Logout/?".md5("fail"));
            }
        }
    }else {
        header("Location: /public/BS4xPHP/Session Logout/?".md5("login"));
    }
}else {
    header("Location: /public/BS4xPHP/Session Logout/");
}
?>