<?php
include_once 'pages/controller/handler.php';
$getpict = new handler();
$pict = $getpict->getPict();
if (isset($_POST["submit"])) {
    return $page =  strtolower($_POST['submit']);
}else {
    return $page = "beranda";
}