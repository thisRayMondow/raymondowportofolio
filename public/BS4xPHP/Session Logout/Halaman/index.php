<?php 
session_start();
if (!isset($_SESSION["pengguna"])) {
    header("Location: /public/BS4xPHP/Session Logout/?".md5("login"));
}else{
    include_once "halaman.php";
}
?>