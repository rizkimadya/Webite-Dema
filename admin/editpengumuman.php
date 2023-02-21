<?php
    include '../function/fungsi.php';
    $id = $_POST['id'];
    $table_pengumuman = query_single ("SELECT * FROM table_pengumuman WHERE id='$id'");

    if(isset($_POST["update"])){
        if(edit_pengumuman($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diedit');
                    document.location.href = 'tampilpengumuman.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal diedit');
                    document.location.href = 'tampilpengumuman.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord Admin</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

       <!-- ck editor -->
       <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	  <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>

    <section id="edit_pengumuman">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <h1 class="text-center mt-3">EDIT PENGUMUMAN</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $table_pengumuman['id'];?>">
                        <div class="mb-3">
                            <label for="tgl_pengumuman" class="form-label">tgl_pengumuman</label>
                            <input id="tgl_pengumuman" type="date" name="tgl_pengumuman" class="form-control" placeholder="masukkan tgl_pengumuman"
                                value="<?= $table_pengumuman['tgl_pengumuman'];?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul_pengumuman" class="form-label">judul_pengumuman</label>
                            <textarea type="text" name="judul_pengumuman" class="form-control" rows="4"> <?= $table_pengumuman['judul_pengumuman'];?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi_singkat" class="form-label">deskripsi_singkat</label>
                            <textarea type="text" name="deskripsi_singkat" class="form-control" rows="6"> <?= $table_pengumuman['deskripsi_singkat'];?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isi_pengumuman" class="form-label">isi_pengumuman</label>
                            <textarea type="text" name="isi_pengumuman" class="ckeditor" id="ckedtor" rows="20"> <?= $table_pengumuman['isi_pengumuman'];?></textarea>
                        </div>
                        <div class="mb-3">
                        <embed src="../file_pdf/<?= $table_pengumuman['file_pdf'];?>" type="application/pdf" width="100%" height="600">
                        <div class="mb-3">
                            <label for="file_pdf" class="form-label">Upload PDF</label>
                            <input type="file" name="file_pdf" class="form-control" id="file_pdf" placeholder="Masukkan File PDF" value="<?= $table_pengumuman['file_pdf'];?>" required>
                        </div>
        
                       <div class="d-flex mb-3">
                           <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                           <div>
                               <a name="kembali" class="btn btn-danger" href="tampilpengumuman.php">Kembali</a>
                           </div>
                       </div>
                    </div>
                </div>
            </form>
        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>