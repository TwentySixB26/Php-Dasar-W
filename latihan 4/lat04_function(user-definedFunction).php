<?php
    function salam($nama ="teman", $waktu = "datang") {
        return "Selamat $waktu,$nama!" ;
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
    <h1>
        <?php
            echo salam("Oniel" , "malam") ;
        ?>
    </h1>
</body>
</html>