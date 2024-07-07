<?php 
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: soal_login2.php") ;  
            exit ; 
        } else {
            $error = true; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOG IN</h1>
    <form action="" method="post">
        <div>
            <label for="username">username: </label>
            <input type="text" name="username" id="username">
        </div>

        <div>
            <label for="password">password:</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit" name="submit">kirim</button>
        <?php if (isset($error)) : ?>
            <p style="color : red ;">Username atau password salah</p>
        <?php endif ;?>
    </form>
</body>
</html>