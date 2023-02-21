<?php 
    include '../function/fungsi.php';
    $table_pengumuman = query("SELECT * FROM table_pengumuman ORDER BY id DESC LIMIT 3");
    $table_artikel = query("SELECT * FROM table_artikel ORDER BY id_artikel DESC LIMIT 3");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBSITE DEMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../css/styleindex.css">

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- ck editor -->
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

    <!-- hover cursor -->
    <link rel="stylesheet" href="../css/cursor.css">

  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a href="../html/index.php"><img src="../img/logo.png" alt="" width="68"></a>
            <span>
            Dema Fakultas <br> Sains dan Teknologi
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../html/index.php">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Himpunan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://tar.fst.uin-alauddin.ac.id/">Arsitektur</a></li>
                        <li><a class="dropdown-item" href="http://tin.fst.uin-alauddin.ac.id/">Teknik Informatika</a></li>
                        <li><a class="dropdown-item" href="http://fis.fst.uin-alauddin.ac.id/">Fisika</a></li>
                        <li><a class="dropdown-item" href="http://pwk.fst.uin-alauddin.ac.id/">Teknik Perencanaan Wilayah dan Kota</a></li>
                        <li><a class="dropdown-item" href="http://bio.fst.uin-alauddin.ac.id/">Biologi</a></li>
                        <li><a class="dropdown-item" href="http://ptr.fst.uin-alauddin.ac.id/">Peternakan</a></li>
                        <li><a class="dropdown-item" href="http://mat.fst.uin-alauddin.ac.id/hmj/">Matematika</a></li>
                        <li><a class="dropdown-item" href="http://kim.fst.uin-alauddin.ac.id/">Kimia</a></li>
                        <li><a class="dropdown-item" href="http://sin.fst.uin-alauddin.ac.id/">Sistem Informasi</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../html/profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="../html/bidang.php">Presidium</a></li>
                        <li><a class="dropdown-item" href="../html/bidangakhlakmoral.php">Akhlak & Moral</a></li>
                        <li><a class="dropdown-item" href="../html/bidangpenalaran.php">Penalaran & Keilmuan</a></li>
                        <li><a class="dropdown-item" href="../html/bidangbakatminat.php">Bakat & Minat</a></li>
                        <li><a class="dropdown-item" href="../html/bidanghumas.php">Humas & Advokasi</a></li>
                        <li><a class="dropdown-item" href="../html/bidangpembinaan.php">Pembinaan & Pengembangan Organisasi</a></li>
                        <li><a class="dropdown-item" href="../html/bidangkominfo.php">Komunikasi & Informasi</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/anouncement.php">Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../html/article.php">Artikel</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="../html/contact.php">Kontak</a>
                </li>
            </ul>
            <a href="../admin/login.php" class="btn btn-light text-danger fw-bold">Login</a>
        </div>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- hero -->
    <section class="hero position-relative" id="hero">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 position-absolute top-50 start-50 translate-middle isi">
                    <p class="title">Dewan Eksekutif Mahasiswa</p>
                    <p class="subtitle">Fakultas Sains Dan Teknologi <br>
                    Universitas Islam Negeri Alauddin Makassar</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir hero -->

     <!-- pengumuman -->
     <section id="pengumuman">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 title">
                    <h1>Pengumuman</h1>
                </div>
            </div>

            <div class="row d-flex cards">
                <?php foreach ($table_pengumuman as $p): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4 mt-3 deskripsi">
                    <div class="card">
                        <p> <?=$p['tgl_pengumuman']; ?></p>
                        <h1> <?=$p['judul_pengumuman']; ?></h1>
                        <h4> <?=$p['deskripsi_singkat']; ?></h4>
                        <div class="card-selengkapnya mt-2">
                            <form action="anounselengkapnya.php" method="post">
                                <input type="hidden" name="id" value="<?= $p['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Lihat Selengkapnya</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- akhir pengumuman -->

    <!-- artikel -->
    <section id="artikel"> 
        <div class="container">
            <div class="row">
                <div class="col-12 text-center title">
                    <h1>Artikel Kegiatan</h1>
                </div>
            </div>

            <div class="row cards">
                <?php 
                    foreach ($table_artikel as $artikel): 
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                        <div class="card">
                            <img src="../foto/<?= $artikel['gambar'];?>" alt="">
                            <div class="keterangan">
                                <h1><?= $artikel ['judul_artikel'];?></h1>
                                <form action="articleselengkap.php" method="post" class="mt-2">
                                    <input type="hidden" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Lihat Selengkapnya</button>
                                </form>
                            </div>
                        </div>
                    </div>          
                <?php endforeach; ?>  
            </div>
        </div>
    </section>
    <!-- akhir artikel -->

    <!-- kontak -->
    <section id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h1>Kampus</h1>
                    <a href="https://goo.gl/maps/1NH1MwPhoTeUwXPW6">Gedung Kesektariatan Fakultas Sains Dan Teknologi
                    Universitas Islam Negeri Alauddin Makassar</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h1>Kontak</h1>
                    <a href="https://api.whatsapp.com/send?phone=6283141837571&text=Assalamualaikum Admin,Apakan anda bisa membantu saya?" target="_blank">Demafst@uin-alauddin.ac.id</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h1>Sosial Media</h1>
                    <a href="https://www.instagram.com/demafstuinam/">
                        <img src="../img/ig.png" alt="" class="me-2">
                        Demafstuinam
                    </a> <br>
                    <a href="https://www.facebook.com/demafstuinam">
                        <img src="../img/fb.png" alt="" class="me-2 mt-3">
                        Dema fst uinam
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir kontak -->

    <!-- footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <p>© 2022 Dema FST UINAM. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

