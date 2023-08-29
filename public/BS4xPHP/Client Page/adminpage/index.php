<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color: #B1D4E0;">

    <div class="card text-center ml-1 mr-1 fixed-top" style="height:150px;">
        <div class="card-body mt-n3">            
            <img src="/asset/img/background.jpg" alt="IMG" width="75" height="75" style="border-radius: 50%;">
            <p class="card-text">Admin</p>
        </div>        
        <div class="d-flex p-2">
            <div class="dropdown open">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Menu"></button>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                    <form action="" method="post">
                        <button type="submit" name="beranda" class="dropdown-item">Beranda</button>
                        <button type="submit" name="pengguna" class="dropdown-item">Pengguna</button>
                        <button type="submit" name="aktifitas" class="dropdown-item">Aktifitas Log</button>
                    </form>
                    <hr>
                    <a class="dropdown-item" href="../../Client Page/">(keluar)</a>
                </div>
            </div>
        </div>        
    </div>

    <div class="card p-1 ml-1 mr-1 border border-light bg-transparent" style="height: 450px; margin-top:160px;">
        <?php
            if (isset($_POST["beranda"])) {
                include_once "pages/beranda.php";                
            }elseif (isset($_POST["pengguna"])) {
                include_once "pages/pengguna.php";                
            }elseif (isset($_POST["aktifitas"])) {
                include_once "pages/aktifitas.php";                
            }else {
                include_once "pages/beranda.php";
            }
        ?>        
    </div>

    <div style="background-color: #1C3F60; height: 150px;">
        <div class="text-center text-light p-3 mt-3 mb-3">
            <strong> == &copy 2022 Ray Mondow Sagala == </strong>
        </div>
    </div>
</body>
</html>