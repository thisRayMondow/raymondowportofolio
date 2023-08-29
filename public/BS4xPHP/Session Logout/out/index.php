<?php 
session_start();
session_unset();
session_destroy();
header("Location: /public/BS4xPHP/Session Logout/");
?>