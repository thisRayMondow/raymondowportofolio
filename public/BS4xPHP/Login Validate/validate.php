<?php
if (isset($_POST['send'])== 1) {
    $nama = $_POST['name'];
    $pass = $_POST['pass'];
    $code = "";

    if ($nama == "admin") {
        if ($pass == "admin123") {
            header("Location: beranda.php");
            // echo "Berhasil Login";
        }else {
            $code = 101;
        }
    }else{
        $code = 101;
    }

}else{
    $code = "";
}
?>