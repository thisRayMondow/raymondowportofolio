<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Session Logout</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="index.css">
</head>
<body class="bg-info">
    <div class="container-fluid">
        <div class="d-flex justify-content-center m-5 p-3">
            <form action="/public/BS4xPHP/Session Logout/validate/" method="post" class="bg-light">
                <div class="form-group text-center">
                    <h3>Masuk Halaman </h3>
                </div>
                <hr>

                <?php 
                    if (isset($_GET[md5("fail")])) { echo '<small class="form-text text-danger">Nama Pengguna atau Kata Sandi Salah</small>';}
                    else if (isset($_GET[md5("login")])) { echo '<small class="form-text text-info">Silahkan Login</small>';}
                    else{"";}
                ?>

                <div class="form-group">
                    <label for="name"><small class="text-danger">*</small> Nama Pengguna : </label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Default: admin" required autofocus maxlength="20">
                </div>

                <div class="form-group">
                    <label bel for="pass"><small class="text-danger">*</small> Kata Sandi : </label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Default: admin" required autofocus maxlength="10">
                </div>

                <div class="form-group text-right">
                    <button type="submit" name="send" value="1" class="btn btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>
</body>
</html>