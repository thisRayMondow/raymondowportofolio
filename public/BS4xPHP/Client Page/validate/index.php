<?php
    if (isset($_POST["submit"])) {
        if ($_POST["submit"] == 1) {
            if ($_POST["user"] == "admin") {
                if ($_POST["pass"] == "admin123") {
                    header("Location: ../adminpage/");
                    exit();
                }else {
                    header("Location: ../?wrong");
                    exit();
                }
            }else if($_POST["user"] == "user") {
                if ($_POST["pass"] == "user123") {
                    header("Location: ../userpage/");
                    exit();
                }else {
                    header("Location: ../?wrong");
                    exit();
                } 
            }else {
                header("Location: ../?wrong");
                exit();
            }
        }else {
            header("Location: ../?wrong");
            exit();
        }
    }else{
        header("Location: ../?wrong");
        exit();
    }
?>