<?php
    //agar terhubung dengan file functions
    require 'functions.php' ; 

    if (isset($_POST["submit"])) {
        // tambah($_POST) ;
        if (tambah($_POST) > 0) {
            echo '<script>
                    alert("sukses");
                    document.location.href = "database_dan_mysql2.php";
                </script>';
        } else {
            echo '<script>
                    alert("maaf data gagal");
                    document.location.href = "database_dan_mysql2.php";
                </script>';
        }
    } ; 
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Masukan nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nim">nim :</label>
                <input type="number" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Masukan email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Masukan jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Masukan gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">kirim data</button>
            </li>
            
            
        </ul>
    </form>
</body>
</html>