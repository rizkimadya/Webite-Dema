<?php
  session_start();

  if(isset($_GET['logout'])){
    unset($_SESSION['admindema']);
    header('Location: ../admin/login.php');
  }else if(!isset($_SESSION['admindema'])){
    header('Location: ../admin/login.php');
  }
  
  include '../function/fungsi.php';
  if(isset($_POST["submit"])){
    if(tambah_artikel($_POST) > 0){
      echo"
        <script>
          alert('Artikel Berhasil ditambahkan');
          document.location.href = '../admin/tampilartikel.php';
        </script>
      ";
    }else{
      echo"
      <script>
        alert('Artikel Gagal ditambahkan');
        document.location.href = '../admin/tambahartikel.php';
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
  <title>Dashboard Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- link css -->
  <link rel="stylesheet" href="styletambah.css">

  <!-- link font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- link icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <!-- ck editor -->
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

  <section id="dashbord">
    <div class="row">
      <div class="col-lg-3 col-md-12 bar">
        <div class="sticky-top">

          <div class="text-center">
            <img src="../img/logo.png" alt="" class="py-3">
            <h1>Dema Fakultas <br> Sains dan Teknologi</h1>
            <hr>
          </div>
          <div class="container ps-5">
            <div class="link_dashbord mt-4 d-flex">
              <i class="bi bi-menu-button-fill text-white"></i>
              <a href="dashbord.php">Dashboard</a>
            </div>
            <div class="mt-4">
              <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                  class="bi bi-award-fill"></i>
                Pengumuman
              </a>
              <ul class="dropdown-menu bg-dark p-4">
                <div class="link_tambah d-flex">
                  <i class="bi bi-clipboard2-plus text-white"></i>
                  <a href="tambahpengumuman.php">Tambah Pengumuman</a>
                </div>
                <div class="link_tampil mt-4 d-flex">
                  <i class="bi bi-bookmark-check text-white"></i>
                  <a href="tampilpengumuman.php">Tampil Pengumuman</a>
                </div>
              </ul>
            </div>
  
            <div class="mt-4">
              <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                  class="bi bi-book-half"></i>
                Artikel
              </a>
              <ul class="dropdown-menu bg-dark p-4">
                <div class="link_tambah d-flex">
                  <i class="bi bi-plus-circle-dotted text-white"></i>
                  <a href="tambahartikel.php" class="active">Tambah Artikel</a>
                </div>
                <div class="link_tampil mt-4 d-flex">
                  <i class="bi bi-bookmark-star text-white"></i>
                  <a href="tampilartikel.php">Tampilkan Artikel</a>
                </div>
              </ul>
            </div>
            <div class="link_ktampil mt-4 d-flex">
              <i class="bi bi-chat-left-text-fill text-white"></i>
              <a href="tampilpesan.php">Tampilkan Pesan</a>
            </div>
            <div class="link_keluar mt-4 d-flex">
              <i class="bi bi-box-arrow-left text-white"></i>
              <a href="../function/logout.php">Keluar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-12 content">
        <h1>Tambah Artikel</h1>
        <form action="" method="POST" class="mt-4 form_regis" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-11 col-md-12">
              <div class="mb-3">
                <label for="gambar" class="form-label">masukkan gambar</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Masukkan gambar">
              </div>
              <div class="mb-3">
                <label for="judul_artikel" class="judul_artikel">judul</label>
                <input type="text" name="judul_artikel" class="form-control" id="judul_artikel"
                  placeholder="Masukkan Judul artikel">
              </div>
              <div class="mb-3">
                <label for="isi_artikel" class="form-label"><span class="text-danger">!!!Jika ingin menggunakan huruf
                    tebal, miring dan coretan anda harus klik edit lalu update pada halaman tampil artikel</span><br>
                  Isi artikel</label> <br>
                <textarea name="isi_artikel" cols="60" rows="10" style="width:100%;"
                  placeholder="Masukkan isi artikel"></textarea>
              </div>
              <div class="mb-3 d-flex justify-content-end">
                <button type="reset" class="btn btn-danger me-3">Batal</button>
                <button type="submit" class="btn btn-success" name="submit">Tambah</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>