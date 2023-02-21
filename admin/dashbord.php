<?php
  session_start();

  if(isset($_GET['logout'])){
    unset($_SESSION['admindema']);
    header('Location: ../admin/login.php');
  }else if(!isset($_SESSION['admindema'])){
    header('Location: ../admin/login.php');
  } 

  include '../function/fungsi.php';
    //menghitung jumlah artikel   
  $table_artikel = mysqli_query($koneksi, "SELECT * FROM table_artikel");
  $jumlah_artikel = mysqli_num_rows($table_artikel);

    //menghitung jumlah pengumuman
  $table_pengumuman = mysqli_query($koneksi,"SELECT * FROM table_pengumuman");
  $jumlah_pengumuman = mysqli_num_rows($table_pengumuman);   

    //menghitung total
  $hasil = $jumlah_artikel + $jumlah_pengumuman;

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
    <link rel="stylesheet" href="styledashboard.css">

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--jam js-->
    <script type="text/javascript">
        function displayTime() {
            var clientTime = new Date();
            var time = new Date(clientTime.getTime());
            var sh = time.getHours().toString();
            var sm = time.getMinutes().toString();
            var ss = time.getSeconds().toString();
            document.getElementById("jam").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" +
                sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
        }
    </script>

</head>

<body onload="setInterval('displayTime()', 1000);">

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
                            <a href="dashbord.php" class="active">Dashboard</a>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bi bi-award-fill"></i>
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
                            <a href="#" class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="bi bi-book-half"></i>
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
                <h1>Dashboard Admin</h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-4">
                        <h1 id="jam"></h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <hr>
                    <div class="col-lg-3 col-md-12">
                        <div class="card artikel p-4 text-center">
                            <h4>Artikel</h4>
                            <h1><?php echo $jumlah_artikel;?></h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card pengumuman p-4 text-center">
                            <h4>Pengumuman</h4>
                            <h1><?php echo $jumlah_pengumuman;?></h1>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card total p-4 text-center">
                            <h4>Total</h4>
                            <h1><?php echo $hasil;?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--main js-->
    <script src="../javascript/main.js"></script>
    <!--akhir main js-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>