<?php
    include '../function/fungsi.php';

    if(isset($_POST["submit"])){
        if(kirim_pesan($_POST) > 0){
            echo "
              <script>
                alert('Pesan Terkirim');
                document.location.href = 'contact.php';
              </script>
            ";
          }else{
            echo "
              <script>
                alert('Pesan gagal terkirim');
                document.location.href = 'contact.php';
              </script>
            ";
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBSITE DEMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="../css/kontakk.css">

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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
                    <a class="nav-link" aria-current="page" href="../html/index.php">Beranda</a>
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
                <li class="nav-item">
                    <a class="nav-link active" href="../html/contact.php">Kontak</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- hero -->
    <section class="hero position-relative" id="hero">
    </section>
    <!-- akhir hero -->

   <!-- main kontak -->
   <section id="main_kontak">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 title">
                    <h1>Kontak</h1>
                    <div class="card justify-content-center d-flex mt-4 mb-5">
                        <h2 class="mt-3">Lokasi</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3401924138395!2d119.49642182916824!3d-5.2058669997639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19f8082e8edff102!2zNcKwMTInMjEuMSJTIDExOcKwMjknNDkuMSJF!5e0!3m2!1sen!2sid!4v1657307976185!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="p-4"></iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="card p-4">
                        <h1>Info Kontak</h1>
                        <div class="ig d-flex">
                            <img src="../img/ig_kontak.png" alt="" width="40" class="mt-4 me-3">
                            <a href="https://www.instagram.com/demafstuinam/" class="align-items-center d-flex">Demafstuinam</a>
                        </div>
                        <div class="ig d-flex">
                            <img src="../img/fb_kontak.png" alt="" width="40" class="mt-4 me-3">
                            <a href="https://www.facebook.com/demafstuinam" class="align-items-center d-flex">Dema fst uinam</a>
                        </div>
                        <div class="ig d-flex">
                            <img src="../img/email_kontak.png" alt="" width="40" class="mt-4 me-3">
                            <a href="https://api.whatsapp.com/send?phone=6283141837571&text=Assalamualaikum Admin,Apakan anda bisa membantu saya?" target="_blank" class="align-items-center d-flex">Demafst@uin-alauddin.ac.id</a>
                        </div>
                        <div class="ig d-flex">
                            <img src="../img/lokasi_kontak.png" alt="" width="40" class="mt-4 me-3">
                            <a href="https://goo.gl/maps/1NH1MwPhoTeUwXPW6" class="align-items-center d-flex">Gedung Kesektariatan Fakultas <br> Sains Dan Teknologi</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <form action="" method="POST">
                        <div class="card p-4">
                            <h1 class="mb-3">Tulis Pesan</h1>
                            <div class="nama_email d-flex mb-3">
                                <input type="text" name="nama" class="form-control me-3" id="nama" placeholder="Nama">
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control" placeholder="Pesan"></textarea>
                            <div class="kirim_batal mt-3">
                                <button type="reset" class="btn btn-danger">Batal</button>
                                <button type="submit" class="btn btn-success" name="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </section>
   <!-- akhir main kontak -->


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