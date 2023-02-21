<?php
    include '../function/fungsi.php';
    $id_artikel = $_POST['id_artikel'];
    $table_artikel = query_single("SELECT * FROM table_artikel WHERE id_artikel='$id_artikel'");


    if(isset($_POST["update"])){
        if(edit_artikel($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diedit');
                    document.location.href = 'tampilartikel.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data Gagal diedit');
                    document.location.href = 'tampilartikel.php';
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

    <section id="edit_artikel">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <h1 class="text-center mt-3">EDIT ARTIKEL</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="gambar-lama" value="<?= $table_artikel['gambar']?>">
                        <input type="hidden" name="id_artikel" value="<?= $table_artikel['id_artikel'];?>">
                        <div class="mb-3">
                            <label for="judul_artikel" class="form-label">judul artikel</label>
                            <textarea type="text" name="judul_artikel" class="form-control" rows="4"> <?= $table_artikel['judul_artikel'];?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="isi_artikel" class="form-label">isi_artikel</label>
                            <textarea type="text" name="isi_artikel" class="ckeditor" id="ckedtor" rows="20"> <?= $table_artikel['isi_artikel'];?></textarea>
                        </div>
                        <div class="mb-3">
                            <img src="../foto/<?=$table_artikel['gambar'];?>" alt="" width="150px">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">gambar</label>
                            <input type="file" name="gambar" id="gambar" placeholder="masukkan gambar anda"
                            value="<?= $table_artikel['gambar'];?>" required>
                        </div>
                       <div class="d-flex mb-3">
                           <button type="submit" name="update" class="btn btn-primary me-2">Update</button>
                           <div>
                               <a name="kembali" class="btn btn-danger" href="tampilartikel.php">Kembali</a>
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