<!-- cara menangani yang langsung masuk kedalan latihan1.php  -->
<?php 
    if (!isset($_GET["nama"]) ||
        !isset($_GET["img"]) ||
        !isset($_GET["zodiak"]) ||
        !isset($_GET["gen"]) ||
        !isset($_GET["email"]) ) {
        
        // Redirecit 
        header("Location: lat07_GET_POST.php") ;  
        exit ; 
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
    <h1>Daftar biodata Mem JKT48</h1>
    <ul>
        <li>
            <img style="width: 120px;" src="../img/<?php echo $_GET["img"]; ?>">
        </li>
        <li>Nama : <?php echo $_GET["nama"]; ?> </li>
        <li>Gen :  <?php echo $_GET["gen"]; ?></li>
        <li>Zodiak : <?php echo $_GET["zodiak"]; ?></li>
        <li>Email : <?php echo $_GET["email"]; ?></li>
    </ul>

    <a href="lat07_GET_POST.php">Kembali ke daftar member</a>
</body>
</html>