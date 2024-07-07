<?php
    $jkts = [
        ["img" => "oniel.jpg" ,"nama" => 'Oniel' , "gen" => "8" , "zodiak" => "Leo
        " ,"email" => "oniel@yahoo.com"] ,
        ["img" => "olla.jpg" ,"nama" => 'Olla' , "gen" => "7" , "zodiak" => "Pisces
        " ,"email" => "olla@yahoo.com"]
    ] ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mem JKT48</h1>
    
    <?php foreach($jkts as $jkt) : ?>
        <ul>
            <li>
                <img style="width: 120px;" src="img/<?php echo $jkt["img"]?>">
            </li>
            <li>Nama : <?php echo $jkt["nama"] ?></li>
            <li>Gen :<?php echo $jkt["gen"] ?></li>
            <li>Zodiak : <?php echo $jkt["zodiak"] ?></li>
            <li>Email : <?php echo $jkt["email"] ?></li>
        </ul>
    <?php endforeach ; ?> 
</body>
</html>