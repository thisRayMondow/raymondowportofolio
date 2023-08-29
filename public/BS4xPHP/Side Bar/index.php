<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Side Nav</title>

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
        <nav class="navbar navbar-light">
            <a class="navbar-brand bg-info p-2" href="/public/BS4xPHP/Side Bar/">CnG</a>
            <button type="button" class="btn btm-sm btn-outline-info" onclick="openNav()">| <small class="text-dark">Menu</small></button>
        </nav>
    </div>

    <div class="content">
        <div class="sidebar" id="sidebar">
            <ul class="nav flex-column">
                <?php include_once "nav.php"; ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">(keluar)</a>
                </li>
            </ul>
        </div>

        <div class="main bg-light card" id="main">
            <div class="card p-2 mb-1" id="beranda">
                <h5 class="text-center"><u>Beranda</u></h5>
                <div class="container-xl">
                    <p>Ini merupakan Halaman Beranda</p>
                </div>
            </div>

            <div class="card p-2 mb-1" id="penulis">
                <h5 class="text-center"><u>Penulis</u></h5>
                <div class="container-xl">
                    <p>Ini merupakan Halaman Penulis</p>
                </div>
            </div>

            <div class="card p-2 mb-1" id="kontak">
                <h5 class="text-center"><u>Kontak</u></h5>
                <div class="container-xl">
                    <p>Ini merupakan Halaman Kontak</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>

    <script>
        let page = "<?php echo $halaman;?>"
        document.getElementById(page).style.display = "block"

        function openNav(){
            let sidebar = document.getElementById("sidebar")
            let main = document.getElementById("main")
            if (sidebar.style.display == "none") {
                sidebar.style.display = "block"
                main.style.width = "80%"
            }else{
                sidebar.style.display = "none"
                main.style.width = "100%" 
            }
        }
    </script>
</body>
</html>