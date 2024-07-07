<?php if (!isset($_POST["submit"])) :?>
        <?php 
            header("Location: lat07_GET_POST2.php") ;  
            exit ; ?>
<?php endif ; ?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Selamat datang <?php echo $_POST["nama"] ; ?></h2>
</body>
</html>