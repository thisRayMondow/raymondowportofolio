<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Post-Get Database</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
</head>
<body class="pl-2 pr-2 bg-info">
    <div class="card p-3" style="overflow-x: scroll;">
        <h4> <a href="/public/BS4xPHP/GetPost Database/" style="text-decoration: none;" data-toggle="tooltip" data-placement="bottom" title="Muat Ulang">&#128260;</a> Data Pengguna</h4>

        <form action="" method="get" class="d-flex flex-row-reverse bd-highlight">
            <div class="form-group">
                <small id="helpId" class="form-text text-muted text-right"><b>Tekan Enter</b> untuk mencari</small>
                <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari Disini" aria-describedby="helpId">
            </div>
        </form>

        <table class="table table-hover table-bordered table-striped mt-2">
            <thead class="thead-dark text-center">
                <tr>
                <th scope="col" style="width: 50px;">ID</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Kata Sandi</th>
                <th scope="col">Hak Akses</th>
                </tr>
            </thead>
            <tbody>
                <?php include_once "data.php"; ?>
            </tbody>
        </table>
    </div>

    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>
</body>
</html>