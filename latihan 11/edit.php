<?php
    //agar terhubung dengan file functions
    require 'functions.php' ; 

    $id = $_GET["id"] ;
    $mahasiswa = query("SELECT * FROM mahasiswa where id = $id ") ;

    if (isset($_POST["submit"])) {
        // tambah($_POST) ;
        if (ubah($_POST) > 0) {
            echo '<script>
                    alert("sukses mengupdate data");
                    document.location.href = "database_dan_mysql2.php";
                </script>';
        } else {
            echo '<script>
                    alert("maaf data gagal di update");
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
    <title>Edit data</title>
</head>
<body>
    <form action="" method="post">
        <h1>Edit Data</h1>
        <ul>
            
                <input type="hidden" name="id" value="<?php echo $mahasiswa[0]["id"] ?>">
            <li>
                <label for="nama">Masukan nama :</label>
                <input type="text" name="nama" id="nama" value="<?php echo $mahasiswa[0]["nama"] ?>" >
            </li>
            <li>
                <label for="nim">nim :</label>
                <input type="number" name="nim" id="nim" value="<?php echo $mahasiswa[0]["nim"] ?>" required >
            </li>
            <li>
                <label for="email">Masukan email :</label>
                <input type="text" name="email" id="email" required value="<?php echo $mahasiswa[0]["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Masukan jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mahasiswa[0]["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Masukan gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?php echo $mahasiswa[0]["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update data</button>
            </li>
            
            
        </ul>
    </form>
</body>
</html>