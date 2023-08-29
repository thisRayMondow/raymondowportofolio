<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | MVC Sederhana</title>

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
            <a class="navbar-brand bg-info p-2" href="/public/BS4xPHP/MVC Sederhana/">CnG</a>
            <button type="button" id="navMenu" class="btn btm-sm btn-outline-info btn-info" onclick="openNav()"><small class="text-dark">|||</small></button>
        </nav>
    </div>

    <div class="content">
        <div class="sidebar c" id="sidebar">
            <ul class="nav flex-column">
                <?php include_once "view/nav.php"; ?>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">(keluar)</a>
                </li>
            </ul>
        </div>

        <div class="main bg-light card c" id="main">
            <div class="card p-2 mb-1" id="beranda">
                <h5 class="text-center"><u>Beranda</u></h5>
                <hr>

                <div class="container-xl mb-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        <strong> + Tambah</strong> 
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Artikel</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!-- <form action="" method="post"> -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="title"><small class="text-danger">*</small> Judul Artikel :</label>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Judul" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="auth"><small class="text-danger">*</small> Nama Penulis :</label>
                                            <input type="text" name="auth" id="auth" class="form-control" placeholder="Penulis" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="body"><small class="text-danger">*</small> Isi :</label>
                                            <textarea class="form-control" name="body" id="body" rows="3" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="tags"><small class="text-danger">*</small> Tag :</label>
                                            <input type="text" name="tags" id="tags" class="form-control" placeholder="Tag" required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" onclick="setData()" data-dismiss="modal">Kirim</button>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-xl">
                    <?php include_once "view/article.php"; ?>
                </div>
            </div>

            <div class="card p-2 mb-1" id="penulis">
                <h5 class="text-center"><u>Penulis</u></h5>
                <div class="container-xl">
                    <!-- View Penulis Disini -->
                </div>
            </div>

            <div class="card p-2 mb-1" id="kontak">
                <h5 class="text-center"><u>Kontak</u></h5>
                <div class="container-xl">
                    <!-- View Kontak Disini -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="card-footer text-center bg-light p-3 mt-3 mb-3">
        <strong> == &copy 2022 Ray Mondow Sagala == </strong>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="staticBackdropUpdate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ubah Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="titleU"><small class="text-danger">*</small> Judul Artikel :</label>
                            <input type="text" name="title" id="titleU" class="form-control" placeholder="Judul" required>
                        </div>

                        <div class="form-group">
                            <label for="authU"><small class="text-danger">*</small> Nama Penulis :</label>
                            <input type="text" name="auth" id="authU" class="form-control" placeholder="Penulis" required>
                        </div>

                        <div class="form-group">
                            <label for="bodyU"><small class="text-danger">*</small> Isi :</label>
                            <textarea class="form-control" name="body" id="bodyU" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tagsU"><small class="text-danger">*</small> Tag :</label>
                            <input type="text" name="tags" id="tagsU" class="form-control" placeholder="Tag" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        let page = "<?php echo $halaman;?>"
        document.getElementById(page).style.display = "block"
    </script>
    <script src="index.js"></script>
</body>
</html>