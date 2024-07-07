<!-- ============== PENGUNAAN POST ====================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php if (isset($_POST["submit"])) :?>
            <h2>Selamat datang <?php echo $_POST["nama"]?> </h2>
    <?php endif ; ?> -->
    
    <form action="latihan2.php" method="post">
        <Label for="nama"> Masukan nama : </Label>
        <input type="text" name="nama" id="nama">

        <br>
        <button type="submit" name="submit"> klik submit</button>
    </form>

    <!-- jika action nya kosong  -->
    <!-- <form action="" method="post">
        <Label for="nama"> Masukan nama : </Label>
        <input type="text" name="nama" id="nama">

        <br>
        <button type="submit" name="submit"> klik submit</button>
    </form> -->
</body>
</html>