<?php
    include '../function/fungsi.php';
    $id = $_POST['id'];
    $table_pengumuman = query_single ("SELECT * FROM table_pengumuman WHERE id='$id'");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEBSITE DEMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- link css -->
    

    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  </head>
  <body>
    <section id="previewpfd">
        <div class="row">
            <div class="col-12">
                <input type="hidden" name="id" value="<?= $table_pengumuman['id'];?>">
                <embed src="../file_pdf/<?= $table_pengumuman['file_pdf'];?>" type="application/pdf" width="100%" height="680">
            </div>
        </div>
    </section>    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>