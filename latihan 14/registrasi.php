<?php
    //agar terhubung dengan file functions
    require 'functions.php' ; 

    if (isset($_POST["submit"])) {
        // tambah($_POST) ;
        if (registrasi($_POST) > 0) {
            echo '<script>
                    alert("Akun anda telah didaftarkan");
                </script>';
        } else {
            echo '<script>
                    alert("Akun anda gagal terdaftarkan!");
                </script>';
        }
    } ; 
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrasi </h1>
    <div>
        <form action="" method="post">
            <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username" >
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password" >
            </li>
            <li>
                <label for="password2">konfirmasi password :</label>
                <input type="password2" name="password2" id="password2" >
            </li>
            <li>
                <button type="submit" name="submit">kirim data</button>
            </li>
            </ul>
        </form>
    </div>
</body>
</html>