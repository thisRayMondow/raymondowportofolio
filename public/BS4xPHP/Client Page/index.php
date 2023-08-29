<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Login Validate</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color: #1C3F60;">
    <div class="container-fluid" style="background-color: #B1D4E0; height: 500px;">
        <div class="d-flex justify-content-center pt-5 pb-5" >
            <form action="/public/BS4xPHP/Client Page/validate/" method="POST" class="mt-3" style="background-color: #1C3F60;">
                <div class="modal-header mt-1" style="font-size: 20px; background-color: #B1D4E0;">                    
                    <strong class="mx-auto">Masuk Halaman</strong>
                </div>

                <div class="modal-body" style="background-color: #B1D4E0;">
                    <div class="form-group">
                        <label for="InpUsr">Nama Pengguna: </label>
                        <input type="text" name="user" class="form-control text-center" id="InpUsr" autofocus required style="background-color: #1C3F60; color:aqua;">
                        <?php 
                            if (isset($_GET["wrong"])) {
                                echo '<small class="form-text text-danger">Nama Pengguna Salah</small>';
                            }
                        ?>
                    </div>

                    <div class="form-group">
                        <label for="InpPwd">Kata Sandi: </label>
                        <input type="password" name="pass" class="form-control text-center" id="InpPwd" required style="background-color: #1C3F60; color:aqua;">
                        <?php 
                            if (isset($_GET["wrong"])) {
                                echo '<small class="form-text text-danger">Kata Sandi Salah</small>';
                            }
                        ?>
                    </div>
                </div>

                <div class="modal-footer" style="background-color: #B1D4E0;">
                    <button type="submit" name="submit" value="1" class="btn" style="background-color: #1C3F60; color:aqua;">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center text-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>
</body>
</html>