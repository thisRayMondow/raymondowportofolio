<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS4xPHP Native | Form Modal</title>

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
            <a class="navbar-brand bg-info p-2" href="/public/BS4xPHP/Form Modal/">CnG</a>
            <button type="button" id="navMenu" class="btn btm-sm btn-outline-info btn-info" onclick="openNav()"><small class="text-dark">|||</small></button>
        </nav>
    </div>

    <div class="content">
        <div class="sidebar c" id="sidebar">
            <ul class="nav flex-column">
                <?php include_once "nav.php"; ?>
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
                    <div class="border border-primary rounded-lg p-3 mb-1">
                        <strong><h5><u id="title1">Pemrograman Web Dasar</u> (<small id="author1">Ray M.S</small>)</h5></strong>
                        <p class="text-justify" id="body1">Pemrograman web adalah proses pengembangan aplikasi website dengan menggunakan bahasa pemrograman khusus. Proses pembuatan program dibantu dengan software khusus.</p>
                        <small><b id="tag1">Pemrograman, Pemrograman Web, Web Dasar, Pemrograman Dasar.</b></small>
                        <div class="mt-1 text-right">
                            <button class="btn btn-sm btn-danger" onclick="delNotice()">Hapus</button>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdropUpdate" onclick="updateArticle(1)">Ubah</button>
                        </div>
                    </div>

                    <div class="border border-primary rounded-lg p-3 mb-1">
                        <strong><h5><u id="title2">Jaringan Komputer</u> (<small id="author2">Alfonso Lian</small>)</h5></strong>
                        <p class="text-justify" id="body2">Jaringan komputer adalah sekumpulan komputer yang berbagi sumber daya yang terletak di atau disediakan oleh node jaringan. Komputer menggunakan protokol komunikasi umum melalui interkoneksi digital untuk berkomunikasi satu sama lain.</p>
                        <small><b id="tag2">Komputer, Jaringan, Jaringan Komputer.</b></small>
                        <div class="mt-1 text-right">
                            <button class="btn btn-sm btn-danger" onclick="delNotice()">Hapus</button>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdropUpdate" onclick="updateArticle(2)">Ubah</button>
                        </div>
                    </div>

                    <div class="border border-primary rounded-lg p-3 mb-1">
                        <strong><h5><u id="title3">Komputer Personal</u> (<small id="author3">Ronald P</small>)</h5></strong>
                        <p class="text-justify" id="body3">Komputer pribadi (PC) adalah komputer mikro multiguna yang ukuran, kemampuan, dan harganya membuatnya layak untuk penggunaan individu. Komputer pribadi dimaksudkan untuk dioperasikan secara langsung oleh pengguna akhir, bukan oleh ahli komputer atau teknisi.</p>
                        <small><b id="tag3">Komputer, Komputer Personal, PC, Personal Computer.</b></small>
                        <div class="mt-1 text-right">
                            <button class="btn btn-sm btn-danger" onclick="delNotice()">Hapus</button>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdropUpdate" onclick="updateArticle(3)">Ubah</button>
                        </div>
                    </div>

                    <div class="border border-primary rounded-lg p-3 mb-1" style="display: none;" id="4">
                        <strong><h5><u id="title4"></u> (<small id="author4"></small>)</h5></strong>
                        <p class="text-justify" id="body4"></p>
                        <small><b id="tag4"></b></small>
                        <div class="mt-1 text-right">
                            <button class="btn btn-sm btn-danger" onclick="delNotice()">Hapus</button>
                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#staticBackdropUpdate" onclick="updateArticle(4)">Ubah</button>
                        </div>
                    </div>
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