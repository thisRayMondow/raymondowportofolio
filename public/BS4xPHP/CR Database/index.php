<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | CR Database</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
</head>
<body class="pl-2 pr-2 bg-info">
    <div class="card p-3" style="overflow-x: scroll;">
        <h4> <a href="/public/BS4xPHP/CR Database" style="text-decoration: none;" data-toggle="tooltip" data-placement="bottom" title="Muat Ulang">&#128260;</a> Data Pengguna</h4>

        <form action="" method="post" class="d-flex flex-row-reverse bd-highlight">
            <div class="form-group">
                <small id="helpId" class="form-text text-muted text-right"><b>Tekan Enter</b> untuk mencari</small>
                <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari Disini" aria-describedby="helpId">
            </div>
        </form>

        <button type="button" name="" id="" class="btn btn-primary btn-sm" style="width: 150px;" data-toggle="modal" data-target="#InputData">
        <strong>&plus;</strong>
        Tambah Pengguna</button>

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
                <?php include "tabel.php";?>
            </tbody>
        </table>
    </div>    
    <!-- Modal -->
    <div class="modal fade" id="InputData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pengguna</h5>
                </div>

                <form action="/public/BS4xPHP/CR Database/Controller/add.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="name">Nama Pengguna : </label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Nama" required maxlength="20">
                        </div>

                        <div class="form-group">
                          <label for="pass">Kata Sandi : </label>
                          <input type="password" class="form-control" name="pass" id="pass" placeholder="Sandi" required maxlength="10">
                        </div>

                        <div class="form-group">
                          <label for="priv">Hak Akses</label>
                          <select class="form-control" name="priv" id="priv" required>
                            <option></option>
                            <option>Admin</option>
                            <option>Pengguna</option>
                          </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" value="1" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>
</body>
</html>