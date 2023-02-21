<?php

    $koneksi = mysqli_connect('localhost','root','','databasedema');
    if(mysqli_connect_errno()){
        echo"Gagal :" . mysqli_connect_error();
    }

    //bro == query
    function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function query_single($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        return $data = mysqli_fetch_assoc($result);
    }

    // login
    function login($data){
        global $koneksi;

        $email = stripslashes($data["email"]);
        $password = $data["password"];
    
        //cek username sudah ada atau belum
        $result = mysqli_query($koneksi,"SELECT email FROM admindema WHERE email = '$email'");

        if(mysqli_fetch_assoc($result)){
            echo "
                <script>
                    alert('email sudah terdaftar')
                </script>
            ";

            return false;
        }


        //tambahkan user password ke database
        mysqli_query($koneksi, "INSERT INTO admindema VALUES('', '$email','$password')");

        return mysqli_affected_rows($koneksi);
    }


    // tambah pengumuman
    function tambah($data){
        global $koneksi;

        $tgl_pengumuman = htmlspecialchars($data["tgl_pengumuman"]);
        $judul_pengumuman = htmlspecialchars($data["judul_pengumuman"]);
        $deskripsi_singkat = htmlspecialchars($data["deskripsi_singkat"]);
        $isi_pengumuman = htmlspecialchars($data["isi_pengumuman"]);
        $file_pdf = uploadpdf($_FILES);
        if(!$file_pdf){
            return false;
        }

        mysqli_query($koneksi, "INSERT INTO table_pengumuman VALUES('', '$tgl_pengumuman', '$judul_pengumuman', '$deskripsi_singkat', '$isi_pengumuman','$file_pdf')");

        return mysqli_affected_rows($koneksi);
    }

    function uploadpdf() {

        $file_pdf = $_FILES['file_pdf']['name'];
        $lokasi = $_FILES['file_pdf']['tmp_name'];
    
        $ekstensiFileValid = ['pdf'];
        $ekstensiFile = explode('.', $file_pdf);
        $ekstensiFile = strtolower(end($ekstensiFile));
    
        if( !in_array($ekstensiFile, $ekstensiFileValid) ){
            echo"
                <script>
                    alert('Yang diupload bukan PDF');
                </script>
            ";
            return false;
        }
        
        $file_pdf = uniqid();
        $file_pdf .= '.';
        $file_pdf .= $ekstensiFile;
        move_uploaded_file($lokasi, "../file_pdf/".$file_pdf);

        return $file_pdf;
    
    }


    // hapus pengumuman
    function hapus_pengumuman($data){
        global $koneksi;
        $id = $data["id"];

        mysqli_query($koneksi, "DELETE FROM table_pengumuman WHERE id=$id");
        return mysqli_affected_rows($koneksi);
    }



    // tambah artikel
    function tambah_artikel($data){
        global $koneksi;

        $judul_artikel = htmlspecialchars($data["judul_artikel"]);
        $isi_artikel = htmlspecialchars($data["isi_artikel"]);
        $gambar = uploadgambar($_FILES);
        if(!$gambar){
            return false;
        }

        mysqli_query($koneksi, "INSERT INTO table_artikel VALUES('','$judul_artikel', '$isi_artikel', '$gambar')");

        return mysqli_affected_rows($koneksi);
    }

    function uploadgambar() {

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu !');
                  </script>";

            return false;
        }

        //pastikan yang diupload adalah gambar
        $ekstensigambarValid = ['jpeg', 'jpg', 'png'];
        $ekstensigambar = explode('.', $namaFile);
        $ekstensigambar = strtolower(end($ekstensigambar));
        if ( !in_array($ekstensigambar, $ekstensigambarValid)) {
            echo "<script>
                    alert('Yang di upload bukan gambar !');
                  </script>";

            return false;
        }

        //cek jika ukuran terlalu besar
        if ( $ukuranFile > 2500000) {
            echo "<script>
                    alert('Ukuran gambar terlalu besar !');
                  </script>";

            return false;
        }

        //lolos pengecekan, gambar siap diupload
        // ubah nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensigambar;
        move_uploaded_file($tmpName, "../foto/".$namaFileBaru);

        return $namaFileBaru;
    }

    // hapus artikel    
    function hapus_artikel($data){
        global $koneksi;
        $id_artikel = $data["id_artikel"];

        mysqli_query($koneksi, "DELETE FROM table_artikel WHERE id_artikel=$id_artikel");
        return mysqli_affected_rows($koneksi);
    }


    // edit pengumuman
    function edit_pengumuman($post){
        global $koneksi;
        $id = $post["id"];
        $tgl_pengumuman = $post["tgl_pengumuman"];
        $judul_pengumuman = $post["judul_pengumuman"];
        $deskripsi_singkat = $post["deskripsi_singkat"];
        $isi_pengumuman = $post["isi_pengumuman"];
       

        $query = "UPDATE table_pengumuman SET tgl_pengumuman='$tgl_pengumuman', judul_pengumuman='$judul_pengumuman', deskripsi_singkat='$deskripsi_singkat', isi_pengumuman='$isi_pengumuman' WHERE id='$id'";

        mysqli_query($koneksi, $query);

        if(mysqli_affected_rows($koneksi) > 0){
            header("location:tampilpengumuman.php?sukses-edit=3");
        }

        else{
            header("location:tampilpengumuman.php?sukses-edit=0");
        }

    }


    // edit artikel
    function edit_artikel($post){
        global $koneksi;
        $id_artikel = $post["id_artikel"];
        $judul_artikel = $post["judul_artikel"];
        $isi_artikel = $post["isi_artikel"];
        $gambar_lama = $post["gambar_lama"];

        if($_FILES["gambar"]["error"] === 4){
            $gambar = $gambar_lama;
        }else{
            $dir =  "../foto/";
            unlink($dir.$gambar_lama);
            $gambar = uploadgambar($_FILES);
        }

        $query = "UPDATE table_artikel SET judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', gambar='$gambar' WHERE id_artikel='$id_artikel'";

        mysqli_query($koneksi, $query);

        if(mysqli_affected_rows($koneksi) > 0){
            header("location:tampilartikel.php?sukses-edit=3");
        }

        else{
            header("location:tampilartikel.php?sukses-edit=0");
        }
    }


    //kirim pesan
    function kirim_pesan($data){
        global $koneksi;

        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $pesan = htmlspecialchars($data["pesan"]);

        mysqli_query($koneksi, "INSERT INTO table_pesan VALUES('', '$nama', '$email', '$pesan')");

        return mysqli_affected_rows($koneksi);
    }
?>  