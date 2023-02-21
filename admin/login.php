<?php

  include '../function/fungsi.php';
  if(isset($_POST["login"])){
    session_start();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM admindema WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      echo $row["email"];
      $_SESSION['admindema'] = $row["email"];
      header("Location: ../admin/dashbord.php");
    }
    $error = true;
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
    <link rel="stylesheet" href="../admin/loginadmin.css">
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  </head>
  <body>
    
    <!-- content -->
    <section id="login" class="bg">
        <div class="row mx-auto">
           <div class="col-lg-4 col-sm-12"></div>
           <div class="col-lg-4 col-sm-12">
                <div class="card p-5">
                    <?php
                    if(isset ($error)) : ?>
                    <h5 class="text-danger text-center">email / Password Salah !!</h5>
                    <?php endif; ?>
                    <h4>Silahkan Login!</h4>
                    <img src="../img/logo.png" alt="" width="170" class="ms-auto me-auto p-2">
                    <form action="../admin/login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn" name="login">Login</button>
                    </form>
                </div>
           </div>
           <div class="col-lg-4 col-sm-12"></div>
        </div>
    </section>
    <!-- akhir content -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>