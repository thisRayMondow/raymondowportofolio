<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4 x PHP Native | Update Delete Database</title>

     <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/asset/bs-4/css/bootstrap.min.css">
    <script src="/asset/bs-4/js/jquery.slim.min.js"></script>
    <script src="/asset/bs-4/js/popper.min.js"></script>
    <script src="/asset/bs-4/js/bootstrap.min.js"></script>
    <!-- Bootstrap 4 -->
</head>
<body onload="action()">
    <!-- Modal -->
    <div class="modal fade" id="UpdateData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Data Pengguna</h5>
                </div>
                <form action="/public/BS4xPHP/UD Database/View/update.php" method="post">
                    <div class="modal-body">
                        <input type="text" class="form-control" name="id" id="id" required maxlength="20" value="<?php echo $id; ?>" hidden>
                        
                        <div class="form-group">
                          <label for="name">Nama Pengguna : </label>
                          <input type="text" class="form-control" name="name" id="name" required maxlength="20" value="<?php echo $dataUpadate["Nama"]; ?>">
                        </div>

                        <div class="form-group">
                          <label for="priv">Hak Akses</label>
                          <select class="form-control" name="priv" id="priv" required>
                            <option><?php echo $dataUpadate["Hak"]; ?></option>
                            <option>Admin</option>
                            <option>Pengguna</option>
                          </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '/public/BS4xPHP/UD Database'">Batal</button>
                        <button type="submit" name="submit" value="1" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
    function action(){
        $("#UpdateData").modal("show");
    }
</script>
</body>
</html>