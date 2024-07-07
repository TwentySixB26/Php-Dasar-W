<?php
    //sesion agar connect
    session_start() ; 
    if (isset($_SESSION["login"]) === true ) {
        header("Location: database_dan_mysql2.php") ; 
        exit ; 
    }

    //agar terhubung dengan file functions
    require 'functions.php' ; 

    if (isset($_POST["submit"])) {
        // tambah($_POST) ;
        if (login($_POST) > 0) {
            echo '<script>
                    alert("Anda berhasil login ");
                    document.location.href = "database_dan_mysql2.php";
                </script>';
            $_SESSION["login"] = true ; 
        } else {
            echo '<script>
                    alert("Anda gagal login silahkan cek username dan passwordnya!");
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
    <h1>LOG IN </h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">kirim data</button>
            </li>
        </ul>
    </form>
</body>
</html>