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
    if(tambah($_POST) > 0){
      echo "
        <script>
          alert('Pengumuman Berhasil ditambahkan');
          document.location.href = '../admin/tampilpengumuman.php';
        </script>
      ";
    }else{
      echo "
        <script>
          alert('Pengumuman Gagal ditambah');
          document.location.href = '../admin/tambahpengumuman.php';
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

  <!-- cdn jquery -->
  <link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

  <!-- script sweet alert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                  <a href="tambahpengumuman.php" class="active">Tambah Pengumuman</a>
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
                  <a href="tambahartikel.php">Tambah Artikel</a>
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
        <h1>Tambah Pengumuman</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="mt-4 form_regis">
          <div class="row">
            <div class="col-lg-11 col-md-12">
              <div class="mb-3">
                <label for="tgl_pengumuman" class="form-label">tanggal pengumuman</label>
                <input type="date" name="tgl_pengumuman" class="form-control" id="tgl_pengumuman"
                  placeholder="Masukkan tgl_pengumuman">
              </div>
              <div class="mb-3">
                <label for="judul_pengumuman" class="judul_pengumuman">judul</label>
                <input type="text" name="judul_pengumuman" class="form-control" id="judul_pengumuman"
                  placeholder="Masukkan Judul">
              </div>
              <div class="mb-3">
                <label for="deskripsi_singkat" class="form-label">Deskripsi Singkat</label>
                <input type="text" name="deskripsi_singkat" class="form-control" id="deskripsi_singkat"
                  placeholder="Masukkan deskripsi singkat">
              </div>
              <div class="mb-3">
                <label for="isi_pengumuman" class="form-label"><span class="text-danger">!!!Jika ingin menggunakan huruf
                    tebal, miring dan coretan anda harus klik edit lalu update pada halaman tampil pengumuman</span><br>
                  Isi Pengumuman</label> <br>
                <textarea name="isi_pengumuman" cols="60" rows="10" style="width:100%;"
                  placeholder="Masukkan isi pengumuman"></textarea>
              </div>
              <div class="mb-3">
                <label for="file_pdf" class="form-label">Upload PDF</label>
                <input type="file" name="file_pdf" class="form-control" id="file_pdf" placeholder="Masukkan File PDF">
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