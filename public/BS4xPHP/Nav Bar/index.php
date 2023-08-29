<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Nav Bar</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="index.css">
</head>
<body class="bg-info">
    <div class="card-footer text-center bg-light mb-2">
        <nav class="navbar navbar-expand-sm navbar-light">
            <a class="navbar-brand bg-info p-2 mb-2" href="/public/BS4xPHP/Nav Bar/">CnG</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav">
                    <?php include_once "nav.php" ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">(Keluar)</a>
                    </li>
                </ul>
            </div>
        </nav>        
    </div>

    <div class="content bg-light">
        <div class="jumbotron card mb-2" id="beranda">
            <h4 class="text-center mb-3"><u>Beranda</u></h4>
            <div class="container-fluid">
                <p>Ini Merupakan Halaman Beranda</p>
            </div>
        </div>
        
        <div class="jumbotron card mb-2" id="penulis">
            <h4 class="text-center mb-3"><u>Penulis</u></h4>
            <div class="container-fluid">
                <p>Ini Merupakan Halaman Penulis</p>
            </div>
        </div> 

        <div class="jumbotron card mb-2" id="kontak">
            <h4 class="text-center mb-3"><u>Kontak</u></h4>
            <div class="container-fluid">
                <p>Ini Merupakan Halaman Kontak</p>
            </div>
        </div> 
    </div>
    
    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>

    
    <script>
        let page = "<?php echo $halaman;?>"
        document.getElementById(page).style.display = "block"
    </script>
</body>
</html>