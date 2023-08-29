<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP | Login</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->

    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container-fluid">
        <form action="#" method="post" class="container-sm card text-light" onsubmit="inputData()">
            <div class="form-group pt-3 text-center">
              <label> Masuk Akun </label>
            </div>
            <div class="form-group">
                <label for="name">Nama Pengguna :</label>
                <input type="text" class="form-control text-center" name="name" id="name" placeholder="nama" autofocus required maxlength="20">
            </div>
            
            <div class="form-group">
                <label for="pass">Kata Sandi :</label>
                <input type="password" class="form-control text-center" name="pass" id="pass" placeholder="sandi" required maxlength="10">
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-light">Submit</button>
            </div>
        </form>            
    </div>

    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>
    
    <script>
        function inputData(){
            let name = document.getElementById("name").value
            let pass = document.getElementById("pass").value

            window.alert("Nama = "+name+", Sandi = "+pass)
        }
    </script>
</body>
</html>